<?php
#include('../session.php');

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
require 'class.mandrill.php';

// If are not using environment variables to specific your API key, use:
$mandrill = new Mandrill("4VFw7zwT1JfY-KNXnACEMQ");


switch($tipo){
	case 1:
$message = array(
    'subject' => 'Test message' . $usuario,
    'from_email' => 'info@workmaps.cl',
    'html' => '<p>this is a test message with Mandrill\'s PHP wrapper!.</p>',
    'to' => array(
				array('email' => $correo, 'name' => $usuario)
				),
				'merge_vars' => array(
									array(
										'rcpt' => $correo,
										'vars' =>
										array(
											array(
												'name' => 'FIRSTNAME',
												'content' => 'Recipient 1 first name'),
											array(
												'name' => 'LASTNAME',
												'content' => 'Last name')
											)
									)
								)
				);
	break;
	
	default:
	break;
}
$template_name = 'Stationary';

$template_content = array(
    array(
        'name' => 'main',
        'content' => 'Hi *|FIRSTNAME|* *|LASTNAME|*, thanks for signing up.'),
    array(
        'name' => 'footer',
        'content' => 'Copyright 2012.')

);

return $mandrill->messages->sendTemplate($template_name, $template_content, $message);
}
// This function will proportionally resize image 
function resizeImage($CurWidth,$CurHeight,$MaxSize,$DestFolder,$SrcImage,$Quality,$ImageType)
{
	//Check Image size is not 0
	if($CurWidth <= 0 || $CurHeight <= 0) 
	{
		return false;
	}
	
	//Construct a proportional size of new image
	$ImageScale      	= min($MaxSize/$CurWidth, $MaxSize/$CurHeight); 
	$NewWidth  			= ceil($ImageScale*$CurWidth);
	$NewHeight 			= ceil($ImageScale*$CurHeight);
	$NewCanves 			= imagecreatetruecolor($NewWidth, $NewHeight);
	
	// Resize Image
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, 0, 0, $NewWidth, $NewHeight, $CurWidth, $CurHeight))
	{
		switch(strtolower($ImageType))
		{
			case 'image/png':
				imagepng($NewCanves,$DestFolder);
				break;
			case 'image/gif':
				imagegif($NewCanves,$DestFolder);
				break;			
			case 'image/jpeg':
			case 'image/pjpeg':
				imagejpeg($NewCanves,$DestFolder,$Quality);
				break;
			default:
				return false;
		}
	//Destroy image, frees memory	
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;
	}

}

//This function corps image to create exact square images, no matter what its original size!
function cropImage($CurWidth,$CurHeight,$iSize,$DestFolder,$SrcImage,$Quality,$ImageType)
{	 
	//Check Image size is not 0
	if($CurWidth <= 0 || $CurHeight <= 0) 
	{
		return false;
	}
	
	//abeautifulsite.net has excellent article about "Cropping an Image to Make Square bit.ly/1gTwXW9
	if($CurWidth>$CurHeight)
	{
		$y_offset = 0;
		$x_offset = ($CurWidth - $CurHeight) / 2;
		$square_size 	= $CurWidth - ($x_offset * 2);
	}else{
		$x_offset = 0;
		$y_offset = ($CurHeight - $CurWidth) / 2;
		$square_size = $CurHeight - ($y_offset * 2);
	}
	
	$NewCanves 	= imagecreatetruecolor($iSize, $iSize);	
	if(imagecopyresampled($NewCanves, $SrcImage,0, 0, $x_offset, $y_offset, $iSize, $iSize, $square_size, $square_size))
	{
		switch(strtolower($ImageType))
		{
			case 'image/png':
				imagepng($NewCanves,$DestFolder);
				break;
			case 'image/gif':
				imagegif($NewCanves,$DestFolder);
				break;			
			case 'image/jpeg':
			case 'image/pjpeg':
				imagejpeg($NewCanves,$DestFolder,$Quality);
				break;
			default:
				return false;
		}
	//Destroy image, frees memory	
	if(is_resource($NewCanves)) {imagedestroy($NewCanves);} 
	return true;

	}
	  
}
?>