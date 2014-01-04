<section class="content-body">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
	<script src="/web-app/js/jquery-2.0.3.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="/web-app/js/jquery.ui.datepicker.js"></script>
	<script>
		$(function() {
		$( "#in" ).datepicker( $.datepicker.regional[ "es" ] );
		$( "#out" ).datepicker( $.datepicker.regional[ "es" ] );
		});
	</script>

	<div class="reservation">
		<img src="web-app/img/reservas.png" height="28" width="180">
		<form id="reservation" name="reservation" method="POST" action="src/class/reservationForm.php">
			<ul>
				<li class="form-row">
					<label>Nombre</label>
					<input id="name" type="text"/>
				</li>
				<li class="form-row">
					<label>Teléfono</label>
					<input id="phone" type="text"/>
				</li>
				<li class="form-row">
					<label>E-Mail</label>
					<input id="email" type="text"/>
				</li>
				<li class="form-row">
					<label>Dni</label>
					<input id="dni" type="text"/></label>
				</li>
				<li class="form-row">
					<label>Tipo de Suite</label>
					<select>
						<option value="ninguna">-------</option>
						<option value="doble-estandar">Doble estándar</option>
						<option value="triple-estandar">Triple estándar</option>
						<option value="cuadruple-estandar">Cuádruple estándar</option>
						<option value="doble-suite">Doble suite</option>
						<option value="cuadruple-suite">Cuádruple suite</option>
					</select>
				</li>	
				<li class="form-row-date">
					<label>Ingreso</label>
					<input id="in" type="text"/>
					<label>Egreso</label>
					<input id="out" type="text"/>
				</li>
				<li class="form-row-date">
					<label>Niños</label>
					<input id="children" type="text"/>
					<label>Adultos</label>
					<input id="adult" type="text"/> 
				</li>
			</ul>
			<center>
				<input type="image" width="185" height="40" src="/web-app/img/sendReservation.png" value="Enviar Reserva" />
			</center>
		</form>
	</div>
	<div id="message"><h1>Un lugar para disfrutar</h1></div>
	<?php require_once(CLASS_PATH."/images.php");
		  Images::printImages(); ?>
	<!--<div>
		<img class="background" id="1" src="web-app/img/fondo.jpg" alt="El Volcán" style="display:inline">
		<img class="background" id="2" src="web-app/img/fondo-1.jpg" alt="El Volcán" style="display:none">
		<img class="background" id="3" src="web-app/img/fondo-2.jpg" alt="El Volcán" style="display:none">
		<img class="background" id="4" src="web-app/img/fondo-3.jpg" alt="El Volcán" style="display:none">
	</div>-->
</section>
<script type="text/javascript">

	 var imageSpeed = 5000;
	 var imageNumber = 1;
	 var nextImage = 0;

	 setTimeout("changeImage()", imageSpeed);

	 function changeImage(){

	 	nextImage = imageNumber + 1;

	 	var existNextImage = $("#"+nextImage);

	 	if(existNextImage.length <= 0 || existNextImage == null || existNextImage == 'undefined'){
	 		nextImage = 1;
	 	}

	 	$("#"+imageNumber).hide();
	 	$("#"+nextImage).show();
	 	imageNumber = nextImage;

	 	setTimeout("changeImage()", imageSpeed);

	 }

</script>