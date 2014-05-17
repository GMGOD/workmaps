<?php
require_once 'conexion.php';
require_once 'funciones.php';
class consultas{
	var $mysql;
	
	//CONSTRUCTOR DE LA CLASE
	public function __construct(){
		$host	=	"127.0.0.1";
		$user	=	"root";
		$pass	=	"root";
		$db		=	"workmaps";
			$this->mysql = new MySQLPDO($host,$user,$pass,$db);
	}
	
	public function iniciarSesion($usuario,$password){
		$sql = "SELECT
		m.id,m.group_id,m.user_nick,m.user_pass,m.email,m.activar,m.state,m.unban_time,ui.nombre,ui.apellido,ac.listo,m.logincount
		FROM miembros AS m
		LEFT JOIN user_info AS ui ON m.id = ui.userid
		LEFT JOIN acti_codigos AS ac ON ac.userid = ui.userid
		WHERE (m.user_nick = ? OR m.email = ?) AND m.user_pass = ?";
		/*return $sql;*/
			foreach ($this->mysql->getData($sql,array($usuario,$usuario,$password)) as $data){
				$id			= $data['id'];
				$group_id   = $data['group_id'];//nivel, si es administrador o no
				$user_nick	= $data['user_nick'];
				$user_pass	= $data['user_pass'];
				$email		= $data['email'];
				$activar	= $data['activar'];
				$state		= $data['state'];
				$unban_time = $data['unban_time'];
				$nombre		= $data['nombre'];
				$apellido	= $data['apellido'];
				$listo		= $data['listo'];
				$logincount = $data['logincount'];
			}
		if($id!="" || $id!=0){
			if($activar == 1 && $listo == 1){
				if($state == 2){
					
					return "../index.php?sec=login&val=3"; #Cuenta baneada
				}else{
				$_SESSION['www_id']			= $id;
				$_SESSION['www_group_id']	= $group_id;
				$_SESSION['www_nombre']		= $nombre;
				$_SESSION['www_apellido']	= $apellido;
				$_SESSION['www_mail']		= $email;
				$_SESSION['www_state']		= $state;
				$_SESSION['www_unban_time']	= $unban_time;
					#emails($email,"test de mensaje",$nombre,1); #Error con sertificado SSL en mandrill class
					$lista = $this->getBrowser();
					$sql = "INSERT INTO datos_login";
					$sql .= "(userid,userAgent,name,version,pattern,sistemaOperativo,last_ip,fecha)";
					$sql .= "VALUES";
					$sql .= "(?,?,?,?,?,?,?,?)";
					#echo $sql.'<br>';
					$this->mysql->insertData($sql,array($id,$lista['userAgent'],$lista['name'],$lista['version'],$lista['pattern'],$this->getOs(),$this->getRealIP(),date('Y-m-d H:i:s')));
					$logincount = $logincount + 1;
					$sql = "UPDATE miembros SET logincount=". $logincount ." WHERE id = ?";
					$this->mysql->editData($sql,array($id));
					
					return "../index.php?sec=index"; #Logeado
				}
			}else{
				
				return "../index.php?sec=activar&val=0"; #enviar a activar dado que la cuenta no ha sido comprobada por email
			}
		}else{
			
			return "../index.php?sec=login&val=1"; #usuario y contraseña no coinciden
		}
		
		return "../index.php?sec=error_session"; #ERROR (problemas con la session)
		/* <script>alert("Sesion: '.$_SESSION['www_id'].'");</script> */
	}
	
	public function logout(){
			if(session_destroy()){
				$_SESSION['www_id']			= 0;
				$_SESSION['www_group_id']	= 0;
				$_SESSION['www_nombre']		= "";
				$_SESSION['www_apellido']	= "";
				$_SESSION['www_mail']		= "";
				$_SESSION['www_state']		= 0;
				$_SESSION['www_unban_time']	= 0;
				return "../index.php?sec=index";
			}else{
				return "../index.php?sec=error_session";
			}
	}
	
