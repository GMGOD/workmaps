<?php
include '../db/consultas.php';
include '../session.php';
$objDB = new consultas;
$lista = $objDB->getUserInfo($_SESSION['www_id']);
foreach ($lista as $data){
		$id					=	$data['id'];
		$email				=	$data['email'];
		$usuario			=	$data['user_nick'];
//		$password			=	$data['user_pass'];
		$grupo				=	$data['group_id'];
		$conteoLogings		=	$data['logincount'];
		$fecha_creacion		=	$data['fecha_creacion'];
		$nombre				=	$data['nombre'];
		$apellido			=	$data['apellido'];
		$rut				=	$data['rut'];
		$sexo				=	$data['sex'];
}
$listaDatos = $objDB->getDatos_login($_SESSION['www_id']);
$objDB->destruct();
?>
<script type="text/javascript" >
$(document).keypress(function(e) {
  if(e.which == 13) {
    mail();
  }
});
</script>
<!-- Main Wrapper -->

<div class="row">
  <div class="12u skel-cell-mainContent"> 
    
    <!-- Contenido -->
    <article>
      <section>
        <div>
          <div class="row">
            <section>
              <header>
              
                    <header class="major">
                    	<h2>Datos basicos</h2>
                    </header>
                    
                    
                  <span class="byline">
                  <h3>Nombre: <?=$nombre?> <?=$apellido?></h3>
                  </span>
                  <span class="byline">
                  <h3>Rut: <?=$rut?></h3>
                  </span>
                  <span class="byline">
                  <h3>Sexo: <?php if($sexo==1){echo 'Masculino';}else{echo 'Femenino';}?></h3>
                  </span>
                  <span class="byline">
                  <h3>Usuario: <?=$usuario?></h3>
                  </span>
                  <span class="byline">
                  <h3>Email: <?=$email?></h3>
                  </span>


                    <header class="major">
                    	<h2>Datos de cuenta</h2>
                    </header>
                    
                    
                  <span class="byline">
                  <h3>Grupo de usuario: <?php if($grupo == 0){echo 'Usuario basico';}else if($grupo == 10){echo 'Usuario empresa';}else if($grupo == 99){echo 'Administrador';}?></h3>
                  </span>
                  <span class="byline">
                  <h3>Contedo de logins: <?=$conteoLogings?></h3>
                  </span>
                  <span class="byline">
                  <h3>Fecha creacion de cuenta: <?=$fecha_creacion?></h3>
                  </span>
                    <header class="major">
                    	<h2>Ultimos login</h2>
                    </header>
                <table width="100%" border="1">
                <thead>
                <tr>
                	<th>Explorador</th>
                    <th>Version</th>
                    <th>Sistema Operativo</th>
                    <th>Ultima IP</th>
                    <th>Fecha</th>
                    </tr>
                </thead>
                <tbody align="center">
				<?php

                foreach($listaDatos as $l)
                                        {
                ?>
                  <tr>
                    <td><?php echo $l[3];?></td>
                    <td><?php echo $l[4];?></td>
                    <td><?php echo $l[6];?></td>
                    <td><?php echo $l[7];?></td>
                    <td><?php echo $l[8];?></td>
                  </tr>
                 <?php } ?>
                 </tbody>
                </table>

              </header>
            </section>
          </div>
        </div>
      </section>
    </article>
  </div>
</div>