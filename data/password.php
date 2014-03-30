<?php
include './db/consultas.php';
$objDB = new consultas;
$listapassid = $objDB->getPass($_SESSION['www_id']);
foreach ($listapassid as $data){
		$id		=	$data['id'];
}
?>
<script type="text/javascript" >
$(document).ready(function(){
	if(<?=$_GET['val']?> == 1){
				$("#respModificar").html('<img src="./images/ok.png" /> ');
				$("#respModificarTexto").html('La password se modifico correctamente.');
	}
});
function checkPass(pass){var x=pass;if (x.length<=4){return false;}else{return true;}}


function validar(){

	ok1 = false; ok2 = false; ok3 = false;
	ok4 = false; ok5 = false; ok6 = false;
	
	MsgError = "";
	
	if($("#txtPasswordOld").val()==""){
		ok1=true;
		$("#txtPasswordNew").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			if( checkPass($("#txtPasswordOld").val())==false ){
				ok2=true;
				$("#txtPasswordNew").css('border-color','#F00 #F00 #F00 #F00');
			}else{
				$("#txtPasswordNew").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
				}
		}
	if($("#txtPasswordNew").val()==""){
		ok3=true;
		$("#txtPasswordNew").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			if( checkPass($("#txtPasswordNew").val())==false ){
				ok2=true;
				$("#txtPasswordNew").css('border-color','#F00 #F00 #F00 #F00');
			}else{
				$("#txtPasswordNew").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
		}
	if($("#txtPasswordConfirm").val()==""){
		ok4=true;
		$("#txtPasswordConfirm").css('border-color','#F00 #F00 #F00 #F00');
		}else{ 
			if( checkPass($("#txtPasswordConfirm").val())==false ){
				ok2=true;
				$("#txtPasswordConfirm").css('border-color','#F00 #F00 #F00 #F00');
				}else{
					$("#txtPasswordConfirm").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
				}
		}
	if( ($("#txtPasswordNew").val()!=$("#txtPasswordConfirm").val()) && (ok1==false && ok2==false && ok3==false && ok4==false)){
		ok5=true;
		//alert('pas');
		$("#txtPasswordNew").css('border-color','#F00 #F00 #F00 #F00');
		$("#txtPasswordConfirm").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtPasswordConfirm").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			$("#txtPasswordNew").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}

			$.ajax({//Validar la contraseña antigua
						type: "POST",
						url: "./SQL/sql.php?caso=16",
						data:  "txtPassword="+$("#txtPasswordOld").val()+"&id="+<?=$_SESSION['www_id']?>,
						dataType: "html",
						async: false,
						success: function(respuesta){
							if(respuesta == 2){
									if(ok1==false && ok2==false && ok3==false && ok4==false && ok5==false){
										$("#txtPasswordOld").css('border-color','#F00 #F00 #F00 #F00');
										ok6=true;
									}
							}else{
									if(ok1==false && ok2==false && ok3==false && ok4==false && ok5==false){
										$("#txtPasswordOld").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
									}
								}
						}
					});

	if (ok1) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su actual password <br>";
	if (ok2) MsgError = MsgError + "<span style='color:#F00'>*</span> Las password debe tener mas de 4 digitos <br>";
	if (ok3) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar la nueva password <br>";
	if (ok4) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe volver a ingresar la nueva password (confirmar) <br>";
	if (ok5) MsgError = MsgError + "<span style='color:#F00'>*</span> Las password no coinciden <br>";
	if (ok6) MsgError = MsgError + "<span style='color:#F00'>*</span> La password antigua no coincide <br>";

	if (ok1 || ok2 || ok3 || ok4 || ok5 || ok6) {
	$("#respError").html('<div> <h2> <img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</h2> <span class="byline">'+MsgError+"</span></div>");
	}else{
			var frm = self.document.frm;
			frm.method="post"; 
			frm.action="./db/sql.php?caso=21"; 
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
							<article>
								<section>
									<header class="major">
										<h2>Cambiar Password</h2>
									</header>
									<div>
										<div class="row">
											<div class="6u">
												<section>
                                                <h2><div id="respModificar" style="float:left"></div> <div id="respModificarTexto" ></div></h2><br/>

													<header>
                                                    <div id="respError"></div>
                                                    <form name="frm" method="post">
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
                                                        <input type="button" id="btnEntrar" value="Enviar" onclick="validar()">
 													</form>
													</header>
												</section>
											</div>
<div class="6u">
												<section>
													<header>
                                                    <span class="image image-full"><img src="./images/cambiarpassword.png" /></span>
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