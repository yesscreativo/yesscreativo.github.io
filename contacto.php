<div id="contacto">
		<div class="cont-contacto">
			<a class="btn-cerrar">x</a>
			<div class="info-contacto">
				<div class="logo-contacto">
					<img src="images/icon-logo-yesscreativo.png" alt="yesscreativo">
				</div>

				<p class="mail">widmark90@hotmail.com</p>

				<div class="contact-tel">
					<span class="icon icon30 icon-tel"></span>
					<div class="tel">
						<h6>YessCreativo</h6>
						<a href="https://api.whatsapp.com/send?phone=573204680633">320 468 0633</a>
					</div>
				</div>

				<div class="redes">
					<a href="https://www.linkedin.com/in/widmark-yesid-parra-navas-26646130/" class="btn-red icon-in icon icon30" target="_blank"></a>
					<a href="https://www.behance.net/yesscreativo" class="btn-red icon-be icon icon30" target="_blank"></a>
				</div>
			</div>

			<div class="form-contacto">
				<div class="cont-form">
					<h6>¿Quieres escribirme?</h6>
					<p><span>¡Hey!</span> Quieres saludarme, adelante, o quieres que participe en tu proyecto, no lo dudes escribeme y cuentame un poco de que se trata. <span>¡Adelante!</span></p>

					<form name="contactform" method="post" action="send_form_email.php">
						<input type="text" name="nombre" id="nombre" placeholder="Nombres" required="">
						<input type="text" name="email" id="email" placeholder="E-mail" required="">
						<input type="text" name="asunto" id="asunto" placeholder="Asunto" required="">
						<input type="text" name="proyecto" id="proyecto" placeholder="Proyecto" required="">
						<textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>

						<div class="cont-btn">
							<input type="submit" value="ENVIAR" id="btn-enviar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	