	public function registro($txtUsuario,$txtPassword,$txtMail,$txtNombre,$txtApellido,$cmbSexo,$txtRut,$salt){
		$sql = "INSERT INTO miembros";
		$sql .= "(user_nick,user_pass,email,activar,state,fecha_creacion)";
		$sql .= "VALUES";
		$sql .= "(?,?,?,2,1,?)";
		#echo $sql.'<br>';
			$this->mysql->insertData($sql,array($txtUsuario,$txtPassword,$txtMail,date('Y-m-d H:i:s')));
			$ultimoIdMIEMBROS = $this->mysql->lastID();
			
		$sql = "INSERT INTO user_info";
		$sql .= "(userid,nombre,apellido,rut,sex)";
		$sql .= "VALUES";
		$sql .= "(?,?,?,?,?)";
		#echo $sql.'<br>';
			$this->mysql->insertData($sql,array($ultimoIdMIEMBROS,$txtNombre,$txtApellido,$txtRut,$cmbSexo));
			
		$sql = "INSERT INTO acti_codigos";
		$sql .= "(userid,cod,expi)";
		$sql .= "VALUES";
		$sql .= "(?,?,?)";
		#echo $sql.'<br>';
			$this->mysql->insertData($sql,array($ultimoIdMIEMBROS,md5(md5($salt).md5($txtPassword)),date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). ' + 1 days'))));
			
		$lista = $this->getBrowser();
		$sql = "INSERT INTO datos_login";
		$sql .= "(userid,userAgent,name,version,pattern,sistemaOperativo,last_ip,fecha)";
		$sql .= "VALUES";
		$sql .= "(?,?,?,?,?,?,?,?)";
		#echo $sql.'<br>';
			$this->mysql->insertData($sql,array($ultimoIdMIEMBROS,$lista['userAgent'],$lista['name'],$lista['version'],$lista['pattern'],$this->getOs(),$this->getRealIP(),date('Y-m-d H:i:s')));

		
		return "../index.php?sec=activar&val=0";
