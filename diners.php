<!DOCTYPE html>
<html lang="en">
<head>
	<title>Diners Landing page / YessCreativo</title>
	<meta name="description" content="Proyecto diners, landing page HTML CSS Js">
		
	<?php include('head.php'); ?>	
</head>

<body>
	<?php include('header.php'); ?>

	<section id="content">
		<div class="cont-proyectos">
			<div class="descripcion-proyecto">
				<div class="descripcion-cont">
					<h2 class="title-proyecto">Diners</h2>
					<p class="realizacion">Realización: <span>Front-End</span></p>

					<p class="txt-proyecto">Landing page, para Diners con resposnive desing.</p>

					<ul>
						<li>
							<h6>Rol</h6>
							<p>Front-End</p>
						</li>
						<li>
							<h6>Año</h6>
							<p>2016</p>
						</li>
					</ul>
				</div>
			</div>

			<div class="slide-proyectos">
				<div class="flexslider">
			        <ul class="slides">
			           	<li>
			           		<img src="images/slide-diners-1.jpg" alt="slide">
			           	</li>
			           	<li>
			           		<img src="images/slide-diners-2.jpg" alt="slide">
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