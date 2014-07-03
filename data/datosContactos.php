<!-- Main Wrapper -->
<script type="text/javascript">
function validar(){
/*
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
	$("#respError").html('<div> <h2> <img src="./images/error.png" /> Debe solucionar estos problemas antes de seguir</h2> <span class="byline">'+MsgError+"</span></div>");
	}else{
		empresaSucces();
			$("#respError").html('');
			var frm = self.document.frm;
			frm.method="post";
			frm.action="./db/sql.php?caso=22"; 
			frm.submit();
		}*/
$("#respError").html('<div> <h2> <img src="./images/ok.png" /> Su curriculum fue ingresado exitosamente...</h2></div>');
}
</script>
<div id="main-wrapper">
  <div class="container">
    <div class="row">
      <div class="12u"> 
        
        <!-- Blog -->
        <section>
          <header class="major">
            <h2>&nbsp;</h2>
          </header>
          <div>
            <div class="row">
              <div class="6u">
                <section>
                  <header>
                    <div id="respError"></div>
                    <h2 style="margin-bottom: 3%">Ingresa tu Curr&iacute;culum</h2>
                    <form name="frm" method="post">
                      <span class="byline">
                     	 <h1> Fecha de Nacimiento <span style="color:#F00">*</span></h1>
                         Dia<br /><input type="text" width="30" name="txtDia" id="txtDia" autocomplete="off"/>
                         <br /><br />
                         Mes <br /><select name="meses">
                                <option value="enero">Ene</option>
                                <option value="febrero">Feb</option>
                                <option value="marzo">Mar</option>
                                <option value="abril">Abr</option>
                                <option value="mayo">May</option>
                                <option value="junio">Jun</option>
                                <option value="julio">Jul</option>
                                <option value="agosto">Ago</option>
                                <option value="septiembre">Sep</option>
                                <option value="octubre">Oct</option>
                                <option value="noviembre">Nov</option>
                                <option value="diciembre">Dic</option>
                              </select>
                         <br /><br />
                         A&ntilde;o<br /> <input type="text" width="70" name="txtDia" id="txtDia" autocomplete="off"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Pa&iacute;s <span style="color:#F00">*</span></h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Region <span style="color:#F00">*</span></h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Comuna </h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Direccion </h1>
                         <input type="text" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> C&oacute;digo Postal </h1>
                         <input type="text" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Si es departamento, ingrese el piso </h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Telefono </h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Estado civil <span style="color:#F00">*</span></h1>
                              <select name="meses">
                              	<option value="0">-----------</option>
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Soltero">Soltero</option>
                                <option value="Viudo">Viudo</option>
                              </select>
                      </span><br />
                      <span class="byline">
                     	 <h1> Telefono </h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
                      <span class="byline">
                     	 <h1> Celular </h1>
                         <input type="number" name="txtNombres" id="txtNombres"/>
                      </span><br />
 						<input type="button" id="btnEntrar" value="Ingresar" onclick="validar(); return false;">
                    </form>
                  </header>
                </section>
              </div>
              <div class="6u">
                <section>
                  <header>
                    <h2>&nbsp;</h2>
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
