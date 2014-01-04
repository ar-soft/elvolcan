<!doctype html>
<!--[if IE 7]>    <html class="no-js lt-ie10 lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie10 lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10 ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	
	<title>Hotel El Volcán</title>
	<script src="/web-app/js/css-browser-selector.js"></script>
	<link rel="stylesheet" type="text/css" href="/web-app/css/styles.css">
</head>
<body>
	<section class="content<?php if(!$axn): echo " home"; else: echo " $axn";endif;?>">
		<header>
			<div>
				<img id="logo" src="web-app/img/logo.png" alt="El Volcán" height="298" width="250">
			</div>
			<nav class="menu">
				<ul>
					<li><a href="/">inicio</a></li>
					<li><a href="?axn=imagenes">imágenes</a></li>
					<li><a href="?axn=ubicacion">ubicación</a></li>
					<li><a href="?axn=habitaciones">servicios</a>
						<ul>
							<li><a href="?axn=habitaciones">Habitaciones</a></li>
							<li><a href="?axn=restaurant">Restaurant</a></li>
							<li><a href="?axn=spa">Spa</a></li>
							<li><a href="?axn=salon">Salón de Eventos</a></li>
							<li><a href="?axn=espacios">Espacios recreativos</a></li>
						</ul>
					</li>
					<li><a href="?axn=tarifas">tarifas</a></li>
					<li><a href="?axn=reservas">reservas</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<hr>
			<?php require_once($body_path);?>
			<?php if($axn): echo "<hr>";endif;?>
		</section>
		<?php 
			if(!$axn): 
				require_once(VIEW_PATH . "/_homeFooter.php");
			else: 
				require_once(VIEW_PATH . "/_defaultFooter.php");
			endif;
		?>
	</section>	
</body>
</html>