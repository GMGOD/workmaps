<?php
#echo phpinfo();
header('Content-Type: text/html; charset=ISO-8859-1');
include './session.php';
/*include 'db/funciones.php';*/

/*			<link	rel="stylesheet"	href="css/skel-noscript.css" />
			<link	rel="stylesheet"	href="css/style.css" />
			<link	rel="stylesheet"	href="css/style-desktop.css" />
            <!-- css netsur -->
            <link	rel="stylesheet"	href="css/jquery.autocomplete.css" />
            <link	rel="stylesheet"	href="js/colorbox.css" media="screen" />*/
?>
<!DOCTYPE HTML>
<!--
	Dopetrope 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="es">
	<head>
		<title>Mapworks - Proyecto informatico 2</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,900,300italic" rel="stylesheet" />
		<noscript>
		<style type="text/css" title="mapWorks">
			@import "css/skel-noscript.css";
			@import "css/style.css";
			@import "css/style-desktop.css";
			@import "css/jquery.autocomplete.css";
			@import "js/colorbox.css";
		</style>
		</noscript>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
        <!-- JS externos -->
		<!--<script src="js/jquery.js" ></script>
		<script src="js/jquery-1.5.2.min.js"></script>
		<script src="js/ui.datepicker.js"></script>-->
        <script src="js/jquery.colorbox.js"></script>
        <script src="js/jquery.autocomplete.js"></script>
        <script src="js/jquery.form.min.js"></script>
		<!--[if lte IE 8]>
        <script src="js/html5shiv.js"></script>
        <link rel="stylesheet" href="css/ie8.css" />
        <![endif]-->
	</head>
	<body class="homepage">
    	<?php
				require_once "menu.php";
				require_once "pag.php";
        ?> 
				
				<!-- Footer
                Cambia si es 404 o no para mantener un estilo limpio de pagina [id="footer-wrapper-404" o id="footer-wrapper"]-->
					<section id="footer" class="container">
						<div class="row">
							<div class="8u">

								<section>
									<header>
										<h2>Mantente actualizado</h2>
									</header>
									<ul class="dates">
										<li>
											<span class="date">Jan <strong>27</strong></span>
											<h3><a href="#">Lorem dolor sit amet veroeros</a></h3>
											<p>Ipsum dolor sit amet veroeros consequat blandit ipsum phasellus lorem consequat etiam.</p>
										</li>
										<li>
											<span class="date">Jan <strong>23</strong></span>
											<h3><a href="#">Ipsum sed blandit nisl consequat</a></h3>
											<p>Blandit phasellus lorem ipsum dolor tempor sapien tortor hendrerit adipiscing feugiat lorem.</p>
										</li>
										<li>
											<span class="date">Jan <strong>15</strong></span>
											<h3><a href="#">Magna tempus lorem feugiat</a></h3>
											<p>Dolore consequat sed phasellus lorem sed etiam nullam dolor etiam sed amet sit consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>12</strong></span>
											<h3><a href="#">Dolore tempus ipsum feugiat nulla</a></h3>
											<p>Feugiat lorem dolor sed nullam tempus lorem ipsum dolor sit amet nullam consequat.</p>
										</li>
										<li>
											<span class="date">Jan <strong>10</strong></span>
											<h3><a href="#">Blandit tempus aliquam?</a></h3>
											<p>Feugiat sed tempus blandit tempus adipiscing nisl lorem ipsum dolor sit amet dolore.</p>
										</li>
									</ul>
								</section>
							
							</div>
							<div class="4u">
							
								<section>
									<header>
										<h2>Quienes somos?</h2>
									</header>
									<a href="http://facebook.com/DreametryDoodle" class="image image-full"><img src="images/pic10.jpg" alt="" /></a>
									<p>
										Somos solo dos compañeros de universidad que decidieron como proyecto WorkMaps, lo que actualmente vez... Estudiamos en la universidad de Inacap en Chile (Ing. informatica) y nos dedicamos a la informatica.
									</p>
									<footer>
										<a href="#" class="button">Quieres saber mas?</a>
									</footer>
								</section>
							
							</div>
						</div>
						<div class="row">
							<div class="4u">

								<section>
									<header>
										<h2>Links de interes</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>

							</div>
							<div class="4u">

								<section>
									<header>
										<h2>Links de interes</h2>
									</header>
									<ul class="divided">
										<li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
										<li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
										<li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
										<li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
										<li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
										<li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
									</ul>
								</section>

							</div>
							<div class="4u">
							
								<section>
									<header>
										<h2>Visitanos tambien en...</h2>
									</header>
									<ul class="social">
										<li class="facebook"><a href="#" class="icon48 icon48-1">Facebook</a></li>
										<li class="twitter"><a href="http://twitter.com/n33co" class="icon48 icon48-2">Twitter</a></li>
										<li class="dribbble"><a href="http://dribbble.com/n33" class="icon48 icon48-3">Dribbble</a></li>
										<li class="linkedin"><a href="#" class="icon48 icon48-4">LinkedIn</a></li>
										<li class="googleplus"><a href="#" class="icon48 icon48-6">Google+</a></li>
									</ul>
									<ul class="contact">
									<header>
										<h2>Mas contacto...</h2>
									</header>
										<li>
											<h3>Address</h3>
											<p>
												Untitled Incorporated<br />
												1234 Somewhere Road Suite #5432<br />
												Nashville, TN 00000-0000
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">someone@untitled.tld</a></p>
										</li>
										<li>
											<h3>Phone</h3>
											<p>(800) 000-0000</p>
										</li>
									</ul>
								</section>
							
							</div>
						</div>
						<div class="row">
							<div class="12u">
							
								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; WorkMaps	</li>
                                            <li>Diseño por <a href="http://facebook.com/DreametryDoodle">DreametryDoodle</a></li>
											<li>Integrantes: Gerardo Muñoz y Luis Marin</li>
											<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>
						</div>
					</section>
				
			</div>

	</body>
</html>