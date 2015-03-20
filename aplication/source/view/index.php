<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ENOLA - Framework PHP</title>
		
    <!-- BOOTSTRAP-->
    <link type="text/css" href="<?php echo base();?>resources/css/bootstrap.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="<?php echo base();?>resources/css/style.css" rel="stylesheet" media="screen" />

    <link type="text/css" href="<?php echo base();?>resources/css/animate.css" rel="stylesheet" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
	
    <link rel="shortcut icon" href="<?php echo base();?>resources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base();?>resources/images/favicon.ico" type="image/x-icon">
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
                <img alt="Logo-color" src="<?php echo base();?>resources/images/logo-color.png">
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
            <img src="<?php echo base();?>resources/images/logo-negro.png" class="img-responsive animated bounce" alt="Logo-negro" style="margin-left:auto;margin-right:auto;">
            <h1>ENOLA - Framework PHP</h1>
            <h1><small>Simple. Liviano. Rápido.</small></h1>
            <br>
            <a href="" data-toggle="tooltip" data-placement="top" title="Descargar v1.0">
                <img class="img-circle" src="<?php echo base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
            </a>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <div class="col-md-4 animated fadeInUp wow">
                <h2>Qué es</h2>
		<p>EnolaPHP es un Framework PHP principalmente para el desarrollo de aplicaciones web el cual es 
                    muy liviano, simple de instalar y configurar, muy rapido y facil de aprender. El mismo se encuentra
                    separado en módulos los cuales ayudan a la reutilizacion de codigo y aceleran el proceso de 
                    desarrollo y evolución del framework.<br>
                    EnolaPHP provee varias características que le ayudarán a mejorar su producción en el desarrollo 
                    de aplicaciones web.
                </p>
            </div>
            <div class="col-md-4 animated fadeInUp wow">
		<h2>Por qué</h2>
		<p>// Es muy liviano y muy rápido.<br>
		// Configuración rápida y sencilla.<br>
		// Modulo de ruteo dinámico.<br>
		// Modulo de filtros extremadamente útil.<br>
		// Modulo de componentes para modularizar comportmaiento repetido.<br>
		// Fácil Integración con distintos frameworks o librerías PHP.<br>
                // Conexion a la BD - Simple DAO/ActiveRecord.<br>
                // Tags - UI Services
                </p>
            </div>
            <div class="col-md-4 animated fadeInUp wow">
		<h2>Por qué nació</h2>
		<p>Contar en PHP con un framework que nos provea de una arquitectura que nos ayude a programar aplicaciones 
                    web con características similares a las que provee J2EE y sobre esta arquitectura poder agregar todas las
                    librerías, framework o dependencias que el programador necesite.<br>
                    Las características que provee J2EE que se proveen en EnolaPHP son: simples archivos de configuración,
                    controladores y filtros que mapean solicitudes HTTP, simple inclusión de librerías, etc.
                </p>
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
		<p>Una mirada mas profunda al framework. Como funciona internamente Enola PHP.</p>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div>
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <a href="" data-toggle="tooltip" data-placement="top" title="Descargar v1.0">
            <img class="img-circle" src="<?php echo real_base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
            </a>
	</div>
    </div>
	
    <footer class="footer">
        <div class="container">
            <p class="text-muted">Code and Maintenance via <a href="https://github.com/edunola13/enolaphp" target="blank">GitHub</a></p>
            <p class="text-muted">Currently v1.0 - Code licensed under <a href="https://github.com/edunola13/enolaphp/blob/master/LICENSE" target="blank">MIT</a></p>
            <p class="text-muted">© Copyright 2014 | ENOLA PHP. Developed By <a href="http://www.edunola.com.ar" target="blank">edunola.com.ar</a></p>
	</div>
    </footer>
	
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base();?>resources/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='<?php echo base();?>resources/js/wow.js'></script>
    <script>
	$(function () {
            $('[data-toggle="tooltip"]').tooltip()
	})
	new WOW().init();
    </script>
	
</body>