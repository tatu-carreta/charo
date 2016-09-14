<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Taller de Charo Perelli - Objetos en hierro, cemento, cerámica y vidrio.</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Venta de objetos de jardín y decoración. Cursos de cerámica, mosaico y cemento en Gonnet, La Plata.">
	<meta property="og:image" content="images/img-face.jpg">
	<link href="favicon.ico" rel="shortcut icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700" rel="stylesheet">
	<script src="js/modernizr-2.5.3.js"></script>	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body class="interiores">
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse"
				            data-target=".navbar-ex1-collapse">
				    	<span class="sr-only">Desplegar navegación</span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    	<span class="icon-bar"></span>
				    </button>
				    <!-- <a class="navbar-brand" href="#">Logotipo</a> -->
				</div>

				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						Objetos <b class="caret"></b>
        					</a>
							<ul class="dropdown-menu">
								<li><a href="catalogo.php">Objetos de jardín</a></li>
								<li><a href="catalogo.php">Cemento</a></li>
								<li><a href="catalogo.php">Cerámica</a></li>
								<li><a href="catalogo.php">Vidrio</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						Exposiciones <b class="caret"></b>
        					</a>
							<ul class="dropdown-menu">
								<li><a href="catalogo.php">La vidriera</a></li>
								<li><a href="catalogo.php">Habitantes del jardín</a></li>
								<li><a href="catalogo.php">Otras exposiciones</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						Cursos <b class="caret"></b>
        					</a>
							<ul class="dropdown-menu">
								<li><a href="cursos.php">Los cursos</a></li>
								<li><a href="catalogo.php">Trabajos de alumnos</a></li>
							</ul>
						</li>
						<li><a href="ventas.php">Ventas</a></li>
						<li><a href="taller.php">El taller</a></li>
						<li><a href="contacto.php">Contacto</a></li>
					</ul>
				</div>
				<a class="facebook" href="http://www.facebook.com/charo.perellitaller" target="_blank">Charo Perelli en Facebook</a>
			</div><!--cierra container-->
		</nav>
		<div class="logo">
			<a href="index.php"><img src="images/firma-home.png" alt="Charo Perelli"></a>
			<h1>Hierro, cemento, cerámica y vidrio</h1>
		</div>
	</header>

	<section>
		<div class="container">
			<h2>Cursos</h2>
			<div class="col-izquierda">
				<h3>Cursos de Cerámica y Mosaico</h3>
					<p>Los cursos anuales de cerámica y mosaico comienzan en Marzo y terminan a mediados de Diciembre. (Inscripción abierta todo el año)</p>
				<h3>Cursos personalizados. (Especiales para gente que viene por poco tiempo a la ciudad)</h3>
					<p>Son cursos intensivos que se planifican respondiendo a las necesidades específicas del alumno, con programas cortos y días acotados. (Inscripción abierta todo el año)</p>
				<h3>Técnicas sobre Cemento</h3>
					<p>Dos veces al año se realizan jornadas intensivas de capacitación sobre Técnicas de Cemento.</p>
					<p>No es necesario tener experiencia previa.<br>
					Las actualizaciones sobre los diferentes cursos se encuentran  en la página de Facebook.</p>
			</div>
			<div class="col-derecha">
				<h3>Consultá por los cursos:</h3>
				<form action="envia.php" method="post"> 			  
					<label>Nombre y Apellido<br>
						<input name="nombre" type="text" class="campo-form" id="realname" required /></label><br>
					<label>email<br>
						<input name="email" type="email" class="campo-form" id="email" required /></label><br>
					<label>Teléfono<br>
						<input name="telefono" type="text" class="campo-form" id="telefono" required /></label><br>
					<label>Consulta:<br><textarea name="consulta" cols="45" rows="5" class="consulta-form" id="consulta"></textarea></label><br>
					
					<label><input type="submit" id="button" value="Enviar"></label>
				</form>
			</div>
		</div><!--cierra container-->
	</section>
	<footer>
		<p class="firma">
			Copyright © Charo Perelli 2016 - Desarrollo web: <a href="http://www.laurachuburu.com.ar/" target="_blank">www.laurachuburu.com.ar</a>
		</p>
	</footer>

	<!--google analytics-->
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-4834851-1");
		pageTracker._initData();
		pageTracker._trackPageview();
		</script>
	<!--fin google analytics-->
</body>
</html>