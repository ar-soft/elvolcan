<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<title>El Volcán Hotel Serrano</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
</head>
<body>
	<section id="content">
		<header>
			<div>
				<img id="logo" src="web-app/img/logo.png" alt="El Volcán" height="298" width="250">
			</div>
			<nav>
				<ul>
					<li><a href="#home">inicio</a></li>
					<li><a href="#imagenes">imágenes</a></li>
					<li><a href="#ubicacion">ubicación</a></li>
					<li><a href="#tarifas">tarifas</a></li>
					<li><a href="#inicio">reservas</a></li>
				</ul>
			</nav>
		</header>
		<article id="home">
			<hr/>
			<div class="orange-column"></div>
			<iframe height="580px" width="79%" frameborder="0" scrolling="no" src="mapa.html" style="float:right;"></iframe>
		</section>
	</section>	
</body>
<script type="text/javascript">

	$( document ).ready(function() {
		$("#logo").css("margin-left","2%");
	});

</script>
</html>
