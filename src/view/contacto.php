<div class="content-column"></div>
<section class="content-body">
	<div class="bullets first"></div>
	<div class="bullets second"></div>
	
		<div>
			<h5>Complete el siguiente formulario para realizarnos su consulta, a la brevedad recibirá nuestra respuesta:</h5>
		</div>
		<form id="contact" name="contact" method="POST" action="src/class/contactForm.php">
			<ul>
				<li class="form-row">
					<label>Nombre y Apellido <em>*</em></label>
					<input id="name" type="text"/>
				</li>
				<li class="form-row">
					<label>Correo electrónico <em>*</em></label>
					<input id="email" type="text"/>
				</li>
				<li class="form-row">
					<label>Asunto <em>*</em></label>
					<input id="subject" type="text"/>
				</li>
				<li class="form-row">
					<label>Comentario <em>*</em></label>
					<textarea id="comment" cols="45" rows="8" maxlength="400"></textarea>
				</li>
			</ul>
			<input type="image" width="185" height="40" src="/web-app/img/sendReservation.png" value="Enviar Reserva" />
		</form>
		<img src="web-app/img/sobre.png" class="sobre">
</section>