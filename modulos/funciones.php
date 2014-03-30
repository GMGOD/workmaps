<?php
include('./SQL/class.conexion.php');
#include('../session.php');

/*function EjemploParaObtenerDatosDesdeMySQL(){
	
	#### CUANDO SE OBTIENEN VARIOS DATOS EN UN ARREGLO, POR EJEMPLO CUANDO SE OCUPAN PARA EL FOREACH
	$sql="SELECT id, boleta, numero, fecha_solicitud, fecha, banco, estado FROM tbl_vale_vista WHERE boleta = $id_b";
	#echo $sql."<br>";
	$dtsql = mysql_query($sql);
	if (mysql_num_rows($dtsql) > 0){
		while ($data = @mysql_fetch_array($dtsql)) {
			$id[] = $data['id'];
			$boleta[] = $data['boleta'];
			$numero[] = $data['numero'];
			$fecha_solicitud[] = $data['fecha_solicitud'];
			$fecha[] = $data['fecha'];
			$banco[] = $data['banco'];
			$estado[] = $data['estado'];
		}
		mysql_free_result($dtsql);
	}
	
	#### CUANDO SE OBTIENEN UN DATO, POR EJEMPLO CUANDO QUIERO ASIGNARLE A UNA VARIABLE EL RESULTADO DE UNA CONUSLTA
	$sql="SELECT id, boleta, numero, fecha_solicitud, fecha, banco, estado FROM tbl_vale_vista WHERE boleta = $id_b";
	#echo $sql."<br>";
	$dtsql = mysql_query($sql);
	if (mysql_num_rows($dtsql) > 0){
		$data = @mysql_fetch_array($dtsql);
		$id = $data['id'];
		$boleta = $data['boleta'];
		$numero = $data['numero'];
		$fecha_solicitud = $data['fecha_solicitud'];
		$fecha = $data['fecha'];
		$banco = $data['banco'];
		$estado = $data['estado'];
		mysql_free_result($dtsql);
	}
}*/
function SelectPaginatorPropaga($_pagi_sql, $_pagi_cuantos, $_pagi_nav_num_enlaces, $campos, $_pagi_propagar){
$_pagi_conteo_alternativo = true;
if ( $_pagi_sql != ''){
include('rutinas/paginator.inc.php');
	$y=0;
while($data = $objDB->farray($_pagi_result)){
	$x=0;
		while($x<$campos){
			$valor[$y][]=$data[$x];
			$x++;
		}
	$y++;
	}
		$objDB->free_result($_pagi_result);
		
}		
	return array($valor, $_pagi_navegacion);	
}
function SelectPaginator($_pagi_sql, $_pagi_cuantos, $_pagi_nav_num_enlaces, $campos){
if ( $_pagi_sql != ''){
include('rutinas/paginator.inc.php');
	$y=0;
while($data = $objDB->farray($_pagi_result)){
	$x=0;
		while($x<$campos){
			$valor[$y][]=$data[$x];
			$x++;
		}
	$y++;
	}
		$objDB->free_result($_pagi_result);
		
}		
	return array($valor, $_pagi_navegacion);	
}

function ConvierteNumeroANombreMes($num_mes){
	switch ($num_mes){
		case 1:
			$nom_mes = "Enero";
			break;
		case 2:
			$nom_mes = "Febrero";
			break;
		case 3:
			$nom_mes = "Marzo";
			break;
		case 4:
			$nom_mes = "Abril";
			break;
		case 5:
			$nom_mes = "Mayo";
			break;
		case 6:
			$nom_mes = "Junio";
			break;
		case 7:
			$nom_mes = "Julio";
			break;
		case 8:
			$nom_mes = "Agosto";
			break;
		case 9:
			$nom_mes = "Septiembre";
			break;
		case 10:
			$nom_mes = "Octubre";
			break;
		case 11:
			$nom_mes = "Noviembre";
			break;
		case 12:
			$nom_mes = "Diciembre";
			break;
	}
	return $nom_mes;
}

