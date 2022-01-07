<!DOCTYPE html>
<html lang="en">
<head>
	<title>VUC Front End / YessCreativo</title>
	<meta name="description" content="Maquetación HTML/CSS/Js supercade virtual VUC">

	<?php include('head.php'); ?>
</head>

<body>
	<?php include('header.php'); ?>

	<section id="content">
		<div class="cont-proyectos">
			<div class="descripcion-proyecto">
				<div class="descripcion-cont">
					<h2 class="title-proyecto">VUC</h2>
					<p class="realizacion">Realización: <span>Front End</span></p>

					<p class="txt-proyecto">Maquetación web HTML/CSS/Js diseño a la medida totalmente adaptable a dispositivos móviles, y amigable a los buscadores más utilizados.</p>

					<ul>
						<li>
							<h6>Rol</h6>
							<p>Front End</p>
						</li>
						<li>
							<h6>Año</h6>
							<p>2017</p>
						</li>
						<li>
							<h6>Plataforma</h6>
							<p>Drupal</p>
						</li>
						<li>
							<h6>View</h6>
							<a href="http://vuc.habitatbogota.gov.co/" target="_blank">vuc.habitatbogota.gov.co</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="slide-proyectos">
				<div class="flexslider">
			        <ul class="slides">
			           	<li>
			           		<img src="images/slide-vuc-1.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-vuc-2.jpg" alt="slide">
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