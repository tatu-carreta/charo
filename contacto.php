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
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
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
			<h2>Contacto</h2>
			<div class="col-izquierda">
				<p>Solicitar entrevista por teléfono  o por mail<br />
				(54) 221 471-2350 | contacto@charoperelli.com.ar <br />
				Gonnet - Buenos Aires - Argentina</p>
			</div>
			<div class="col-derecha">
				<form action="envia.php" method="post"> 			  
					<label class="form-columnas">Nombre y Apellido<br>
						<input name="nombre" type="text" class="campo-form" id="realname" required /></label><br>
					<label class="form-columnas">email<br>
						<input name="email" type="email" class="campo-form" id="email" required /></label><br>
					<label class="form-columnas">Teléfono<br>
						<input name="telefono" type="text" class="campo-form" id="telefono" required /></label><br>
					<label>Consulta:<br><textarea name="consulta" cols="45" rows="5" class="form-consulta" id="consulta"></textarea></label><br>
					
					<label><input type="submit" id="button" value="Enviar"></label>
				</form>
			</div>
		</div><!--cierra container-->
	</section>

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