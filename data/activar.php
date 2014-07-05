<script type="text/javascript" >
$(document).ready(function(){
	if(<?php echo $_GET['val']; ?> == 1){
				$('#respError').css('display','inline');
				$("#respError").html('<img src="./images/error.png" /> El codigo no es valido.');
	}else if(<?php echo $_GET['val']; ?> == 3){
				$('#respError').css('display','inline');
				$("#respError").html('<img src="./images/error.png" /> Ocurrio un problema, por favor vuelvalo a intentar.');
	}
$(document).keypress(function(e) {
  if(e.which == 13) {
    validar();
  }
});
});
function validar(){

	ok1 = false;
	MsgError = "";
	if($("#txtActivar").val()==""){
		ok1=true;
		$("#txtActivar").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtActivar").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
	
	if (ok1) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar el codigo de activacion \n";

	if (ok1) {
	$('#respError').css('display','inline');
	$("#respError").html('<div> <h2> <img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</h2> <span class="byline">'+MsgError+"</span></div>");
	}else{
		var frm = self.document.frm;
		frm.method="post"; 
		frm.action="./db/sql.php?caso=11"; 
		frm.submit();
	}
}
</script>
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					
					<div class="row">
						<div class="12u skel-cell-mainContent">

							<!-- Contenido -->
							<article >
								<section>
									<header class="major">
										<h2>Activar cuenta</h2>
									</header>
									<div>
										<div class="row">
											<div class="6u">
												<section>
                                                <div id="respError"></div><br />
                                                <h1>Para poder empezar a usar tu cuenta primero debes activarla con el codigo que fue enviado a tu correo, o simplemente precionando en el link del correo.</h1>
													<header>
                                                    
                                                    <form name="frm" method="post">
                                                    	
                                                        <span class="byline">
                                                        <h3>Codigo de activacion</h3>
                                                        <input type="text" name="txtActivar" id="txtActivar" autocomplete="off"/></span><br />
                                                        <span class="byline">
                                                        <input type="button" id="btnEntrar" value="Enviar" onclick="validar()">
                                                        </span>
 													</form>
													</header>
												</section>
											</div>
<div class="6u">
												<section>
													<header>
<span class="image image-full"><img src="./images/cambiarmail.png"/></span>
													</header>
												</section>
											</div>
										</div>
									</div>
								</section>
							</article>
						</div>
					</div>
				</div>
			</div>

           <!-- Footer Wrapper -->
			<div id="footer-wrapper">