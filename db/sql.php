<?php
include 'consultas.php';
$caso = $_REQUEST['caso'];

#echo "Error Codigo Caso: ".$caso."<br>";
/*	
	=========================CUENTAS USUARIOS=======================
					   | Crear | Comprobar | Modificar |  Eliminar |
	-------------------|-------|-----------|-----------|-----------|
	Login              |  ---  |    001    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Logout             |  ---  |    002    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Registro           |  010  |    ---    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Activar Mail       |  ---  |    ---    |    011    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Usuario Existe?    |  ---  |    012    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Mail Existe?       |  ---  |    013    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Rut Existe?        |  ---  |    014    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Mail Unico?        |  ---  |    015    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
   Password Coincide?  |  ---  |    016    |    ---    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Modificar Mail     |  ---  |    ---    |    020    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	Modificar Pass     |  ---  |    ---    |    021    |    ---    |
    -------------------|-------|-----------|-----------|-----------|
	
	
	===================CUENTAS ADMINISTRADORES======================
	Modificar Cuentas  |  ---  |    ---    |    030    |    ---    |
	-------------------|-------|-----------|-----------|-----------|
		*******************SUBS Categoria = Nivel 030*******************
						   | Crear | Comprobar | Modificar |  Eliminar |
		-------------------|-------|-----------|-----------|-----------|
		BANEAR             |  ---  |    ---    |    001    |    ---    |
		-------------------|-------|-----------|-----------|-----------|
		DESBANEAR          |  ---  |    ---    |    002    |    ---    |
		-------------------|-------|-----------|-----------|-----------|
		VOLVER A CONFIRMAR |  ---  |    ---    |    003    |    ---    |
		-------------------|-------|-----------|-----------|-----------|
		CONFIRMAR          |  ---  |    ---    |    004    |    ---    |
		-------------------|-------|-----------|-----------|-----------|
		****************************************************************
	

*/
$objDB = new consultas;

switch ($caso) {
	case 1:  ### LOGIN ###
		$pag		=	$objDB->iniciarSesion($_POST['txtUsuario'],$_POST['txtPassword']);
		/*var_dump($pag);*/
	break;
	case 2: ### LOGOUT ###
		$pag		=	$objDB->logout();
	break;
	case 10: ### REGISTRO ###
		$txtUsuario		=	$objDB->escaparString($_POST['txtUsuario']);
		$txtPassword	=	$objDB->escaparString($_POST['txtPassword']);
		$txtMail		=	$objDB->escaparString($_POST['txtMail']);
		$txtNombre		=	$objDB->escaparString($_POST['txtNombre']);
		$txtApellido	=	$objDB->escaparString($_POST['txtApellido']);
		$cmbSexo		=	$objDB->escaparString($_POST['cmbSexo']);
		$txtRut			=	$objDB->escaparString($_POST['txtRut']);
		$salt			=	'workmaps';
		$pag			=	$objDB->registro($txtUsuario,$txtPassword,$txtMail,$txtNombre,$txtApellido,$cmbSexo,$txtRut,$salt);
	break;
	case 11: #ACTIVAR MAIL
		$txtActivar		=	$objDB->escaparString($_POST['txtActivar']);
		$pag			=	$objDB->activarMail($txtActivar);
	break;
	case 12: #USUARIO EXISTE?
		$usuario		=	$objDB->escaparString($_POST['usuario']);
		echo $objDB->userExiste($usuario);
	break;
	case 13: #MAIL EXISTE?
		$mail			=	$objDB->escaparString($_POST['mail']);
		echo $objDB->mailExiste($mail);
	break;
	case 14: #RUT EXISTE?
		$rut			=	$objDB->escaparString($_POST['rut']);
		echo $objDB->rutExiste($rut);
	break;
	case 15: #MAIL UNICO?
		$txtEmailN		=	$_POST['txtEmailN'];
		echo $objDB->mailUnico($txtEmailN);
	break;
	case 16: #CONTRASEÑA COINCIDE ?
		$txtPassword	=	$_POST['txtPassword'];
		$id				=	$_POST['id'];
		echo $objDB->passCoincide($txtPassword,$id);
	break;
//Modificar cuenta
	case 20: #MODIFICAR E-AMIL
		$id_txtUsuario	=	$_REQUEST['id_txtUsuario'];
		$txtEmailN		=	$_REQUEST['txtEmailN'];
		$pag			=	$objDB->modMail($id_txtUsuario,$txtEmailN);
	break;
	case 21: #MODIFICAR CONTRASEÑA
		$id_txtUsuario	=	$objDB->escaparString($_POST['id_txtUsuario']);
		$txtPasswordNew	=	$objDB->escaparString($_REQUEST['txtPasswordNew']);
		$pag			=	$objDB->modPass($id_txtUsuario,$txtPasswordNew);
	break;
//ADMINISTRACION::MODIFICAR CUENTAS
	case 30: #MODIFICAR CUENTAS (ADMINISTRAR CUENTAS)
	$id					=	$objDB->escaparString($_REQUEST['id']);
	$tipo				=	$objDB->escaparString($_REQUEST['tipo']);
	$nombre				=	$objDB->escaparString($_REQUEST['nombre']);
		switch($tipo){
			case 1:#BANEAR
				$objDB->banear($id);
			break;
			case 2:#DESBANEAR
				$objDB->desBanear($id);
			break;
			case 3:#VOLVER A CONFIRMAR
				$objDB->volverConfirmar($nombre,$id);
			break;
			case 4:#CONFIRMAR
				$objDB->confirmar($id);
			break;
		}
		$pag		=	'../index.php?sec=Administrar_usuarios';
	break;
	default:
		$pag		=	"./index.php?sec=404";
	break;
}
if($pag!=''){
header("Location: $pag");
}

?>