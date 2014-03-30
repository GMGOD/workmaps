<?php
$txtNombre = $objDB->escaparString($_REQUEST['txtNombre']);
$txtApellido = $objDB->escaparString($_REQUEST['txtApellido']);
$txtUsuario = $objDB->escaparString($_REQUEST['txtUsuario']);
$txtEmail = $objDB->escaparString($_REQUEST['txtEmail']);

$fecha1 = $objDB->escaparString($_REQUEST['fecha1']);
$fecha2 = $objDB->escaparString($_REQUEST['fecha2']);
$cmbState = $objDB->escaparString($_REQUEST['cmbState']);
$cmbGroup_id = $objDB->escaparString($_REQUEST['cmbGroup_id']);
$cmbActivar = $objDB->escaparString($_REQUEST['cmbActivar']);
$cmbSexo = $objDB->escaparString($_REQUEST['cmbSexo']);

if($txtNombre!=''){
	$filtro .=" AND ui.nombre='".$txtNombre."'";
}
if($txtApellido!=''){
	$filtro .=" AND ui.apellido='".$txtApellido."'";
}
if($txtUsuario!=''){
	$filtro .=" AND m.user_nick='".$txtUsuario."'";
}
if($txtEmail!=''){
	$filtro .=" AND m.email='".$txtEmail."'";
}

if($cmbState!=0){
	$filtro .=" AND m.state=".$cmbState;
}
if($cmbGroup_id!=0){
	$filtro .=" AND m.group_id=".$cmbGroup_id;
}
if($cmbActivar!=0){
	$filtro .=" AND m.activar=".$cmbActivar;
}
if($cmbSexo!=0){
	$filtro .=" AND ui.sex=".$cmbSexo;
}
if(($fecha1!=0 or $fecha1!='') and ($fecha2!=0 or $fecha2!='')){
	$filtro .=" AND m.fecha_creacion BETWEEN '$fecha1' AND '$fecha2' ";
}

$consulta = "SELECT m.id, m.user_nick, m.email, ui.nombre, ui.apellido, ui.rut, ui.sex, m.state, m.fecha_creacion, m.group_id, m.activar
FROM miembros m
LEFT JOIN user_info ui ON m.id=ui.userid 
WHERE 1 $filtro AND m.id <> ".$_SESSION['www_id']."
ORDER BY m.fecha_creacion DESC";
#echo $consulta."<br>";

$cantidad=30;
$numero_pagi = 10;

$_pagi_propagar = array("sec","Administrar_usuarios","fecha1",$fecha1, "fecha2", $fecha2, "cmbActivar", $cmbActivar,"cmbGroup_id",$cmbGroup_id,"cmbState",$cmbState,"cmbSexo",$cmbSexo);

list($valor, $_pagi_navegacion) = SelectPaginatorPropaga($consulta, $cantidad, $numero_pagi, 30, $_pagi_propagar); 
								#SelectPaginatorPropaga($consulta, $cantidad_pagi, $numero_pagi, 13, $_pagi_propagar);

