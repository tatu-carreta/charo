<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href="favicon.ico" rel="shortcut icon">
	<title>Charo Perelli - Objetos en hierro, cerámica y cemento</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<meta property="og:image" content="imagenes/img-face.jpg" />
	<!-- M O D E R N I Z R -->
	<script src="js/modernizr-2.5.3.js"></script>
	
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body class="home">
	<header>
		<nav class="navbar navbar-default center-block" role="navigation">
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
						<li class="active dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						Objetos <b class="caret"></b>
        					</a>
							<ul class="dropdown-menu">
								<li><a href="">Objetos de jardín</a></li>
								<li><a href="">Cemento</a></li>
								<li><a href="">Cerámica</a></li>
								<li><a href="">Vidrio</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						Exposiciones <b class="caret"></b>
        					</a>
							<ul class="dropdown-menu">
								<li><a href="">La vidriera</a></li>
								<li><a href="">Habitantes del jardín</a></li>
								<li><a href="">Otras exposiciones</a></li>
							</ul>
						</li>
						<li><a href="">Cursos</a></li>
						<li><a href="">Ventas</a></li>
						<li><a href="">El taller</a></li>
						<li><a href="">Contacto</a></li>
					</ul>
				</div>
				<a class="facebook" href="http://www.facebook.com/charo.perellitaller" target="_blank">Charo Perelli en Facebook</a>
			</div><!--cierra container-->
		</nav>
		<div class="logo">
			<img src="images/firma-home.png" alt="">
			<h1>Hierro, cerámica, cemento y vidrio</h1>
		</div>
	</header>

	<div id="myCarousel" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill imagenslider1"></div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill imagenslider2"></div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill imagenslider3"></div>
            </div>
        </div>
    </div>
	
	<p><a class="laura" href="http://www.laurachuburu.com.ar" target="_blank">Diseñado por www.laurachuburu.com.ar</a></p>

	<!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 2000 //changes the speed
            });
        </script>

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