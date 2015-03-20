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
            <h2 class="pull-left">Contacta al Equipo de Enola PHP</h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <?php Tags::form('form-contact', 'POST', '', NULL, 'Contact Us'); ?>
                
                <?php Tags::end_form();?>
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
    <script type='text/javascript' src='<?php echo base();?>resources/js/wow.js'></script>
    <script>
	$(function () {
            $('[data-toggle="tooltip"]').tooltip()
	})
	new WOW().init();
    </script>
	
</body>