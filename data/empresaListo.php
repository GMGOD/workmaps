<?php
include '../db/consultas.php';
include '../session.php';
//$objDB = new consultas;
//$listaemail = $objDB->getDatos($_SESSION['www_id']);
//foreach ($listaemail as $data){
//		$id		=	$data['id'];
//		$email	=	$data['email'];
//}
//$objDB->destruct();
// make a note of the current working directory relative to root. 
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the location of the upload handler script 
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php'; 

// set a max file size for the html upload form 
$max_file_size = 10485760; // size in bytes 
?>
<script type="text/javascript" >
$(document).keypress(function(e) {
  if(e.which == 13) {
    empresa();
  }
});
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
                <div><h1><img src="../images/ok.png" /></h1><br />
                <h1>Su mensaje fue enviado, por favor espere a que sea validado.</h1>
              </header>
            </section>
          </div>
        </div>
      </section>
    </article>
  </div>
</div>
