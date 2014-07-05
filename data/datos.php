<?php
include '../db/consultas.php';
include '../session.php';
$objDB = new consultas;
$lista = $objDB->getUserInfo($_SESSION['www_id']);
foreach ($lista as $data){
		$id					=	$data['id'];
		$email				=	$data['email'];
		$usuario			=	$data['user_nick'];
//		$password			=	$data['user_pass'];
		$grupo				=	$data['group_id'];
		$conteoLogings		=	$data['logincount'];
		$fecha_creacion		=	$data['fecha_creacion'];
		$nombre				=	$data['nombre'];
		$apellido			=	$data['apellido'];
		$rut				=	$data['rut'];
		$sexo				=	$data['sex'];
}
$listaDatos = $objDB->getDatos_login($_SESSION['www_id']);
$imagen = $objDB->getImagen($_SESSION['www_id']);
$idImg = 0;#vacio para inicializar
foreach ($imagen as $data){
		$idImg							=	$data['id'];
		$NewImageName					=	$data['NewImageName'];
}
$objDB->destruct();
?>
<script type="text/javascript" >
$(document).ready(function() {
	
	if(<?=$idImg?> != 0){
		var tmpImg = 'db/uploads/usuario/thumb_<?=$NewImageName?>';
		tamImg('+<?=$NewImageName?>+');
		$('#imagen_subir').css('background-image','url('+tmpImg+')');
	}
	
	var options = { 
			//target:   '#respError',   // target element(s) to be updated with server response 
			beforeSubmit:  beforeSubmit,  // pre-submit callback 
			success:       afterSuccess,  // post-submit callback 
			resetForm: true        // reset the form after successful submit 
		}; 
		
	 $('#MyUploadForm').change(function() { 
			$(this).ajaxSubmit(options);  			
			// always return false to prevent standard browser submit and page navigation 
			return false;
		}); 
}); 
function tamImg(a){
	var tmpImg = new Image();
	tmpImg.src = a;
	$(tmpImg).on('load',function(){
	  orgWidth = tmpImg.width;
	  orgHeight = tmpImg.height;
	  console.log(orgWidth+"x"+orgHeight);
	  $('form#MyUploadForm').css('height',orgHeight);
	  $('form#MyUploadForm').css('width',orgWidth);
	});
}
function afterSuccess(a)
{
	$('#submit-btn').show(); //hide submit button
	$('#fadingBarsG').hide(); //hide submit button
	tamImg(a);
	//console.log('alto: '+a.naturalHeight);
	//console.log('Amcho: '+a.clientWidth);
	$('#imagen_subir').css('background-image','url('+a+')');
}

//function to check file size before uploading.
function beforeSubmit(){
    //check whether browser fully supports all File API
   if (window.File && window.FileReader && window.FileList && window.Blob)
	{
		
		if( !$('#imageInput').val()) //check empty input filed
		{
			$("#respError").css('display','inline');
			$("#respError").html("Are you kidding me?");
			return false
		}
		
		var fsize = $('#imageInput')[0].files[0].size; //get file size
		var ftype = $('#imageInput')[0].files[0].type; // get file type
		

		//allow only valid image file types 
		switch(ftype)
        {
            case 'image/png': case 'image/gif': case 'image/jpeg': case 'image/pjpeg':
                break;
            default:
				$("#respError").css('display','inline');
                $("#respError").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#respError").css('display','inline');
			$("#respError").html("<b>"+bytesToSize(fsize) +"</b> Too big Image file! <br />Please reduce the size of your photo using an image editor.");
			return false
		}
				
		$('#submit-btn').hide(); //hide submit button
		$('#fadingBarsG').show(); //hide submit button
		$("#respError").hide();
		$("#respError").html("");  
	}
	else
	{
		//respError error to older unsupported browsers that doesn't support HTML5 File API
		$("#respError").css('display','inline');
		$("#respError").html("Please upgrade your browser, because your current browser lacks some new features we need!");
		return false;
	}
}