/*		if(!emails($txtMail,NULL,$txtUsuario,1,md5(md5($salt).md5($txtPassword)))){
			return "../index.php?sec=registro&val=1";
			#DEBE REDIRECCIONAR SI EL MAIL NO FUE ENVIADO
		}else{
			return "../index.php?sec=activar&val=0";
			#DEBE REDIRECCIONAR SI ES LA PRIMERA VEZ QUE ENTRA hacia una web de creacion de curriculum
		}*/
	}
	
	public function activarMail($txtActivar){
		if($txtActivar != "" || $txtActivar != 0){
				$sql="SELECT * FROM acti_codigos WHERE cod = ?";
				foreach ($this->mysql->getData($sql,array($txtActivar)) as $data){
					$userid			=	$data['userid'];
					$expi			=	$data['expi'];
				}
				if($userid == '' || $userid == 0){
					
					return "../index.php?sec=activar&val=1";
				}
					//eliminar expiracion
					$sql = "UPDATE acti_codigos SET expi=0, listo=1 WHERE userid = ?";
					//activar cuenta
					$sql2 = "UPDATE miembros SET activar=1 WHERE id = ?";
					if($this->mysql->editData($sql,array($userid)) <= 1 && $this->mysql->editData($sql2,array($userid)) <= 1){
					//cuenta activa
							
							return "../index.php?sec=login&val=2";
					}
					
					return "../index.php?sec=activar&val=3";

		}else{
			
			return "../index.php?sec=activar&val=1";
		}
	}
	
	public function userExiste($usuario){
		if($usuario != "" || $usuario != 0){
			$sql="SELECT * FROM miembros WHERE user_nick = ?";
			foreach ($this->mysql->getData($sql,array($usuario)) as $data){
				$id			=	$data['id'];
			}
			
			if($id == "" || $id == 0){
				return 1;
			}else{return 2;}
		}
	}
	
	public function mailExiste($mail){
		if($mail != "" || $mail != 0){
			$sql="SELECT * FROM miembros WHERE email = ?";
			foreach ($this->mysql->getData($sql,array($mail)) as $data){
				$id			=	$data['id'];
			}
			
			if($id == "" || $id == 0){
				return 1;
			}else{return 2;}
		}
	}
	
	public function rutExiste($rut){
		if($rut != "" || $rut != 0){
			$sql="SELECT * FROM user_info WHERE rut = ?";
			foreach ($this->mysql->getData($sql,array($rut)) as $data){
				$id			=	$data['id'];
			}
			
			if($id == "" || $id == 0){
				return 1;
			}else{return 2;}
		}
	}
	public function mailUnico($txtEmailN){
		if($txtEmailN != "" || $txtEmailN != 0){
			$sql="SELECT * FROM miembros WHERE email = ?";
			foreach ($this->mysql->getData($sql,array($txtEmailN)) as $data){
				$id			=	$data['id'];
			}
			
			if($id == "" || $id == 0){
				return 1;
			}else{return 2;}
		}
	}
	
	public function passCoincide($txtPassword,$id){
		if($id != "" || $id != 0){
			$sql="SELECT * FROM miembros WHERE user_pass = ? AND id = ?";
			foreach ($this->mysql->getData($sql,array($txtPassword,$id)) as $data){
				$id2		=	$data['id'];
			}
			
			if($id == $id2){
				return 1;
			}else{return 2;}
		}
	}
	
	public function modMail($id_txtUsuario,$txtEmailN){
		$sql = "UPDATE miembros SET email = ? WHERE id = ?";
		if($this->mysql->editData($sql,array($txtEmailN,$id_txtUsuario)) <= 1){
			
			return 1;
		}else{
			
			return 2;
		}
	}
	
	public function modPass($id_txtUsuario,$txtPasswordNew){
		$sql = "UPDATE miembros SET user_pass = ? WHERE id = ?";
		if($this->mysql->editData($sql,array($txtPasswordNew,$id_txtUsuario)) <= 1){
			
			return 1;
		}else{
			
			return 2;
		}
	}
	
	public function banear($id){
		$sql = "UPDATE miembros SET state=2 WHERE id = ?";
		if($this->mysql->editData($sql,array($id)) <= 1){
			
			return TRUE;
		}
		
		return FALSE;
	}
	
	public function desBanear($id){
		$sql = "UPDATE miembros SET state=1 WHERE id = ?";
		if($this->mysql->editData($sql,array($id)) <= 1){
			return TRUE;
		}
		
		return FALSE;
	}
	
	public function volverConfirmar($nombre,$id){
		$sql="SELECT * FROM acti_codigos WHERE userid = ? AND listo = 2";
		foreach ($this->mysql->getData($sql,array($id)) as $data){
			$id2		=	$data['id'];
		}
		if($id2 == 0){
			$sql = "UPDATE miembros SET activar=2 WHERE id = ?";
			if($this->mysql->editData($sql,array($id)) <= 1){
				$sql = "INSERT INTO acti_codigos";
				$sql .= "(userid,cod,expi,listo)";
				$sql .= "VALUES";
				$sql .= "(?,?,?,2)";
				$this->mysql->insertData($sql,array($id,md5(md5($salt).md5($nombre)),date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). ' + 1 days'))));
				
				return TRUE;
			}
		}
		
		return FALSE;
	}
	public function confirmar($id){
		$sql = "UPDATE miembros SET activar=1 WHERE id = ?";
		if($this->mysql->editData($sql,array($id)) <= 1){
			$sql = "UPDATE acti_codigos SET expi=0,listo=1 WHERE userid = ? AND listo=2";
			if($this->mysql->editData($sql,array($id)) <= 1){
				return TRUE;	
			}
			
			return FALSE;
		}
		return FALSE;
	}
	public function getDatos($id){
		$sql = "SELECT * FROM miembros WHERE id = ?";
		$resp = $this->mysql->getData($sql,array($id));
		
		return $resp;
	}
	public function getUsuarios($id,$grupo){
		if($grupo != 99){return false;}
		$sql = "SELECT
		m.id, m.user_nick, m.email, ui.nombre, ui.apellido, ui.rut, ui.sex, m.state, m.fecha_creacion, m.group_id, m.activar
		FROM miembros m
		LEFT JOIN user_info ui ON m.id=ui.userid WHERE m.id <> ? ORDER BY m.fecha_creacion DESC";
		$resp = $this->mysql->getData($sql,array($id));
		
		return $resp;
	}
	public function getUserInfo($id){
		$sql = "SELECT
		m.id,m.email,m.user_nick,m.group_id,m.logincount,m.fecha_creacion,ui.nombre,ui.apellido,ui.rut,ui.sex
		FROM miembros AS m
		LEFT JOIN user_info ui ON m.id=ui.userid
		WHERE m.id = ?";
		$resp = $this->mysql->getData($sql,array($id));
		
		return $resp;
	}
	public function getDatos_login($id){
		$sql = "SELECT * FROM datos_login WHERE userid = ? ORDER BY fecha desc LIMIT 8";
		$resp = $this->mysql->getData($sql,array($id));
		
		return $resp;
	}
