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
            <h2 class="pull-left">Contribuye con Enola PHP</h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <?php Tags::paragraph('center', 'lead');?>
                Para que Enola PHP mejore necesitamos de su ayuda, sin importar si usted es o no un experto
            <?php Tags::end_paragraph();?>
            <legend></legend>
            <div class="col-md-4">
                <h3>Corre la Voz</h3>
                <?php Tags::paragraph('center');?>
                    Si te parecio interesante el proyecto y te ayudo a crear mejores aplicaciones, tu voz es muy importante
                    para nosotros. Difundelo. Crea una entrada en tu blog, comportale con tus amigos por facebook, etc.
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-4">
                <h3>Documentemos</h3>
                <?php Tags::paragraph('center');?>
                    Para que un proyecto crezca se necesita buena documentación. Enola PHP cuenta con su propia documentacion
                    pero se puede mejorar. Puede agregar la documentacion en <a href="https://github.com/edunola13/enolaphp/wiki">GitHub</a>
                    o en su propio blog o pagina web.
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-4">
                <h3>Diseñemos</h3>
                <?php Tags::paragraph('center');?>
                    El proyecto se encuentra en sus primeras versiones tanto de codigo, de sitio web, documentacion, etc. Si usted
                    tiene consejos de diseño o similares no dude en contactarse con nosotros.
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-12">
                <h3>Testers - Reporte de Errores</h3>
                <?php Tags::paragraph('center');?>
                    Enola PHP es un proyecto que recien comienza y cuenta con la participacion de pocas personas actualmente, 
                    por lo tanto necesitamos de su ayuda para encontrar y solucionar problemas.<br/>
                    Si usted encuentra un Bug puede reportar el mismo en <a href="https://github.com/edunola13/enolaphp/issues">GitHub</a>. Si no esta
                    seguro de que sea un Bug puede consultarnos por privado y le responderemos lo antes posible. Mediante GitHub usted tambien puede 
                    ayudarnos a resolver los distintos Bugs que se vayan reportando.
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-12">
                <h3>Programmers - Architects</h3>
                <?php Tags::paragraph('center');?>
                    Si usted es un amante de la programacion y del diseño de desarrollo de software puede ayudarnos a mejorar 
                    la arquitectura del framework como asi tambien opinar sobre como se encuentra implementado el mismo para en una
                    proxima version tenerlo en cuenta y mejorar.<br/>
                    Si se le ocurre alguna nueva funcionalidad que le gustaria que proveyera el framework no dude y comunicanolos.<br/>
                    Ya sea tanto para mejorar la arquitectura y la codificacion del framework como porque desea una nueva funcionalidad
                    comunicanolos mediante <a href="https://github.com/edunola13/enolaphp/pulls">GitHub</a>
                <?php Tags::end_paragraph();?>
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