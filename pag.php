<?php
include('session.php');
$sec = $_REQUEST['sec'];
if ($sec==''){
	#echo '<meta content="0; URL=?p='.$p.'&sec=listar-posts" http-equiv="Refresh" />';
	include("inicio.php");
} else {
	if(($sec == 'Administrar_usuarios') && $_SESSION['www_group_id'] <= 10){
			$sec = '404';
		}
	if( ($sec == 'email' || $sec == 'password') && ($_SESSION['www_id'] == '' || $_SESSION['www_id'] == 0) ){
			$sec = '404';
		}
	switch ($sec){
		#INDEX::COMPROBACIONES::ACTIVACIONES
		case 'index':
			include("inicio.php");
		break;
		case 'login':
			include("data/login.php");
		break;
		case 'registro':
			include("data/registro.php");
		break;
		case 'activar':
			include("data/activar.php");
		break;
		#MODIFICACIONES
		case 'email':
			include("data/mail.php");
		break;
		case 'password':
			include("data/password.php");
		break;
		#ADMINISTRACION::MODIFICACION::REPORTES
		case 'Administrar_usuarios':
			include("data/reporteUsuario.php");
		break;
		default:
			include("404.php");
		break;
	}
}

?>