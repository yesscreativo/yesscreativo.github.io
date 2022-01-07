<!DOCTYPE html>
<html lang="en">
<head>
	<title>Deedly front end / YessCreativo</title>
	<meta name="description" content="Deedly proyecto web front-end HTML/CSS">
	
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('header.php'); ?>

	<section id="content">
		<div class="cont-proyectos">
			<div class="descripcion-proyecto">
				<div class="descripcion-cont">
					<h2 class="title-proyecto">Deedly</h2>
					<p class="realizacion">Realización: <span>Front End</span></p>

					<p class="txt-proyecto">Sitio web a la medida, y mi participación fue como front end HTML/CSS.</p>

					<ul>
						<li>
							<h6>Rol</h6>
							<p>Front-End</p>
						</li>
						<li>
							<h6>Año</h6>
							<p>2014</p>
						</li>
						<li>
							<h6>View</h6>
							<a href="https://www.deedly.com/" target="_blank">www.deedly.com</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="slide-proyectos">
				<div class="flexslider">
			        <ul class="slides">
			           	<li>
			           		<img src="images/slide-deedly-1.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-deedly-2.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-deedly-3.jpg" alt="slide">
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