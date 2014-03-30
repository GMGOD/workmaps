<? 
include('../db/conexion.php');
$txtNombre = $_REQUEST['txtNombre'];
$txtApellido = $_REQUEST['txtApellido'];
$txtUsuario = $_REQUEST['txtUsuario'];
$txtEmail = $_REQUEST['txtEmail'];

$fecha1 = $_REQUEST['fecha1'];
$fecha2 = $_REQUEST['fecha2'];
$cmbState = $_REQUEST['cmbState'];
$cmbGroup_id = $_REQUEST['cmbGroup_id'];
$cmbActivar = $_REQUEST['cmbActivar'];
$cmbSexo = $_REQUEST['cmbSexo'];

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
WHERE 1 $filtro 
ORDER BY m.fecha_creacion DESC";
#echo $consulta."<br>";
$dtsql = mysql_query($consulta);


header('Content-type: application/vnd.ms-excel');
header("Content-Disposition:inline; filename=Reporte_Usuarios_".date('d-m-Y').".xls");
?>

<table border="1" cellspacing="0"> 
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
    </tr> 
</thead> 
<tbody> 
<?php if (mysql_num_rows($dtsql) > 0){
	while ($data = @mysql_fetch_array($dtsql)) {
		if($data['id'] != NULL or $data['id'] != ''){ ?>
			<tr>
				<td><?=$data['nombre']?></td>
				<td><?=$data['apellido']?></td>
				<td><?=$data['user_nick']?></td>
				<td><?=$data['group_id']?></td>
				<td><?=$data['email']?></td>
				<td><?php if($data['activar']==1){echo'Confirmado';}else{echo'No confirmado';}?></td>
                <td><?=$data['rut']?></td>
                <td><?php if($data['sex']==1){echo'Hombre';}else{echo'Mujer';}?></td>
                <td><?php if($data['state']==1){echo'Activo';}else{echo'Baneado';}?></td>
                <td><?=$data['fecha_creacion']?></td>
			</tr>
			<?php }else{}
	}
	mysql_free_result($dtsql);
}
?>
        </tbody>
        <table>