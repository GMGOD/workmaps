<?php
include '../db/consultas.php';
include '../session.php';
$objDB = new consultas;
$listapassid = $objDB->getDatos($_SESSION['www_id']);
foreach ($listapassid as $data){
		$id		=	$data['id'];
}
$objDB->destruct();
?>
<script type="text/javascript" >
$(document).keypress(function(e) {
  if(e.which == 13) {
    password();
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
                <form>
                  <input type="hidden" name="id_txtUsuario" id="id_txtUsuario" value="<?=$id[0]?>" />
                  <span class="byline">
                  <h3>Antiguo Password</h3>
                  <input type="password" name="txtPasswordOld" id="txtPasswordOld" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <h3>Nuevo Password</h3>
                  <input type="password" name="txtPasswordNew" id="txtPasswordNew" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <h3>Confirmar Password</h3>
                  <input type="password" name="txtPasswordConfirm" id="txtPasswordConfirm" autocomplete="off"/>
                  </span><br />
                  <input type="button" id="btnEntrar" value="Enviar" onclick="password()">
                </form>
              </header>
            </section>
          </div>
        </div>
      </section>
    </article>
  </div>
</div>
