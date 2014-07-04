<script type="text/javascript" >
$(document).ready(function(){
	if(<?php echo $_GET['val']; ?> == 1){
		$('#respError').css('display','inline');
		$("#respError").html('<img src="./images/error.png" /> El mail no ha podido ser enviado, espere a que un administrador active su cuenta.');
	}
$(document).keypress(function(e) {
  if(e.which == 13) {
    validar();
  }
});
});
function esRut(value){ if(value == ''){return false;}var rexp = new RegExp(/^([0-9])+\-([kK0-9])+$/);if(!value.match(rexp)){return false;}var RUT  = value.split("-");var elRut = RUT[0];var factor = 2;var suma = 0;var dv;for(i=(elRut.length-1); i>=0; i--){factor = factor > 7 ? 2 : factor;suma += parseInt(elRut[i])*parseInt(factor++);}var ret = true;dv = 11 -(suma % 11);if(dv == 11){dv = 0;}else if (dv == 10){dv = "k";}if(dv != RUT[1].toLowerCase()){ret= false;}return ret}
	 
function checkEmail(email){var x=email;var arroa=x.indexOf('@');var punto=x.lastIndexOf('.');if (arroa<1 || punto<arroa+2 || punto+2>=x.length){return false;}else{return true;}}

function checkPass(pass){var x=pass;if (x.length<=4){return false;}else{return true;}}

