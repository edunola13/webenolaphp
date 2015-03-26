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
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <h2 class="pull-left">Descarga Enola PHP</h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <?php Tags::paragraph('center', 'lead');?>
                Descargue la versión que mas se ajuste a sus necesidades. La version actual de Enola PHP es v1.0
            <?php Tags::end_paragraph();?>
            <legend></legend>
            <div class="jumbotron jumbotron-small">
                <div class="container">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Descargar v1.0">
                    <img class="img-circle" src="<?php echo real_base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <h3>GitHub</h3>
                <?php Tags::paragraph('center');?>
                    Enola PHP se desarrolla usando GitHub como su plataforma de desarrollo colaborativa. En esta se encuentra
                    todo el repositorio de codigo del proyecto.<br/>
                    Mediante <a href="https://github.com/edunola13/enolaphp/releases">GitHub</a> usted podra descargar las distintas versiones que se fueron creando asi como tambien descargar
                    la version actual que se esta desarrollando.<br/>
                    <br/>
                    <?php Tags::link('', "https://github.com/edunola13/enolaphp/releases", "Download v1.0 from GitHub", TRUE, 'warning');?>
                    <?php Tags::link('', "https://github.com/edunola13/enolaphp/releases", "All Releases from GitHub", TRUE, 'warning');?>
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-12">
                <h3>SourceForce</h3>
                <?php Tags::paragraph('center');?>
                    Cuando una version de Enola PHP se ha terminado de desarrollorar el codigo fuente es subido a <a href="http://sourceforge.net/projects/enolaphp01/">SourceForce</a> 
                    donde tambien desde aqui se pueden descargar las distintas versiones del framework.<br/>
                    <br/>
                    <?php Tags::link('', "http://sourceforge.net/projects/enolaphp01/", "Download v1.0 from SourceForce", TRUE, 'warning');?>
                    <?php Tags::link('', "http://sourceforge.net/projects/enolaphp01/files/", "All Releases from SourceForce", TRUE, 'warning');?>
                <?php Tags::end_paragraph();?>
            </div> 
	</div>
        
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
            </div>
        </div>
    </div>
    
    <hr class="divider"></hr>
	
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
</body>