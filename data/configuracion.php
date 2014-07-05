<script type="text/javascript" >
$(document).ready(function(){
$("#include").load("./data/datos.php");
$("#menuizquierda1").addClass("conf_current_page_item");
$("#menuizquierda2").removeClass();
$("#menuizquierda3").removeClass();
$("#menuizquierda4").removeClass();

});

function checkPass(pass){var x=pass;if (x.length<=4){return false;}else{return true;}}
function checkEmail(email){	var x=email;var arroa=x.indexOf('@');var punto=x.lastIndexOf('.');if (arroa<1 || punto<arroa+2 || punto+2>=x.length){return false;}else{return true;}
}


function empresaSucces(){
    $("#include").load("./data/empresaListo.php");
	$("#menuizquierda1").addClass("conf_current_page_item");
	$("#menuizquierda2").removeClass();
	$("#menuizquierda3").removeClass();
	$("#menuizquierda4").removeClass();
}
function vistaDatos(){
    $("#include").load("./data/datos.php");
	$("#menuizquierda1").addClass("conf_current_page_item");
	$("#menuizquierda2").removeClass();
	$("#menuizquierda3").removeClass();
	$("#menuizquierda4").removeClass();
	$("#menuizquierda5").removeClass();
}
function vistaSeguridad(){
    $("#include").load("./data/404.php");
	$("#menuizquierda1").removeClass();
	$("#menuizquierda2").addClass("conf_current_page_item");
	$("#menuizquierda3").removeClass();
	$("#menuizquierda4").removeClass();
	$("#menuizquierda5").removeClass();
}
function vistaEmail(){
    $("#include").load("./data/mail.php");
	$("#menuizquierda1").removeClass();
	$("#menuizquierda2").removeClass();
	$("#menuizquierda3").addClass("conf_current_page_item");
	$("#menuizquierda4").removeClass();
	$("#menuizquierda5").removeClass();
}
function vistaPass(){
    $("#include").load("./data/password.php");
	$("#menuizquierda1").removeClass();
	$("#menuizquierda2").removeClass();
	$("#menuizquierda3").removeClass();
	$("#menuizquierda4").addClass("conf_current_page_item");
	$("#menuizquierda5").removeClass();
}
function empresaOpta(){
    $("#include").load("./data/empresaOpta.php");
	$("#menuizquierda1").removeClass();
	$("#menuizquierda2").removeClass();
	$("#menuizquierda3").removeClass();
	$("#menuizquierda4").removeClass();
	$("#menuizquierda5").addClass("conf_current_page_item");
}

function password(){
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
						url: "./db/sql.php?caso=16",
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
	$("#respError").css('display','inline-block');
	$("#respError").html('<h2> <span class="byline"><img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</spawn></h2> <span class="byline">'+MsgError+"</span>");
	}else{
			$("#respError").hide();
			$.ajax({//Guardar
						type: "POST",
						url: "./db/sql.php?caso=21",
						data:  $( "form" ).serialize(),
						dataType: "html",
						async: false,
						success: function(respuesta){
							if(respuesta == 1){
								$("#respError").css('display','inline-block');
								$("#respError").html('<img src="./images/ok.png" /> La password se modifico correctamente.');
							}else{
								$("#respError").css('display','inline-block');
								$("#respError").html('<img src="./images/error.png" /> Ocurrio un error modificando su password');
							}
						}
					});
		}
}
function mail(){

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
	$("#respError").css('display','inline-block');
	$("#respError").html('<h2> <span class="byline"><img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</spawn></h2> <span class="byline">'+MsgError+"</span>");
	}else{
			$("#respError").hide();
			$.ajax({//Guardar
						type: "POST",
						url: "./db/sql.php?caso=20",
						data:  $( "form" ).serialize(),
						dataType: "html",
						async: false,
						success: function(respuesta){
							if(respuesta == 1){
								$("#respError").css('display','inline-block');
								$("#respError").html('<img src="./images/ok.png" /> El e-mail se modifico correctamente.');
							}else{
								$("#respError").css('display','inline-block');
								$("#respError").html('<img src="./images/error.png" /> Ocurrio un error modificando su email');
							}
						}
					});
		}
}
function empresa(){

	ok1 = false; ok2 = false; ok3 = false;
	ok4 = false; ok5 = false;
	
	MsgError = "";
	
	if($("#file").val()==""){
		ok1=true;
			$("#files").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#files").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}
		
	if($("#rutEmpresa").val()==""){
			ok2=true;
			$("#rutEmpresa").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#rutEmpresa").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
		}
		
	if($("#nombreEmpresa").val()==""){
		ok3=true;
			$("#nombreEmpresa").css('border-color','#F00 #F00 #F00 #F00');
		}else{
			$("#nombreEmpresa").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');
			}
	
	if($("#razonSocial").val()==""){
				ok4=true;
				$("#razonSocial").css('border-color','#F00 #F00 #F00 #F00');
		}else{
				$("#razonSocial").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');	
		}
	if($("#telefono").val()==""){
				ok5=true;
				$("#telefono").css('border-color','#F00 #F00 #F00 #F00');
		}else{
				$("#telefono").css('border-color','#aaa #eaeaea #eaeaea #eaeaea');	
		}

	if (ok1) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe seleccionar una imagen <br>";
	if (ok2) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar el rut de la empresa <br>";
	if (ok3) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar el nombre de la empresa <br>";
	if (ok4) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar la razon social de la empresa <br>";
	if (ok5) MsgError = MsgError + "<span style='color:#F00'>*</span> Debe ingresar el telefono de la empresa <br>";

	if (ok1 || ok2 || ok3 || ok4 || ok5) {
		$("#respError").css('display','inline-block');
		$("#respError").html('<div> <h2> <span class="byline"><img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</spawn></h2> <span class="byline">'+MsgError+"</span></div>");
	}else{
		empresaSucces();
			/*$("#respError").html('');
			var frm = self.document.frm;
			frm.method="post";
			frm.action="./db/sql.php?caso=22"; 
			frm.submit();*/
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
              <h2>Configuracion</h2>
            </header>
            <div>
              <div class="row">
                <section>
                  <header>
                    <div style="width: 16%; float:left;">
                      <nav id="navConf">
                        <ul>
                          <li id="menuizquierda1" ><a href="#!" onClick="vistaDatos(); return 0;">Datos</a></li>
                          <li id="menuizquierda2"><a href="#!" onClick="vistaSeguridad(); return 0;">Seguridad</a></li>
                          <li id="menuizquierda3"><a href="#!" onClick="vistaEmail(); return 0;">Cambiar E-mail</a></li>
                          <li id="menuizquierda4"><a href="#!" onClick="vistaPass(); return 0;">Cambiar Password</a></li>
                          <li id="menuizquierda5" ><a href="#!" onClick="empresaOpta(); return 0;">Optar a empresa</a></li>
                        </ul>
                      </nav>
                    </div>
                    <div style="width: 80%; float:right;">
                      <div id="include"> </div>
                    </div>
                  </header>
                </section>
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