function validar(){

	ok1		=	false;	ok2		=	false;	ok3		=	false;
	ok4		=	false;	ok5		=	false;	ok6		=	false;
	ok7		=	false;	ok8		=	false;	ok9		=	false;
	ok10	=	false;	ok11	=	false;	ok12	=	false;
	ok13	=	false;	ok14	=	false;	ok15	=	false;
	ok16	=	false;
	MsgError = "";
	if($("#txtUsuario").val()==""){
		ok1=true;
		$("#txtUsuario").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		$("#txtUsuario").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
	}
	
	if($("#txtPassword").val()==""){
		ok2=true;
		$("#txtPassword").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		if( checkPass($("#txtPassword").val())==false ){
			ok10=true;
			$("#txtPassword").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtPassword").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
	}
	if($("#txtPassword2").val()==""){
		ok14=true;
		$("#txtPassword2").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		if( checkPass($("#txtPassword2").val())==false ){
			ok15=true;
			$("#txtPassword2").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtPassword2").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
	}
	if($("#txtPassword").val() != $("#txtPassword2").val()){
		ok16=true;
		$("#txtPassword").css('border-color','#F00 #F00 #F00 #F00');
		$("#txtPassword2").css('border-color','#F00 #F00 #F00 #F00');
	}
	
	if($("#txtMail").val()==""){
		ok3=true;
		$("#txtMail").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		if( checkEmail($("#txtMail").val())==false ){
			ok9=true;
			$("#txtMail").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtMail").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
	}
	
	if($("#txtNombre").val()==""){
		ok4=true;
		$("#txtNombre").css('border-color','#F00 #F00 #F00 #F00');
	}else{
		$("#txtNombre").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
	}
	
	if($("#txtApellido").val()==""){
		ok5=true;
		$("#txtApellido").css('border-color','#F00 #F00 #F00 #F00');
		}else{
		$("#txtApellido").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}
		
	if($("#cmbSexo").val()==0){
			ok6=true;
			$("#cmbSexo").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#cmbSexo").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}
		
	if($("#txtRut").val()==""){
		ok7=true;
		$("#txtRut").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			if( esRut($("#txtRut").val())==false ){
				ok8=true;
				$("#txtRut").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#txtRut").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}
	}
 	
			$.ajax({
						type: "POST",
						url: "./db/sql.php?caso=12",
						data:  "usuario="+$("#txtUsuario").val(),
						dataType: "html",
						async: false,//SI VOY A PASAR VARIABLES DENTRO DEL AJAX ES NECESARIO APAGAR EL ASYNCRONIMO
						success: function(respuesta){
							if(respuesta == 2){
								if(ok1==false){$("#txtUsuario").css('border-color','#F00 #F00 #F00 #F00');
									ok11=true;
								}
									
							}else{
									if(ok1==false){$("#txtUsuario").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');}
								}
						}
					});
			$.ajax({
						type: "POST",
						url: "./db/sql.php?caso=13",
						data:  "mail="+$("#txtMail").val(),
						dataType: "html",
						async: false,
						success: function(respuesta){
							//misVars.puntos = misVars.puntos + parseInt(respuesta);
							if(respuesta == 2){
								if(ok3==false && ok9==false){$("#txtMail").css('border-color','#F00 #F00 #F00 #F00');
									ok12=true;
								}
									
							}else{
									if(ok3==false && ok9==false){$("#txtMail").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');}
								}
						}
					});
			$.ajax({
						type: "POST",
						url: "./db/sql.php?caso=14",
						data:  "rut="+$("#txtRut").val(),
						dataType: "html",
						async: false,
						success: function(respuesta){
							//misVars.puntos = misVars.puntos + parseInt(respuesta);
							if(respuesta == 2){
								if(ok7==false && ok8==false){$("#txtRut").css('border-color','#F00 #F00 #F00 #F00');
								ok13=true;
								}
									
							}else{
									if(ok7==false && ok8==false){$("#txtRut").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');}
								}
						}
					});
	if (ok1) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su usuario <br>";
	if (ok2) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su contrase&ntilde;a <br>";
	if (ok3) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su correo <br>";
	if (ok4) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su nombre <br>";
	if (ok5) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su apellido <br>";
	if (ok6) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe seleccionar su sexo <br>";
	if (ok7) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar su Rut <br>";
	if (ok8) MsgError = MsgError + "<span style='color:#F00'>*</span> El Rut ingresado no es valido <br>";
	if (ok9) MsgError = MsgError + "<span style='color:#F00'>*</span> El E-mail ingresado no es valido <br>";
	if (ok10) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar una contraseña con mas de 4 caracteres o mas <br>";
	if (ok11) MsgError = MsgError + "<span style='color:#F00'>*</span> El usuario ya esta en uso <br>";
	if (ok12) MsgError = MsgError + "<span style='color:#F00'>*</span> El E-mail ya esta en uso <br>";
	if (ok13) MsgError = MsgError + "<span style='color:#F00'>*</span> El rut ingresado ya existe <br>";
	if (ok14) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe confirmar la password <br>";
	if (ok15) MsgError = MsgError + "<span style='color:#F00'>*</span> La confirmacion de la password debe tener 4 caracteres o mas <br>";
	if (ok16) MsgError = MsgError + "<span style='color:#F00'>*</span> Las contraseñas no coinciden <br>";


	if (ok1 || ok2 || ok3 || ok4 || ok5 || ok6 || ok7 || ok8 || ok9 || ok10 || ok11 || ok12 || ok13 || ok14 || ok15 || ok16) {
	$("#respError").css('display','inline');
	$("#respError").html('<div> <h2> <img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</h2> <span class="byline">'+MsgError+"</span></div>");
	} else 
	{
			var frm = self.document.frm;
			frm.method="post"; 
			frm.action="./db/sql.php?caso=10"; 
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
										<h2>Registrate</h2>
									</header>
									<div>
										<div class="row">
											<div class="6u">
												<section>
													<header>
                                                    <div id="respError"></div>
                                                    	<h2 style="margin-bottom: 3%">Ingresa los datos requeridos</h2>
                                                    <form name="frm" method="post">
														<span class="byline">
                                                        <h1>Usuario <span style="color:#F00">*</span></h1>
                                                        <input type="text" name="txtUsuario" id="txtUsuario"/>
                                                        </span><br />

                                                        <span class="byline">
                                                        <h1>E-Mail <span style="color:#F00">*</span></h1>
                                                        <input type="text" name="txtMail" id="txtMail"/>
                                                        </span><br/>

                                                        <span class="byline">
                                                        <h1>Rut (EJ: 12345678-k) <span style="color:#F00">*</span></h1>
                                                        <input type="text" name="txtRut" id="txtRut"/>                                                        </span><br />

														<span class="byline">
                                                        <h1>Password <span style="color:#F00">*</span></h1>
                                                        <input type="password" name="txtPassword" id="txtPassword" autocomplete="off"/>
                                                        </span><br/>
														<span class="byline">
                                                        <h1>Confirmar Password <span style="color:#F00">*</span></h1>
                                                        <input type="password" name="txtPassword2" id="txtPassword2" autocomplete="off"/>
                                                        </span><br/>
                                                        
														<span class="byline">
                                                        <h1>Nombre <span style='color:#F00'>*</span></h1>
                                                        <input type="nombre" name="txtNombre" id="txtNombre"/>
                                                        </span><br/>

														<span class="byline">
                                                        <h1>Apellido <span style='color:#F00'>*</span></h1>
                                                        <input type="Apellido" name="txtApellido" id="txtApellido"/>
                                                        </span><br/>
                                                        
														<span class="byline">
                                                        <h1>Sexo <span style='color:#F00'>*</span></h1>
                                                        <select name="cmbSexo" id="cmbSexo">
                                                        	<option value="0">----------</option>
                                                            <option value="1">Hombre</option>
                                                            <option value="2">Mujer</option>
                                                        </select>
                                                        </span><br />
                                                        <input type="button" id="btnEntrar" value="Ingresar" onclick="validar(); return false;">
 													</form>
													</header>
												</section>
											</div>
											<div class="6u">
												<section>
													<header>
                                                    	<h2>O tambien puedes utilizar...</h2>
														<h3>Facebook</h3>
                                                        <h3>Google</h3>
                                                        <h3>Twitter</h3><br />
                                                        <span class="image image-full"><img src="./images/registro.png" /></span>
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