//function to format bites bit.ly/19yoIPO
function bytesToSize(bytes) {
   var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
   if (bytes == 0) return '0 Bytes';
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
}
</script>
<!-- Main Wrapper -->

<div class="row">
  <div class="12u skel-cell-mainContent"> 
    
    <!-- Contenido -->
    <article>
      <section>
        <div>
          <div class="row">
            <section>
              <header> 
              <div id="respError"></div>
                <!--<div class="toolbar" style="text-align:right; text-decoration:overline"><b>EMPRESA</b> <a href="#!" onclick="empresaOpta(); return 0;"><img src="./images/bowler_hat/bowler_hat-48.png" width="32" height="32"/></a></div>-->
                <header class="major">
                  <h2>Datos basicos</h2>
                </header>
                <div id="upload-wrapper" style="float:left; margin-right:10px;">
                  <form action="db/sql.php?caso=23" method="post" enctype="multipart/form-data" id="MyUploadForm">
                    <input type="hidden" name="id_txtUsuario" id="id_txtUsuario" value="<?=$_SESSION['www_id']?>" />
                    <label class="filebutton">
                    <div id="imagen_subir" class="usuario">
                      <div id="fadingBarsG">
                        <div id="fadingBarsG_1" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_2" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_3" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_4" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_5" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_6" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_7" class="fadingBarsG"> </div>
                        <div id="fadingBarsG_8" class="fadingBarsG"> </div>
                      </div>
                    </div>
                    <span>
                    <input type="file" id="imageInput" name="ImageFile">
                    </span>
                    </label>
                    <!--            <input name="ImageFile" id="imageInput" type="file" />
            <input type="submit"  id="submit-btn" value="Upload" />-->
                  </form>
                </div>
                <div style="height:200px;">
                <span class="byline2"> <h2>Nombre:</h2>
                <?=$nombre?>
                <?=$apellido?>
                </span><br /> <span class="byline2"> <h2>Rut:</h2>
                <?=$rut?>
                </span><br /> <span class="byline2"> <h2>Sexo:</h2>
                <?php if($sexo==1){echo 'Masculino';}else{echo 'Femenino';}?>
                </span><br /> <span class="byline2">
                <h2>Usuario:</h2> <?=$usuario?>
                </span><br /> <span class="byline2">
                <h2>Email:</h2> <?=$email?>
                </span><br /></div>
                <header class="major">
                  <h2>Datos de cuenta</h2>
                </header>
                <span class="byline2">
                <h3>Grupo de usuario:</h3>
                  <?php if($grupo == 0){echo 'Usuario basico';}else if($grupo == 10){echo 'Usuario empresa';}else if($grupo == 99){echo 'Administrador';}?>
                
                </span><br /> <span class="byline2">
                <h3>Cuenta de logins:</h3>
                  <?=$conteoLogings?>
                
                </span><br /> <span class="byline2">
                <h3>Fecha creacion de cuenta:</h3>
                  <?=$fecha_creacion?>
                
                </span><br />
                <header class="major">
                  <h2>Ultimos login</h2>
                </header>
                <table width="100%" border="1">
                  <thead>
                    <tr>
                      <th>Explorador</th>
                      <th>Version</th>
                      <th>Sistema Operativo</th>
                      <th>Ultima IP</th>
                      <th>Fecha</th>
                    </tr>
                  </thead>
                  <tbody align="center">
                    <?php

                foreach($listaDatos as $l)
                                        {
                ?>
                    <tr>
                      <td><?php echo $l[3];?></td>
                      <td><?php echo $l[4];?></td>
                      <td><?php echo $l[6];?></td>
                      <td><?php echo $l[7];?></td>
                      <td><?php echo $l[8];?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </header>
            </section>
          </div>
        </div>
      </section>
    </article>
  </div>
</div>
