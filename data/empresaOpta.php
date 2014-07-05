<?php
include '../db/consultas.php';
include '../session.php';
$objDB = new consultas;
$lista = $objDB->empresa_getImagen($_SESSION['www_id']);
$id = 0;#vacio para inicializar
foreach ($lista as $data){
		$id								=	$data['id'];
		$NewImageName					=	$data['NewImageName'];
}
$objDB->destruct();
?>
<script type="text/javascript" >
$(document).keypress(function(e) {
  if(e.which == 13) {
    empresa();
  }
});
$(document).ready(function() {
	
	if(<?=$id?> != 0){
		var tmpImg = 'db/uploads/empresa/thumb_<?=$NewImageName?>';
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
			$("#respError").css('display','inline-block');
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
				$("#respError").css('display','inline-block');
                $("#respError").html("<b>"+ftype+"</b> Unsupported file type!");
				return false
        }
		
		//Allowed file size is less than 1 MB (1048576)
		if(fsize>1048576) 
		{
			$("#respError").css('display','inline-block');
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
		$("#respError").css('display','inline-block');
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
              <h2>
                <div id="respModificar" style="float:left"></div>
                <div id="respModificarTexto" ></div>
              </h2>
              <br/>
              <header>
                <div id="respError"></div>
                <div>Al agregar una nueva empresa esta quedara en estado de <b>ESPERA</b>, este se demorara entre 24-72 horas de ser aceptado.</div>
                <div id="upload-wrapper">
                  <form action="db/sql.php?caso=22" method="post" enctype="multipart/form-data" id="MyUploadForm">
                    <input type="hidden" name="id_txtUsuario" id="id_txtUsuario" value="<?=$_SESSION['www_id']?>" />
                    <label class="filebutton">
                    <div id="imagen_subir" class="swap">
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
                <form name="frm" method="post">
                  <input type="hidden" name="id_txtUsuario" id="id_txtUsuario" value="<?=$_SESSION['www_id']?>" />
                  <br/>
                  <br/>
                  <span class="byline">
                  <h3>Rut de la empresa <span style="color:#F00">*</span></h3>
                  <input type="text" autocomplete="off" name="rutEmpresa" id="rutEmpresa" autocomplete="off" />
                  </span><br />
                  <span class="byline">
                  <h3>Nombre de la empresa <span style="color:#F00">*</span></h3>
                  <input type="text" name="nombreEmpresa" id="nombreEmpresa" value="" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <h3>Razon social <span style="color:#F00">*</span></h3>
                  <input type="text" name="razonSocial" id="razonSocial" value="" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <h3>Tefono <span style="color:#F00">*</span></h3>
                  <input type="tel" name="telefono" id="telefono" value="" autocomplete="off" />
                  </span><br />
                  <span class="byline">
                  <h3>Rubro de la empresa <span style="color:#36C">Opcional</span></h3>
                  <input type="text" name="rubro" id="rubro" value="" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <h3>Correo de contacto <span style="color:#36C">Opcional</span></h3>
                  <input type="text" name="correo" id="correo" value="" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <input type="button" id="btnEntrar" value="Enviar" onclick="empresa()">
                  </span>
                </form>
              </header>
            </section>
          </div>
        </div>
      </section>
    </article>
  </div>
</div>
