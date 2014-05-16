<?php
include './db/consultas.php';
$objDB = new consultas;
$listaUsuarios = $objDB->getUsuarios(trim($_SESSION['www_id']));
$objDB->destruct();
?>
<script type="text/javascript" >
function opciones(id,tipo,nombre){
	switch (tipo){
	case 1:
		if(  confirm("Va a banear la cuenta de "+nombre+"?")  ){
			location.href="./db/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	case 2:
		if(  confirm("Va a desbanear la cuenta de "+nombre+"?")  ){
			location.href="./db/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	case 3:
		if(  confirm("Va a volver a confirmar la cuenta de "+nombre+"?")  ){
			location.href="./db/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	case 4:
		if(  confirm("Va a confirmar la cuenta de "+nombre+"?")  ){
			location.href="./db/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	default:
	break;	
	}

}
</script>
<!-- Main Wrapper -->

<div id="main-wrapper">
  <div class="container">
    <div class="row">
      <div> 
        
        <!-- Contenido -->
        <article>
        <section>
        <header class="major">
          <h2>Administrar usuarios</h2>
        </header>
        </section>
        <section> 
          <!-- mostrar -->
          <article class="module width_full">
          <style type="text/css" title="currentStyle">
			@import "css/demo_table_jui.css";
			@import "css/jquery-ui-1.8.4.custom.css";
		</style>
          <script src="js/jquery.dataTables.js"></script> 
          <script type="text/javascript" charset="utf-8">
                    $(document).ready(function() {
                        oTable = $('#example').dataTable({
                            "bJQueryUI": true,
                            "sPaginationType": "full_numbers",
							"sScrollY": 250,
							"bStateSave": true
                        });
						$("div.toolbar").html('<b>Exportar a excel</b> <a href="reportes/Administrar_usuarios_xls.php?id=<?php echo $_SESSION['www_id']?>"><img src="../images/excel.png" width="32" height="32"/></a>');
                    } );
                </script> 
          <!-- tabla dinamica -->
          <div class="toolbar" style="text-align:right; text-decoration:overline"></div>
          <table class="display" id="example">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Grupo</th>
                <th>E-mail</th>
                <th>Estado E-mail</th>
                <th>Rut</th>
                <th>Sexo</th>
                <th>Estado</th>
                <th>Fecha creacion cuenta</th>
                <th>Banear</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody align="center">
              <?php
						foreach($listaUsuarios as $l)
						{
					?>
              <tr>
                <td><?php echo $l[3] ?></td>
                <td><?php echo $l[4] ?></td>
                <td><?php echo $l[1] ?></td>
                <td><?php echo $l[9] ?></td>
                <td><?php echo $l[2] ?></td>
                <td><?php if($l[10]==1){echo'<img src="./images/confirmar_mail.png" height="32" width="32"/> Confirmado';}else{echo'<img src="./images/message_delete.png" height="32" width="32"/> No confirmado';}?></td>
                <td><?php echo $l[5] ?></td>
                <td><?php if($l[6]==1){echo'Hombre';}else{echo'Mujer';}?></td>
                <td><?php if($l[7]==1){echo'<img src="./images/green_dot.png"/>';}else{echo'<img src="./images/red_dot.png"/>';}?></td>
                <td><?php echo $l[8] ?></td>
                <td>
                <!-- Opciones de baneo -->
                        <?php if($l[7]==1){?>
                        <a href="#!" onclick="opciones(<?=$l[0]?>,1,'<?=$l[3]?>')">
                        <img src="images/red_dot.png" height="32" width="32" title="Banear" />
                        </a>
						<?php }else{?>
                        <a href="#!" onclick="opciones(<?=$l[0]?>,2,'<?=$l[3]?>')">
                        <img src="images/green_dot.png" height="32" width="32" title="Desbanear" />
                        </a>
                        <?php } ?>
                 </td>
                 <td>
                    <!-- Termino opciones de baneo -->
                    <!-- Opciones de confirmacion-->
                        <?php if($l[10]==1){?>
                        <a href="#!" onclick="opciones(<?=$l[0]?>,3,'<?=$l[3]?>')">
                        <img src="images/message_go.png" height="32" width="32" title="Volver a confirmar Email" />
                        </a>
						<?php }else{?>
                        <a href="#!" onclick="opciones(<?=$l[0]?>,4,'<?=$l[3]?>')">
                        <img src="images/confirmar_mail.png" height="32" width="32" title="Confirmar Email" />
                        </a>
                        <?php } ?>
					<!-- Termino opciones de confirmacion-->
                    </td>
              </tr>
              <?php
						}
					?>
            </tbody>
          </table>
        </section>
      </div>
      </article>
    </div>
    </section>
    </article>
  </div>
</div>
</div>
</div>

<!-- Footer Wrapper -->
<div id="footer-wrapper">
