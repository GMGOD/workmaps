<?php
include 'consultas.php';
include '../session.php';
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
  Subir imagen empresa |  022  |    ---    |    ---    |    ---    |
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
		$pag		=	$objDB->iniciarSesion(trim($_POST['txtUsuario']),trim($_POST['txtPassword']));
		/*var_dump($pag);*/
	break;
	case 2: ### LOGOUT ###
		$pag		=	$objDB->logout();
	break;
	case 10: ### REGISTRO ###
		$txtUsuario		=	trim($_POST['txtUsuario']);
		$txtPassword	=	trim($_POST['txtPassword']);
		$txtMail		=	trim($_POST['txtMail']);
		$txtNombre		=	trim($_POST['txtNombre']);
		$txtApellido	=	trim($_POST['txtApellido']);
		$cmbSexo		=	trim($_POST['cmbSexo']);
		$txtRut			=	trim($_POST['txtRut']);
		$salt			=	'workmaps';
		$pag			=	$objDB->registro($txtUsuario,$txtPassword,$txtMail,$txtNombre,$txtApellido,$cmbSexo,$txtRut,$salt);
	break;
	case 11: #ACTIVAR MAIL
		$txtActivar		=	trim($_POST['txtActivar']);
		$pag			=	$objDB->activarMail($txtActivar);
	break;
	case 12: #USUARIO EXISTE?
		$usuario		=	trim($_POST['usuario']);
		echo $objDB->userExiste($usuario);
	break;
	case 13: #MAIL EXISTE?
		$mail			=	trim($_POST['mail']);
		echo $objDB->mailExiste($mail);
	break;
	case 14: #RUT EXISTE?
		$rut			=	trim($_POST['rut']);
		echo $objDB->rutExiste($rut);
	break;
	case 15: #MAIL UNICO?
		$txtEmailN		=	trim($_POST['txtEmailN']);
		echo $objDB->mailUnico($txtEmailN);
	break;
	case 16: #CONTRASEÑA COINCIDE ?
		$txtPassword	=	trim($_POST['txtPassword']);
		$id				=	trim($_POST['id']);
		echo $objDB->passCoincide($txtPassword,$id);
	break;
//Modificar cuenta
	case 20: #MODIFICAR E-AMIL
		$id_txtUsuario	=	trim($_REQUEST['id_txtUsuario']);
		$txtEmailN		=	trim($_REQUEST['txtEmailN']);
		echo $objDB->modMail($id_txtUsuario,$txtEmailN);
	break;
	case 21: #MODIFICAR CONTRASEÑA
		$id_txtUsuario	=	trim($_POST['id_txtUsuario']);
		$txtPasswordNew	=	trim($_REQUEST['txtPasswordNew']);
		echo	$objDB->modPass($id_txtUsuario,$txtPasswordNew);
	break;
//Subir imagen asincronicamente empresa
	case 22: #SUBIR IMAGEN
	if(isset($_POST))
	{
		############ Edit settings ##############
		$ThumbSquareSize 		= 200; //Thumbnail will be 200x200
		$BigImageMaxSize 		= 700; //Image Maximum height or width
		$ThumbPrefix			= "thumb_"; //Normal thumb Prefix
		$DestinationDirectory	= realpath('./uploads/empresa/'); //specify upload directory ends with / (slash)
		$Quality 				= 90; //jpeg quality
		##########################################
	
		//check if this is an ajax request
		if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
			die('This is not an ajax request');
		}
		
		// check $_FILES['ImageFile'] not empty
		if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name']))
		{
				die('Something wrong with uploaded file, something missing!'); // output error when above checks fail.
		}
		
		// Random number will be added after image name
		$RandomNumber 	= rand(0, 9999999999); 
	
		$ImageName 		= str_replace(' ','-',strtolower($_FILES['ImageFile']['name'])); //get image name
		$ImageSize 		= $_FILES['ImageFile']['size']; // get original image size
		$TempSrc	 	= $_FILES['ImageFile']['tmp_name']; // Temp name of image file stored in PHP tmp folder
		$ImageType	 	= $_FILES['ImageFile']['type']; //get file type, returns "image/png", image/jpeg, text/plain etc.
	
		//Let's check allowed $ImageType, we use PHP SWITCH statement here
		switch(strtolower($ImageType))
		{
			case 'image/png':
				//Create a new image from file 
				$CreatedImage =  imagecreatefrompng($_FILES['ImageFile']['tmp_name']);
				break;
			case 'image/gif':
				$CreatedImage =  imagecreatefromgif($_FILES['ImageFile']['tmp_name']);
				break;			
			case 'image/jpeg':
			case 'image/pjpeg':
				$CreatedImage = imagecreatefromjpeg($_FILES['ImageFile']['tmp_name']);
				break;
			default:
				die('Unsupported File!'); //output error and exit
		}
		
		//PHP getimagesize() function returns height/width from image file stored in PHP tmp folder.
		//Get first two values from image, width and height. 
		//list assign svalues to $CurWidth,$CurHeight
		list($CurWidth,$CurHeight)=getimagesize($TempSrc);
		
		//Get file extension from Image name, this will be added after random name
		$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
		$ImageExt = str_replace('.','',$ImageExt);
		
		//remove extension from filename
		$ImageName 		= preg_replace("/\\.[^.\\s]{3,4}$/", "", $ImageName); 
		
		//Construct a new name with random number and extension.
		$NewImageName = $ImageName.'-'.$RandomNumber.'.'.$ImageExt;
		
		//set the Destination Image
		$thumb_DestRandImageName 	= $DestinationDirectory.'/'.$ThumbPrefix.$NewImageName; //Thumbnail name with destination directory
		$DestRandImageName 			= $DestinationDirectory.'/'.$NewImageName; // Image with destination directory
		
		//Resize image to Specified Size by calling resizeImage function.
		if(resizeImage($CurWidth,$CurHeight,$BigImageMaxSize,$DestRandImageName,$CreatedImage,$Quality,$ImageType))
		{
			//Create a square Thumbnail right after, this time we are using cropImage() function
			if(!cropImage($CurWidth,$CurHeight,$ThumbSquareSize,$thumb_DestRandImageName,$CreatedImage,$Quality,$ImageType))
				{
					echo 'Error Creating thumbnail';
				}

			// Insert info into database table!
			$id_txtUsuario		=	trim($_REQUEST['id_txtUsuario']);
			if($objDB->empresa_insertarImagen($id_txtUsuario,$NewImageName,$DestRandImageName,$thumb_DestRandImageName,$DestinationDirectory,$ImageType,$ImageExt,$ImageSize)){
				echo 'db/uploads/empresa/'.$ThumbPrefix.$NewImageName;
			}else{
				die('ERROR insertando imagen a DB');	
			}
	
		}else{
			die('Resize Error'); //output error
		}
	}

	break;
//ADMINISTRACION::MODIFICAR CUENTAS
	case 30: #MODIFICAR CUENTAS (ADMINISTRAR CUENTAS)
	$id					=	trim($_REQUEST['id']);
	$tipo				=	trim($_REQUEST['tipo']);
	$nombre				=	trim($_REQUEST['nombre']);
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