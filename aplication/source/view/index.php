<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ENOLA - Framework PHP</title>
		
	<!-- BOOTSTRAP-->
    <link type="text/css" href="<?php echo real_base();?>resources/css/bootstrap.css" rel="stylesheet" media="screen" />
	<link type="text/css" href="<?php echo real_base();?>resources/css/style.css" rel="stylesheet" media="screen" />

	<link type="text/css" href="<?php echo real_base();?>resources/css/animate.css" rel="stylesheet" media="screen" />

	<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="<?php echo real_base();?>resources/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo real_base();?>resources/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo real_base();?>">
                <img alt="Logo-color" src="<?php echo real_base();?>resources/images/logo-color.png">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
		<li><a href="#about">Documentación</a></li>
		<li><a href="#contact">Descargar</a></li>
		<li><a href="#contact">Contribuir</a></li>
		<li><a href="#contact">Contacto</a></li>		
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar...">
                </div>
            </form>
	</div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
    <div class="jumbotron">
        <div class="container">
            <img src="<?php echo real_base();?>resources/images/logo-negro.png" class="img-responsive animated bounce" alt="Logo-negro" style="margin-left:auto;margin-right:auto;">
            <h1>ENOLA - Framework PHP</h1>
            <h1><small>Simple. Liviano. Rápido.</small></h1>
            <h2>Si sabe PHP, sabe usar Enola.</h2>
            <br>
            <a href="" data-toggle="tooltip" data-placement="top" title="Descargar">
                <img class="img-circle" src="<?php echo real_base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
            </a>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <div class="col-md-4 animated fadeInUp wow">
                <h2>Qué es</h2>
		<p>Enola PHP es un Framework PHP que se caracteriza por su rápida configuración y fácil utilización.<br>
		Presta todas las herramientas necesarias para que usted pueda realizar desde una aplicación simple a una muy compleja de una manera rápida, sencilla y reutilizando código.<br>
		Algunas de las herramientas con las que cuenta el framework son:<br>
		// Filtros<br>
		// Controladores<br>
		// Simples Archivos de Configuración<br>
		// Fácil Utilización de Librerías<br>
		// Conexión a la BD</p>
            </div>
            <div class="col-md-4 animated fadeInUp wow">
		<h2>Por qué</h2>
		<p>// Es muy liviano a diferencia de otros Frameworks PHP.<br>
		// Al ser liviano es muy rápido.<br>
		// Configuración rápida y sencilla.<br>
		// Modulo de ruteo dinámico.<br>
		// Modulo de filtros extremadamente útil.<br>
		// Componente modularizable para todas las paginas.<br>
		// Fácil Integración con distintos frameworks o librerías PHP.</p>
            </div>
            <div class="col-md-4 animated fadeInUp wow">
		<h2>J2EE en PHP</h2>
		<p>La idea principal de este framework es tener una estructura parecida a la de J2EE en PHP para programar en ambos lenguajes con una misma mentalidad.<br>
		Cuando uno realiza una aplicación web en Java utiliza filtros, servlets, archivos de configuración (o anotaciones). También suele utilizar frameworks como struts para MVC. Nosotros intentamos eso, para eso proveemos filtros, controladores (que responde a métodos HTTP como los servlets), simples archivos de configuración.<br>
		También estamos en el desarrollo de un framework MVC que funciones arriba de nuestros controladores.<br>
		Además de otras herramientas que proveen todos los frameworks PHP, creo que esto explica nuestra idea principal de lo que es Enola Framework PHP.</p>
            </div>
	</div>
	
	<hr class="divider"></hr>
	<div class="row">
            <div class="col-md-4 col-centered animated fadeInRight wow">
                <a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Introducci%C3%B3n"  target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/list.png" alt="Introducción" style="width: 140px; height: 140px;">
		</a>
		<h2>Introducción</h2>
		<p>Una mirada rápida al framework y sus componentes. Cómo funciona Enola PHP.</p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Tutorial" target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/tick.png" alt="Tutorial" style="width: 140px; height: 140px;">
                </a>
		<h2>Tutorial</h2>
		<p>Fácil y rápido. Realiza el tutorial del Framework Enola PHP aquí.</p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Documentaci%C3%B3n" target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/docs.png" alt="Introducción" style="width: 140px; height: 140px;">
                </a>
		<h2>Docs</h2>
		<p>Ver toda la documentación, incluyendo la introducción a las distintas versiones.</p>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div>
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <a href="" data-toggle="tooltip" data-placement="top" title="Descargar">
            <img class="img-circle" src="<?php echo real_base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
            </a>
	</div>
    </div>
	
    <footer class="footer">
        <div class="container">
            <p class="text-muted">© Copyright 2014 | ENOLA PHP. Desarrolado por <a href="http://www.edunola.com.ar" target="blank">edunola.com.ar</a> y <a href="http://www.webesnola.appspot.com" target="blank">webesnola.appspot.com</a></p>
	</div>
    </footer>
	
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo real_base();?>resources/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<?php echo real_base();?>resources/js/wow.js'></script>
    <script>
	$(function () {
            $('[data-toggle="tooltip"]').tooltip()
	})
	new WOW().init();
    </script>
	
</body>