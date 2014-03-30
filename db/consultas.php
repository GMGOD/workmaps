<?php
include 'conexion.php';
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
		m.id,m.group_id,m.user_nick,m.user_pass,m.email,m.activar,m.state,m.unban_time,ui.nombre,ui.apellido,ac.listo
		FROM miembros AS m
		left join user_info AS ui ON m.id = ui.userid
		left join acti_codigos AS ac ON ac.userid = ui.userid
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
			}
				$this->mysql->__destruct();
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
		$sql = "INSERT INTO user_info";
		$sql .= "(userid,nombre,apellido,rut,sex)";
		$sql .= "VALUES";
		$sql .= "(?,?,?,?,?)";
		#echo $sql.'<br>';
			$this->mysql->insertData($sql,array($this->mysql->lastID(),$txtNombre,$txtApellido,$txtRut,$cmbSexo));
		$sql = "INSERT INTO acti_codigos";
		$sql .= "(userid,cod,expi)";
		$sql .= "VALUES";
		$sql .= "(?,?,?)";
		#echo $sql.'<br>';
			$this->mysql->insertData($sql,array($this->mysql->lastID(),md5(md5($salt).md5($txtPassword)),date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). ' + 1 days'))));
			
		$this->mysql->__destruct();
		return "../index.php?sec=index";
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
				$this->mysql->__destruct();
				if($userid == '' || $userid == 0){
					return "../index.php?sec=activar&val=1";
				}else{
					//eliminar expiracion
					$sql = "UPDATE acti_codigos SET expi=0, listo=1 WHERE userid = ?";
					$this->mysql->insertData($sql,array($userid));
					//activar cuenta
					$sql = "UPDATE miembros SET activar=1 WHERE id = ?";
					$this->mysql->insertData($sql,array($userid));
					$this->mysql->__destruct();
					return "../index.php?sec=login&val=2";
					}
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
			$this->mysql->__destruct();
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
			$this->mysql->__destruct();
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
			$this->mysql->__destruct();
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
			$this->mysql->__destruct();
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
			$this->mysql->__destruct();
			if($id == $id2){
				return 1;
			}else{return 2;}
		}
	}
	
	public function modMail($id_txtUsuario,$txtEmailN){
		$sql = "UPDATE miembros SET email = ? WHERE id = ?";
		if($this->mysql->editData($sql,array($txtEmailN,$id_txtUsuario)) <= 1){
			$this->mysql->__destruct();
			return "../index.php?sec=email&val=1";
		}else{
			$this->mysql->__destruct();
			return "../index.php?sec=email&val=2";
		}
	}
	
	public function modPass($id_txtUsuario,$txtPasswordNew){
		$sql = "UPDATE miembros SET user_pass = ? WHERE id = ?";
		if($this->mysql->editData($sql,array($txtPasswordNew,$id_txtUsuario)) <= 1){
			$this->mysql->__destruct();
			return "../index.php?sec=password&val=1";
		}else{
			$this->mysql->__destruct();
			return "../index.php?sec=password&val=2";
		}
	}
	
	public function banear($id){
		$sql = "UPDATE miembros SET state=2 WHERE id = ?";
		if($this->mysql->editData($sql,array($id)) <= 1){
			$this->mysql->__destruct();
			return TRUE;
		}
		$this->mysql->__destruct();
		return FALSE;
	}
	
	public function desBanear($id){
		$sql = "UPDATE miembros SET state=1 WHERE id = ?";
		if($this->mysql->editData($sql,array($id)) <= 1){
			return TRUE;
		}
		$this->mysql->__destruct();
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
				$this->mysql->__destruct();
				return TRUE;
			}
		}
		$this->mysql->__destruct();
		return FALSE;
	}
	public function confirmar($id){
		$sql = "UPDATE miembros SET activar=1 WHERE id = ?";
		if($this->mysql->editData($sql,array($id)) <= 1){
			$sql = "UPDATE acti_codigos SET expi=0,listo=1 WHERE userid = ? AND listo=2";
			if($this->mysql->editData($sql,array($id)) <= 1){
				return TRUE;	
			}
			$this->mysql->__destruct();
			return FALSE;
		}
		return FALSE;
	}
	
	public function getMail($id){
		$sql = "SELECT id,email FROM miembros WHERE id = ?";
		
		$resp = $this->mysql->getData($sql,array($id));
		$this->mysql->__destruct();
		return $resp;
	}
	public function getPass($id){
		$sql = "SELECT id FROM miembros WHERE id = ?";
		
		$resp = $this->mysql->getData($sql,array($id));
		$this->mysql->__destruct();
		return $resp;
	}
	public function getUsuarios($id){
		$sql = "SELECT
		m.id, m.user_nick, m.email, ui.nombre, ui.apellido, ui.rut, ui.sex, m.state, m.fecha_creacion, m.group_id, m.activar
		FROM miembros m
		LEFT JOIN user_info ui ON m.id=ui.userid WHERE m.id <> ? ORDER BY m.fecha_creacion DESC";
		$resp = $this->mysql->getData($sql,array($id));
		$this->mysql->__destruct();
		return $resp;
	}
}

?>