//list($id2,$nombre)=SelectFamilia2();
?>
<script type="text/javascript" >
function opciones(id,tipo,nombre){
	switch (tipo){
	case 1:
		if(  confirm("Va a banear la cuenta de "+nombre+"?")  ){
			location.href="./SQL/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	case 2:
		if(  confirm("Va a desbanear la cuenta de "+nombre+"?")  ){
			location.href="./SQL/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	case 3:
		if(  confirm("Va a volver a confirmar la cuenta de "+nombre+"?")  ){
			location.href="./SQL/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
		}
	break;
	case 4:
		if(  confirm("Va a confirmar la cuenta de "+nombre+"?")  ){
			location.href="./SQL/sql.php?caso=30&tipo="+tipo+"&id="+id+"&nombre="+nombre;
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
									<div>
                                        
		<form action="./index.php?sec=Administrar_usuarios" method="get" autocomplete="off">
    <article class="module width_full">
    	<header><h3 class="tabs_involved">Busqueda</h3></header>
            <div class="tab_container">
                <fieldset style="width:90%; margin-left:30px;" >
                    <label class="label_izquierdo_100"><h3>Fecha 1</h3></label>
                        <input type="date" name="fecha1" id="fecha1" autocomplete="off" style="width:30%; margin-bottom: 1%" value="<?=$fecha1?>">
					<div class="clear"></div>
                    <label class="label_izquierdo_100"><h3>Fecha 2</h3></label> 
                    	<input type="date" name="fecha2" id="fecha2" autocomplete="off" style="width:30%; margin-bottom: 1%" value="<?=$fecha2?>">
                    <div class="clear"></div>
                </fieldset>
                <fieldset style="width:90%; margin-left:30px;" >
                     <label class="label_izquierdo_100"><h3>Nombre</h3></label> 
                    	<input type="text" name="txtNombre" id="txtNombre" style="width:30%; margin-bottom: 1%" autocomplete="off" value="<?=$txtNombre?>" autocomplete="off">
                        <div class="clear"></div>
                     <label class="label_izquierdo_100"><h3>Apellido</h3></label> 
                    	<input type="text" name="txtApellido" id="txtApellido" style="width:30%; margin-bottom: 1%" autocomplete="off" value="<?=$txtApellido?>" autocomplete="off">
                        <div class="clear"></div>
                     <label class="label_izquierdo_100"><h3>Usuario</h3></label> 
                    	<input type="text" name="txtUsuario" id="txtUsuario" style="width:30%; margin-bottom: 1%" autocomplete="off" value="<?=$txtUsuario?>" autocomplete="off">
                        <div class="clear"></div>
                     <label class="label_izquierdo_100"><h3>E-mail</h3></label> 
                    	<input type="text" name="txtEmail" id="txtEmail" style="width:30%; margin-bottom: 1%" autocomplete="off" value="<?=$txtEmail?>" autocomplete="off">
                        <div class="clear"></div>
                     <label class="label_izquierdo_100"><h3>Grupo</h3></label> 
                    	<input type="text" name="cmbGroup_id" id="cmbGroup_id" style="width:10%; margin-bottom: 1%" autocomplete="off" value="<?=$cmbGroup_id?>" autocomplete="off">
                        <div class="clear"></div>
                </fieldset>
                
                <fieldset style="width:90%; margin-left:30px;" >
                    <label class="label_izquierdo_100"><h3>Estado</h3></label> 
                        <select name="cmbState" id="cmbState" style="width:25%; margin-bottom: 1%">
                            <option value="0">Seleccione...</option>            
                            <option value="1" <?php if($cmbState==1){echo 'selected';}?>>Activo</option>
                            <option value="2" <?php if($cmbState==2){echo 'selected';}?>>Baneado</option>
                    	</select>
                        <div class="clear"></div>
                     <label class="label_izquierdo_100"><h3>Sexo</h3></label> 
                        <select name="cmbSexo" id="cmbSexo" style="width:25%; margin-bottom: 1%">
                            <option value="0">Seleccione...</option>            
                            <option value="1" <?php if($cmbSexo==1){echo 'selected';}?>>Hombre</option>
                            <option value="2" <?php if($cmbSexo==2){echo 'selected';}?>>Mujer</option>
                    	</select>
                        <div class="clear"></div>
                     <label class="label_izquierdo_100"><h3>Confirmado</h3></label> 
                        <select name="cmbActivar" id="cmbActivar" style="width:25%; margin-bottom: 1%">
                            <option value="0">Seleccione...</option>            
                            <option value="1" <?php if($cmbActivar==1){echo 'selected';}?>>Activo mail</option>
                            <option value="2" <?php if($cmbActivar==2){echo 'selected';}?>>No activo mail</option>
                    	</select>
                        <div class="clear"></div>
                </fieldset>
                </div>
        <footer>
                <div class="submit_link">
                    <input type="hidden" name="sec" value="Administrar_usuarios" />
                    <input type="submit"  value="Buscar" >
                </div>
        </footer>
    </article>
</form>
<!-- mostrar -->
<article class="module width_full">
<header>
<table  cellpadding="1" cellspacing="1" style="width:100%"   >
	<tr>
    <td width="47%" ><h3>Reporte usuarios</h3></td>
    <td>
        <div class="btn_tabla" style="padding-top: 0px;">
        	<a href="reportes/Administrar_usuarios_xls.php?fecha1=<?=$fecha1?>&fecha2=<?=$fecha2?>&txtNombre=<?=$txtNombre?>&txtApellido=<?=$txtApellido?>&txtUsuario=<?=$txtUsuario?>&txtEmail=<?=$txtEmail?>&cmbState=<?=$cmbState?>&cmbGroup_id=<?=$cmbGroup_id?>&cmbActivar=<?=$cmbActivar?>&cmbSexo=<?=$cmbSexo?>" target="_blank">Exportar a Excel</a>
        </div>
    </td>
    <td ></td>
    </tr>
</table>
</header>

<div class="tab_container">
    <div id="tab1" class="tab_content">
    <form id="form_data" name="form_data" action="" method="post">
        <table class="tablesorter" width="100%" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Usuario</th>
                    <th>Grupo</th>
                    <th>E-mail</th>
                    <th>Confirmacion E-mail</th>
                    <th>Rut</th>
                    <th>Sexo</th>
                    <th>Estado</th>
                    <th>Fecha creacion cuenta</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
           <? $c=0; if($valor[$c][0]!=""){ foreach($valor as $value){
				#$fecha = VueltaFechaSinDia($valor[$c][12]);
			?>
                <tr align="center">
                    <td><?=$valor[$c][3]?></td>
                    <td><?=$valor[$c][4]?></td>
                    <td><?=$valor[$c][1]?></td>
                    <td><?=$valor[$c][9]?></td>
                    <td><?=$valor[$c][2]?></td>
                    <td><?php if($valor[$c][10]==1){echo'<img src="./images/ok.png"/>';}else{echo'<img src="./images/error.png"/>';}?></td>
                    <td><?=$valor[$c][5]?></td>
                    <td><?php if($valor[$c][6]==1){echo'Hombre';}else{echo'Mujer';}?></td>
                    <td><?php if($valor[$c][7]==1){echo'<img src="./images/green_dot.png"/>';}else{echo'<img src="./images/red_dot.png"/>';}?></td> 
                    <td><?=$valor[$c][8]?></td>   
                   <td>
                   <!-- Opciones de baneo -->
                        <?php if($valor[$c][7]==1){?>
                        <a href="#!" onclick="opciones(<?=$valor[$c][0]?>,1,'<?=$valor[$c][3]?>')">
                        <img src="images/red_dot.png" title="Banear" />
                        </a>
						<?php }else{?>
                        <a href="#!" onclick="opciones(<?=$valor[$c][0]?>,2,'<?=$valor[$c][3]?>')">
                        <img src="images/green_dot.png" title="Desbanear" />
                        </a>
                        <?php } ?>
                    <!-- Termino opciones de baneo -->
                    <!-- Opciones de confirmacion-->
                        <?php if($valor[$c][10]==1){?>
                        <a href="#!" onclick="opciones(<?=$valor[$c][0]?>,3,'<?=$valor[$c][3]?>')">
                        <img src="images/error.png" title="Volver a confirmar" />
                        </a>
						<?php }else{?>
                        <a href="#!" onclick="opciones(<?=$valor[$c][0]?>,4,'<?=$valor[$c][3]?>')">
                        <img src="images/ok.png" title="Confirmar" />
                        </a>
                        <?php } ?>
					<!-- Termino opciones de confirmacion-->
                    </td>
                </tr>
                <? $c++;}} ?> 
            </tbody>
        </table>
        <div id="chart_wrapper" class="chart_wrapper"></div>
    <!-- End bar chart table-->
    </form>
    
    <!-- Begin pagination -->
        <div class="pagination">
        <?=$_pagi_navegacion?>
        </div>
    <!-- End pagination -->
    </div>
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