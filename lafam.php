<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lafam Front End y diseño web / YessCreativo</title>
	<meta name="description" content="Diseño y maquetación web diseño gráfico HTML/CSS/Js resposive desing.">

	<?php include('head.php'); ?>
</head>

<body>
	<?php include('header.php'); ?>

	<section id="content">
		<div class="cont-proyectos">
			<div class="descripcion-proyecto">
				<div class="descripcion-cont">
					<h2 class="title-proyecto">Lafam</h2>
					<p class="realizacion">Realización: <span>Front End & Diseño</span></p>

					<p class="txt-proyecto">Diseño y Front End, sitio web informativo a la madida donde se muestrán los servicios que ofrece, el sitio esta siseñado para soportar los diferentes navegadores, así como poderce ver en diferentes dispositivos mobiles.</p>

					<ul>
						<li>
							<h6>Rol</h6>
							<p>Front End & Diseñador</p>
						</li>
						<li>
							<h6>Año</h6>
							<p>2015</p>
						</li>
						<li>
							<h6>Plataforma</h6>
							<p>Drupal</p>
						</li>
						<li>
							<h6>View</h6>
							<a href="https://www.lafam.com.co/" target="_blank">www.lafam.com.co</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="slide-proyectos">
				<div class="flexslider">
			        <ul class="slides">
			           	<li>
			           		<img src="images/slide-lafam-1.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-lafam-2.jpg" alt="slide">
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