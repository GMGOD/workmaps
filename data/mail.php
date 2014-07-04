<?php
include '../db/consultas.php';
include '../session.php';
$objDB = new consultas;
$listaemail = $objDB->getDatos($_SESSION['www_id']);
foreach ($listaemail as $data){
		$id		=	$data['id'];
		$email	=	$data['email'];
}
$objDB->destruct();
?>
<script type="text/javascript" >
$(document).keypress(function(e) {
  if(e.which == 13) {
    mail();
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
                <div id="respError" ></div>
              </h2>
              <br/>
              <header>
                <div id="respError"></div>
                <form name="frm" method="post">
                  <input type="hidden" name="id_txtUsuario" id="id_txtUsuario" value="<?=$id?>" />
                  <span class="byline">
                  <h3>Antiguo e-mail</h3>
                  <input disabled type="text" name="txtEmailO" id="txtEmailO" value="<?=$email?>" />
                  </span><br />
                  <span class="byline">
                  <h3>Nuevo e-mail</h3>
                  <input type="text" autocomplete="off" name="txtEmailN" id="txtEmailN" autocomplete="off" />
                  </span><br />
                  <span class="byline">
                  <h3>Confirme e-mail</h3>
                  <input type="text" autocomplete="off" name="txtEmailNRep" id="txtEmailNRep" autocomplete="off"/>
                  </span><br />
                  <span class="byline">
                  <h3>Password</h3>
                  <input type="password" autocomplete="off"  name="txtPassword" id="txtPassword" autocomplete="off"/>
                  </span><br />
                  <input type="button" id="btnEntrar" value="Enviar" onclick="mail()">
                </form>
              </header>
            </section>
          </div>
        </div>
      </section>
    </article>
  </div>
</div>