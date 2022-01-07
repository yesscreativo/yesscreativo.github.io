<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fondospinas sitio web / YessCreativo</title>
	<meta name="description" content="Fondospinas proyecto web diseño y front end HTML/CSS/Js responsive desing, sitio adaptable a diferentes resoluciones de pantalla.">

	<?php include('head.php'); ?>
</head>

<body>
	<?php include('header.php'); ?>

	<section id="content">
		<div class="cont-proyectos">
			<div class="descripcion-proyecto">
				<div class="descripcion-cont">
					<h2 class="title-proyecto">Fondospinas</h2>
					<p class="realizacion">Realización: <span>Diseño & Front End</span></p>

					<p class="txt-proyecto">Fondospinas es un sitio a la madida implementado en la paltaforma Drupal, relizando el diseño del sitio y la maquetación HTML/CSS/Js, volviendo un proyecto resposnive a todos los tipos de pantalla y amigable con los diferentes buscadores. Con animaciones svg para los iconos que se muestran en el sitio como animaciones Js, volviendolo un sitio visualmente atractivo y amigable para el usuario.</p>

					<ul>
						<li>
							<h6>Rol</h6>
							<p>Diseñador & Front End</p>
						</li>
						<li>
							<h6>Año</h6>
							<p>2017</p>
						</li>
						<li>
							<h6>View</h6>
							<a href="#" target="_blank">www.fosndospinas.com</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="slide-proyectos">
				<div class="flexslider">
			        <ul class="slides">
			           	<li>
			           		<img src="images/slide-fondospinas-1.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-fondospinas-2.jpg" alt="slide">
			           	</li>
			        </ul>
			    </div>
			</div>
		</div>

		<?php include('marcas.php'); ?>
	</section>

	<?php include('contacto.php'); ?>

	<?php include('footer.php'); ?>

	<?php include('footscript.php'); ?>
	
</body>
</html>