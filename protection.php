<!DOCTYPE html>
<html lang="en">
<head>
	<title>Protection International Sitioweb / YessCreativo</title>
	<meta name="description" content="Proyecto Protection, Maquetación HTML/CSS/Js desarrollo a la medida, sitio web">
	
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('header.php'); ?>

	<section id="content">
		<div class="cont-proyectos">
			<div class="descripcion-proyecto">
				<div class="descripcion-cont">
					<h2 class="title-proyecto">Protection</h2>
					<p class="realizacion">Realización: <span>Front-End</span></p>

					<p class="txt-proyecto">Proyecto Front-End maquetación HTML5/CSS3/Js,
						responsive desing. Sitio web desarrollo a la medida en la plataforma Drupal.</p>

					<ul>
						<li>
							<h6>Rol</h6>
							<p>Front-End</p>
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
							<a href="https://www.protectioninternational.org/" target="_blank">www.protectioninternational.org</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="slide-proyectos">
				<div class="flexslider">
			        <ul class="slides">
			           	<li>
			           		<img src="images/slide-protection.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-protection-2.jpg" alt="slide">
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