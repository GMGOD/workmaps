<?php
include './db/consultas.php';
$objDB = new consultas;
$listaemail = $objDB->getMail($_SESSION['www_id']);
foreach ($listaemail as $data){
		$id		=	$data['id'];
		$email	=	$data['email'];
}
?>
<script type="text/javascript" >
$(document).ready(function(){
	if(<?=$_GET['val']?> == 1){
				$("#respModificar").html('<img src="./images/ok.png" /> ');
				$("#respModificarTexto").html('El e-mail se modifico correctamente.');
	}
});
function checkEmail(email){
	var x=email;
	var arroa=x.indexOf('@');
	var punto=x.lastIndexOf('.');
	if (arroa<1 || punto<arroa+2 || punto+2>=x.length){return false;}else{return true;}
}

function checkPass(pass){var x=pass;if (x.length<=4){return false;}else{return true;}}

function validar(){

	ok1 = false; ok2 = false; ok3 = false;
	ok4 = false; ok5 = false; ok6 = false;
	ok7 = false; ok8 = false;
	
	MsgError = "";
	
	if($("#txtEmailN").val()==""){
		ok1=true;
			$("#txtEmailN").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			if( checkEmail($("#txtEmailN").val())==false ){
				ok2=true;
					$("#txtEmailN").css('border-color','#F00 #F00 #F00 #F00');
				}else{
					$("#txtEmailN").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
				}
		}
		
	if($("#txtEmailNRep").val()==""){
			ok3=true;
			$("#txtEmailNRep").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			if( checkEmail($("#txtEmailNRep").val())==false ){
				ok4=true;
					$("#txtEmailNRep").css('border-color','#F00 #F00 #F00 #F00');
				}else{
					$("#txtEmailNRep").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
				}
		}
		
	if($("#txtPassword").val()==""){
		ok5=true;
			$("#txtPassword").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtPassword").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
	
	if($("#txtEmailN").val()!=$("#txtEmailNRep").val()){
			if(ok1==false && ok2==false && ok3==false && ok4==false){
				ok6=true;
				$("#txtEmailN").css('border-color','#F00 #F00 #F00 #F00');
				$("#txtEmailNRep").css('border-color','#F00 #F00 #F00 #F00');
			}
		}else{
			if(ok1==false && ok2==false && ok3==false && ok4==false){
				$("#txtEmailN").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');	
				$("#txtEmailNRep").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
		}

			$.ajax({//Validar que el mail no exista
						type: "POST",
						url: "./db/sql.php?caso=15",
						data:  "txtEmailN="+$("#txtEmailN").val(),
						dataType: "html",
						async: false,
						success: function(respuesta){
							if(respuesta == 2){
									if(ok1==false && ok2==false && ok3==false && ok4==false && ok6==false){
										$("#txtEmailN").css('border-color','#F00 #F00 #F00 #F00');
										$("#txtEmailNRep").css('border-color','#F00 #F00 #F00 #F00');
										ok7=true;
									}
							}else{
									if(ok1==false && ok2==false && ok3==false && ok4==false && ok6==false){
										$("#txtEmailN").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
										$("#txtEmailNRep").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
									}
								}
						}
					});
			$.ajax({//Validar que la contraseña sea de la cuenta
						type: "POST",
						url: "./db/sql.php?caso=16",
						data:  "txtPassword="+$("#txtPassword").val()+"&id="+<?=$_SESSION['www_id']?>,
						dataType: "html",
						async: false,
						success: function(respuesta){
							if(respuesta == 2){
								if(ok5==false){
									$("#txtPassword").css('border-color','#F00 #F00 #F00 #F00');
									ok8=true;
								}
							}else{
									if(ok5==false){
										$("#txtPassword").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
										}
								}
						}
					});

	if (ok1) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su e-mail <br>";
	if (ok2) MsgError = MsgError + "<span style='color:#F00'>*</span> El e-mail nuevo no es valido <br>";
	if (ok3) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe confirmar su e-mail <br>";
	if (ok4) MsgError = MsgError + "<span style='color:#F00'>*</span> El e-mail para confirmar no es valido <br>";
	if (ok5) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su password <br>";
	if (ok6) MsgError = MsgError + "<span style='color:#F00'>*</span> Las mails no coinciden <br>";
	if (ok7) MsgError = MsgError + "<span style='color:#F00'>*</span> El e-mail que ingreso esta en uso <br>";
	if (ok8) MsgError = MsgError + "<span style='color:#F00'>*</span> La contrase&ntilde;a ingresada no coincide <br>";

	if (ok1 || ok2 || ok3 || ok4 || ok5 || ok6 || ok7 || ok8) {
	$("#respError").html('<div> <h2> <img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</h2> <span class="byline">'+MsgError+"</span></div>");
	}else{
				var frm = self.document.frm;
				frm.method="post"; 
				frm.action="./db/sql.php?caso=20"; 
				frm.submit();

		}
}
</script>
		<!-- Main Wrapper -->
			<div id="main-wrapper">
				<div class="container">
					
					<div class="row">
						<div class="12u skel-cell-mainContent">

							<!-- Contenido <article class="box is-post">-->
							<article>
								<section>
									<header class="major">
										<h2>Cambiar E-mail</h2>
									</header>
									<div>
										<div class="row">
											<div class="6u">
												<section>
                                                <h2><div id="respModificar" style="float:left"></div> <div id="respModificarTexto" ></div></h2><br/>
													<header>
                                                    <div id="respError"></div>
                                                    <form name="frm" method="post">
                                                    <input type="hidden" name="id_txtUsuario" id="id_txtUsuario" value="<?=$id?>" />                                                    	
														<span class="byline">
                                                        <h3>Antiguo e-mail</h3>
                                                        <input disabled="" type="text" name="txtEmailO" id="txtEmailO" value="<?=$email?>" /></span><br />

														<span class="byline">
                                                        <h3>Nuevo e-mail</h3>
                                                        <input type="text" name="txtEmailN" id="txtEmailN" autocomplete="off" />
                                                        </span><br />
                                                                    
														
														<span class="byline">
                                                        <h3>Confirme e-mail</h3>
                                                        <input type="text" name="txtEmailNRep" id="txtEmailNRep" autocomplete="off"/>
                                                        </span><br />
                                                        
                                                        <span class="byline">
                                                        <h3>Password</h3>
                                                        <input type="password" name="txtPassword" id="txtPassword" autocomplete="off"/>
                                                        </span><br />
                                                        <input type="button" id="btnEntrar" value="Enviar" onclick="validar()">
 													</form>
													</header>
												</section>
											</div>
<div class="6u">
												<section>
													<header>
<span class="image image-full"><img src="./images/cambiarmail.png" /></span>
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