function ObtieneFechaInicioTerminoMes($mes, $ano){

switch ($mes) {
		case 1:
			$fecha1=$ano.'-01-01';
			$fecha2=$ano.'-01-31';
			break;
		case 2:
			$fecha1=$ano.'-02-01';
			$fecha2=$ano.'-02-28';
			break;
		case 3:
			$fecha1=$ano.'-03-01';
			$fecha2=$ano.'-03-31';	
			break;
		case 4:
			$fecha1=$ano.'-04-01';
			$fecha2=$ano.'-04-30';	
			break;
		case 5:
			$fecha1=$ano.'-05-01';
			$fecha2=$ano.'-05-31';	
			break;
		case 6:
			$fecha1=$ano.'-06-01';
			$fecha2=$ano.'-06-30';	
			break;
		case 7:
			$fecha1=$ano.'-07-01';
			$fecha2=$ano.'-07-31';	
			break;
		case 8:
			$fecha1=$ano.'-08-01';
			$fecha2=$ano.'-08-31';	
			break;
		case 9:
			$fecha1=$ano.'-09-01';
			$fecha2=$ano.'-09-30';	
			break;
		case 10:
			$fecha1=$ano.'-10-01';
			$fecha2=$ano.'-10-31';	
			break;
		case 11:
			$fecha1=$ano.'-11-01';
			$fecha2=$ano.'-11-30';	
			break;
		case 12:
			$fecha1=$ano.'-12-01';
			$fecha2=$ano.'-12-31';	
			break;
	}
	#echo "Fecha 1 ".$fecha1."<br>";
	return array($fecha1,$fecha2);
}

function nameDate($fecha='')//formato: 00/00/0000 para saber el dia de la semana
{       $fecha= empty($fecha)?date('d-m-Y'):$fecha;
        $dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
        $dd   = explode('-',$fecha);
        $ts   = mktime(0,0,0,$dd[1],$dd[0],$dd[2]);
        return $dias[date('w',$ts)];
}

function VueltaFecha($fecha){
	 
  $dd = substr($fecha,8,2);
  $mm = substr($fecha,5,2);
  $aa = substr($fecha,0,4);
  
  
 $fecha = "$dd-$mm-$aa";

if ($mm==1){$mm="Enero";}
if ($mm==2){$mm="Febrero";}
if ($mm==3){$mm="Marzo";}
if ($mm==4){$mm="Abril";}
if ($mm==5){$mm="Mayo";}
if ($mm==6){$mm="Junio";}
if ($mm==7){$mm="Julio";}
if ($mm==8){$mm="Agosto";}
if ($mm==9){$mm="Septiembre";}
if ($mm==10){$mm="Octubre";}
if ($mm==11){$mm="Noviembre";}
if ($mm==12){$mm="Diciembre";}
$ds= nameDate($fecha);
$fecha = "$ds $dd de $mm $aa";
return $fecha;
}

function VueltaFechaSinDia($fecha){
	 
  $dd = substr($fecha,8,2);
  $mm = substr($fecha,5,2);
  $aa = substr($fecha,0,4);
  $fecha = "$dd-$mm-$aa";

#$fecha = "$dd de $mm $aa";
return $fecha;
}
function emails($correo,$mensaje = NULL,$usuario = NULL,$tipo,$codigo = NULL){
	require('../modulos/class.phpmailer.php');
	$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jswan';                            // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'noreply@workmaps.cl';
$mail->FromName = 'WorkMaps';
$mail->addAddress($correo, $usuario);  // Add a recipient
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');*/
/*$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

/*$mail->WordWrap = 50;   */                              // Set word wrap to 50 characters
/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
$mail->isHTML(true);                                  // Set email format to HTML
switch($tipo){
	case 1:
		$mail->Subject = 'Hola '.$usuario;
		$mail->Body    = 'Te has incrito a la mejor plataforma de busqueda de trabajo, pero falta un paso para terminar el procesos<br>
		de inscripcion. Te falta activar tu cuenta!<br>
		<br>
		<strong>Codigo :</strong>'.$codigo;
		$mail->Body	   = '<br>Espero que disfrutes de nuestra aplicacion!...';
/*		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*/
	break;
	
	default:
	break;
}

if(!$mail->send()) {
	return $mail->ErrorInfo;
}else{
	return true;
}	
}
?>