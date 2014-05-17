<?php $sec = $_REQUEST['sec'];?>
<script type="text/javascript" >
function salir(){
		var frmMenu = self.document.frmMenu;
		frmMenu.method="post"; 
		frmMenu.action="./db/sql.php?caso=2"; 
		frmMenu.submit();
}
</script>
<div class="container">
            <div class="row">
            <div class="12u">
    		<!-- Cuenta -->
				<div id="account">
                <section id="header">
                    <nav id="nav">
                        <ul>
                            <li <?php if($sec == 'index' || $sec == '' ){echo 'class="current_page_item"';}?> ><a href="?sec=index">Inicio</a></li>
                            <!--<li><a href="right-sidebar.html">Right Sidebar</a></li>
                            <li><a href="left-sidebar.html">Left Sidebar</a></li>
                            <li><a href="no-sidebar.html">No Sidebar</a></li>-->
                            
							<?php if($_SESSION['www_id'] != 0){ 
									/* comprobar si esta logeado para mostrar opciones y desmostrar login y registro
									muestro las opciones si esta logeado */
							?>
									<li
										<?php if($sec == 'newcurric' || $sec == 'modcurric'){ ?>
											class="current_page_item"
										<?php } ?>
										>
                                            <a href="">Opciones</a>
                                            <ul>
                                                
                                                <li>
                                                    Curriculum
                                                    <ul>
                                                        <li><a href="?sec=newcurric">Crear nuevo</a></li>
                                                        <li><a href="?sec=modcurric">Modificar curriculums</a></li>
                                                        <!--<li><a href="#"></a></li>-->
                                                    </ul>
                                                </li>
                                            </ul>
                                    <?php }else{//muestro login y registro si no esta logeado ?>
									<li
											<?php if($sec == 'login'){ ?>
												class="current_page_item"
											<?php } ?>
									>
									<a href="?sec=login&val=0">Login</a>
                                    </li>
									<li
											<?php if($sec == 'registro'){ ?>
												class="current_page_item"
											<?php } ?>
									>
									
                                    <a href="?sec=registro&val=0">Registro</a>
                                    </li>
									<?php }//termino de comprobacion de session ?>                                
                            </li>
                            <?php if($_SESSION['www_nombre'] != "" || $_SESSION['www_nombre'] != ''){ ?>
									<li
										<?php if($sec == 'configuracion'){?>
											class="current_page_item_c"
										<?php }else{ ?>
											class="current_page_item_u"
										<?php } ?>
									>
									<?=$_SESSION['www_nombre']?>
                            <ul>
                                <li><a href="?sec=configuracion">Configuracion</a></li>
								<li><form name="frmMenu" method="post"><a href="#" onclick="salir();">Logout</a></form></li>

                            </ul>
                            </li>
									<?php
									}//termino de comprobacion de session									
									?> 
                            <?php if($_SESSION['www_group_id'] >= 10){ ?>
									<li
										<?php if($sec == 'Administrar_usuarios'){?>
											class="current_page_item_admin"
										<?php }else{ ?>
											class="current_page_item_adminc"
										<?php } ?>
									>
										Administracion
										<ul>
											<li><a href="?sec=Administrar_usuarios">Administrar usuarios</a></li>
										</ul>
										</li>
									<?php }//termino de comprobacion de nivel de administracion ?>
                        </ul>
                    </nav>
                    </section>
                    </div>
                    </div>
                </div>
                </div>