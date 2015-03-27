<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP</title>
</head>
<body>
    <?php include 'sections/nav.php'; ?>
	
    <div class="jumbotron">
        <div class="container">
            <img src="<?php echo base();?>resources/images/logo-negro.png" class="img-responsive animated bounce" alt="Logo-negro" style="margin-left:auto;margin-right:auto;">
            <h1>ENOLA - Framework PHP</h1>
            <h1><small><?php echo i18n_value('sub-title'); ?></small></h1>
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
	
    <?php include 'sections/footer.php'?>
    <script type='text/javascript' src='<?php echo base();?>resources/js/wow.js'></script>
    <script>
	$(function () {
            $('[data-toggle="tooltip"]').tooltip()
	})
	new WOW().init();
    </script>
	
</body>