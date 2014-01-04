<div class="content-column"><img src="web-app/img/candelabro.png"></div>
<section class="content-body">
	<div class="bullets first"></div>
	<div class="bullets second"></div>
	
		<div>
			<h5>Complete el siguiente formulario para realizarnos su consulta, a la brevedad recibirá nuestra respuesta:</h5>
		</div>
		<form class="contactForm" method="POST" action="src/class/sendMessage.php">
			<ul>
				<li class="form-row">
					<label>Nombre y Apellido <em>*</em></label>
					<input id="name" name="name" type="text"/>
				</li>
				<li class="form-row">
					<label>Correo electrónico <em>*</em></label>
					<input id="email" name="email" type="text"/>
				</li>
				<li class="form-row">
					<label>Asunto </label>
					<input id="subject" name="subject" type="text"/>
				</li>
				<li class="form-row">
					<label>Comentario <em>*</em></label>
					<textarea id="comment" name="comment" cols="45" rows="8" maxlength="400"></textarea>
				</li>
			</ul>
			<input name="send" id="send" type="submit" value="Enviar" class="button">
		</form>
		<p style="margin-left:10px;">NOTA: Los campos con asterisco (<em>*</em>) son obligatorios.</p>
		<!--<img src="web-app/img/sobre.png" class="sobre">-->
</section>