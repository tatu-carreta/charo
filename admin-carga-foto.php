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
	<!-- Fancybox -->
	<script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
</head>

<body class="interiores">
	<div class="nav-admin">
		<span class="btn-texto usuario">Charo</span>
		<a href="" class="btn-texto salir">Salir</a>
	</div>
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
			<h2>Objetos de jardín</h2>
			<a href="" class="btn-texto volver">Volver a catálogo</a>

			<h3>Agregar (o editar) foto</h3>
			<form class="form-admin">
				<label>
					<h4><span>1</span>Ingrese un código para esta foto</h4>
					<p class="info">Se muestra debajo de la foto. No puede haber dos fotos con igual código.</p>
					<input type="text" class="campo-form">
				</label>
				<label>
					<h4><span>2</span>Suba una foto desde su computadora</h4>
					<p class="info">La imagen original puede ser vertical u horizontal pero no debe exceder los 500kb de peso.</p>
					<input type="file" class="campo-form">
				</label>
				<label>
					<h4><span>3</span>Recorte la foto para mostrar una miniatura en el catálogo</h4>
					<p class="info">Seleccione un area de recorte para la miniatura. La foto ampliada mantendrá el formato original.</p>
					<div class="preview"></div>
					<div class="recorte"></div>
				</label>
				<label>
					<h4><span>4</span>Ingrese un epígrafe para esta foto (opcional)</h4>
					<p class="info">El epígrafe se muestra debajo de la foto ampliada.</p>
					<input type="text" class="campo-form">
				</label>
				<div class="botones-guardar">
					<input type="submit" id="" value="Publicar" class="btn btn-azul">
					<input type="submit" id="" value="Cancelar" class="btn btn-gris">
				</div>
			</form>
				
			
		</div><!--cierra container-->
	</section>
	
	<footer>
		<p class="firma">
			Copyright © Charo Perelli 2016 - Desarrollo web: <a href="http://www.laurachuburu.com.ar/" target="_blank">www.laurachuburu.com.ar</a>
		</p>
	</footer>
</body>
</html>