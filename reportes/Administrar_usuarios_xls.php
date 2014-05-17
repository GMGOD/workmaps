<?
include '../db/consultas.php';
$id = $_REQUEST['id'];
$grupo = $_REQUEST['grupo'];
$objDB = new consultas;
$listaUsuarios = $objDB->getUsuarios(trim($id),trim($grupo));
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
                <td><?php if($l[10]==1){echo'Confirmado';}else{echo'No confirmado';}?></td>
                <td><?php echo $l[5] ?></td>
                <td><?php if($l[6]==1){echo'Hombre';}else{echo'Mujer';}?></td>
                <td><?php if($l[7]==1){echo'Activo';}else{echo'Baneado';}?></td>
                <td><?php echo $l[8] ?></td>
              </tr>
              <?php
						}
					?>
        </tbody>
        <table>