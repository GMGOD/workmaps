<script type="text/javascript" >
$(document).ready(function(){
	if(<?php echo $_GET['val']; ?> == 1 || <?php echo $_GET['val']; ?> == 2 || <?php echo $_GET['val']; ?> == 3 || <?php echo $_GET['val']; ?> == 4){
		$('#respError').css('display','inline-block');
	}
	switch(<?php echo $_GET['val']; ?>){
		case 1:
			$("#respError").html('<img src="./images/error.png" /> El usuario o la contrase&ntilde;a no coinciden.');
			break;
		case 2:
			$("#respError").html('<img src="./images/ok.png" /> Su cuenta ya ha sido activada, puede logear.');
			break;
		case 3:
			$("#respError").html('<img src="./images/error.png" /> Su cuenta esta baneada.');
			break;
		case 4:
			$("#respError").html('<img src="./images/error.png" /> Error al realizar la operacion');
			break;
	}
$(document).keypress(function(e) {
  if(e.which == 13) {
    validar();
  }
});
});
function validar(){
	ok1 = false; ok2 = false; 
	MsgError = "";
	if($("#txtUsuario").val()==""){ok1=true;
		$("#txtUsuario").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		$("#txtUsuario").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}
	if($("#txtPassword").val()==""){ok2=true;
		$("#txtPassword").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		$("#txtPassword").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}

 	
	if (ok1) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su usuario o E-mail <br>";
	if (ok2) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su contraseña <br>";


	if (ok1 || ok2 ) {
		$('#respError').css('display','inline-block');
		$("#respError").html('<div> <h2> <span class="byline"><img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</span></h2> <span class="byline">'+MsgError+"</span></div>");
	} else 
	{
		var frm = self.document.frm;
		frm.method="post"; 
		frm.action="./db/sql.php?caso=1"; 
		frm.submit();
	}
}
</script>
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					
					<div class="row">
						<div class="12u">

							<!-- Blog -->
								<section>
									<header class="major">
										<h2>Login</h2>
									</header>
									<div>
										<div class="row">
											<div class="6u">
												<section>
													<header>
                                                    
														<h3>Facebook</h3>
                                                        <h3>Google</h3>
                                                        <h3>Twitter</h3><br />
                                                        <div id="respError"></div>
                                                    <form name="frm" method="post">
														
														<span class="byline">
                                                        <h3>Usuario/E-Mail</h3>
                                                        <input type="text" name="txtUsuario" id="txtUsuario"/>
                                                        </span><br />
                                                        
														<span class="byline">
                                                        <h3>Password</h3>
                                                        <input type="password" name="txtPassword" id="txtPassword"/>
                                                        </span><br />
 														<span class="byline"><a href="#">Olvidaste tu usuario?</a></span>
                                                        <span class="byline"><a href="#">Olvidaste tu password?</a></span>
                                                        <span class="byline">
                                                        <input type="button" id="btnEntrar" value="Entrar" onclick="validar()">
                                                        </span>
                                                        <br />
 													</form>
													</header>
												</section>
											</div>
											<div class="6u">
												<section>
													<header>
                                                        <span class="image image-full"><img src="./images/login.png" /></span>
													</header>
												</section>
											</div>
										</div>
									</div>
								</section>
							
						</div>
					</div>
				</div>
			</div>

           <!-- Footer Wrapper -->
			<div id="footer-wrapper">