//OTROS DATOS PARA LOGIN Y REGISTRO
	public function getBrowser(){
		$u_agent = $_SERVER['HTTP_USER_AGENT']; 
		$bname = 'Unknown';
		$platform = 'Unknown';
		$version= "";
	
	
		// Next get the name of the useragent yes seperately and for good reason
		if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){ 
			$bname = 'Internet Explorer'; 
			$ub = "MSIE"; 
		}elseif(preg_match('/Firefox/i',$u_agent)){ 
			$bname = 'Mozilla Firefox'; 
			$ub = "Firefox"; 
		}elseif(preg_match('/Chrome/i',$u_agent)){ 
			$bname = 'Google Chrome'; 
			$ub = "Chrome"; 
		}elseif(preg_match('/Safari/i',$u_agent)){ 
			$bname = 'Apple Safari'; 
			$ub = "Safari"; 
		}elseif(preg_match('/Opera/i',$u_agent)){ 
			$bname = 'Opera'; 
			$ub = "Opera"; 
		}elseif(preg_match('/Netscape/i',$u_agent)){ 
			$bname = 'Netscape'; 
			$ub = "Netscape"; 
		} 
	
		// finally get the correct version number
		$known = array('Version', $ub, 'other');
		$pattern = '#(?<browser>' . join('|', $known) .
		')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
			if (!preg_match_all($pattern, $u_agent, $matches)){
			// we have no matching number just continue
			}
	
		// see how many we have
		$i = count($matches['browser']);
			if ($i != 1){
			//we will have two since we are not using 'other' argument yet
			//see if version is before or after the name
				if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
					$version= $matches['version'][0];
				}else{
					$version= $matches['version'][1];
				}
			
			}else {
				$version= $matches['version'][0];
			}
	
		// check if we have a number
		if($version==null || $version==""){
			$version="?";
			}
		
		return array(
		'userAgent' => $u_agent,
		'name' => $bname,
		'version' => $version,
		'pattern' => $pattern
		);
	}

	public function getOs(){
	$useragent= strtolower($_SERVER['HTTP_USER_AGENT']);
	
		//winxp
		if (strpos($useragent, 'windows nt 5.1') !== FALSE) {
			return 'Windows XP';
		}elseif (strpos($useragent, 'windows nt 6.1') !== FALSE) {
			return 'Windows 7';
		}elseif (strpos($useragent, 'windows nt 6.0') !== FALSE) {
			return 'Windows Vista';
		}elseif (strpos($useragent, 'windows 98') !== FALSE) {
			return 'Windows 98';
		}elseif (strpos($useragent, 'windows nt 5.0') !== FALSE) {
			return 'Windows 2000';
		}elseif (strpos($useragent, 'windows nt 5.2') !== FALSE) {
			return 'Windows 2003 Server';
		}elseif (strpos($useragent, 'windows nt') !== FALSE) {
			return 'Windows NT';
		}elseif (strpos($useragent, 'win 9x 4.90') !== FALSE && strpos($useragent, 'win me')) {
			return 'Windows ME';
		}elseif (strpos($useragent, 'win ce') !== FALSE) {
			return 'Windows CE';
		}elseif (strpos($useragent, 'win 9x 4.90') !== FALSE) {
			return 'Windows ME';
		}elseif (strpos($useragent, 'windows phone') !== FALSE) {
			return 'Windows Phone';
		}elseif (strpos($useragent, 'iphone') !== FALSE) {
			return 'iPhone';
		}// experimental
		elseif (strpos($useragent, 'ipad') !== FALSE) {
		return 'iPad';
		}elseif (strpos($useragent, 'webos') !== FALSE) {
		return 'webOS';
		}elseif (strpos($useragent, 'symbian') !== FALSE) {
		return 'Symbian';
		}elseif (strpos($useragent, 'android') !== FALSE) {
		return 'Android';
		}elseif (strpos($useragent, 'blackberry') !== FALSE) {
		return 'Blackberry';
		}elseif (strpos($useragent, 'mac os x') !== FALSE) {
		return 'Mac OS X';
		}elseif (strpos($useragent, 'macintosh') !== FALSE) {
		return 'Macintosh';
		}elseif (strpos($useragent, 'linux') !== FALSE) {
		return 'Linux';
		}elseif (strpos($useragent, 'freebsd') !== FALSE) {
		return 'Free BSD';
		}elseif (strpos($useragent, 'symbian') !== FALSE) {
		return 'Symbian';
		}else {
		return 'Desconocido';
		}
	}
	public function getRealIP(){
	if (!empty($_SERVER['HTTP_CLIENT_IP']))
		return $_SERVER['HTTP_CLIENT_IP'];
		
	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	
	return $_SERVER['REMOTE_ADDR'];
	}
	## DESTRUCTOR GLOBAL DE CLASES, SOLO SE LLAMA SI ES NECESARIO ##
	public function destruct() {
		$this->mysql->__destruct();
	}
}//end class
?>