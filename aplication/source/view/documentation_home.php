<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP-->
    <link type="text/css" href="<?php echo base();?>resources/css/bootstrap.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="<?php echo base();?>resources/css/styledoc.css" rel="stylesheet" media="screen" />

    <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" href="<?php echo base();?>resources/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base();?>resources/images/favicon.ico" type="image/x-icon">

    <?php i18n('languaje', LOCALE_URI); ?>
    <title>ENOLA - Framework PHP - Documentation</title>
</head>

<body class="body-doc">
    <div class="nav-doc">
        <div class="nav-title">
            <h2><a href="<?php echo base_locale(); ?>">Enola PHP</a></h2>
            <br/>
        </div>
        <div>
            <?php Tags::navigation_menu('pills', TRUE, TRUE);?>
                <?php Tags::nav_item('Introducción', base_locale() . 'manual/introduction');?>                
                <?php Tags::nav_item('Tutorial', base_locale() . 'manual/tutorial');?>
                <?php Tags::nav_item('Documentación', base_locale() . 'manual/documentation');?>
            <?php Tags::end_navigation_menu();?>
        </div>
    </div>
    <div class="documentation">
        <?php Tags::breadcrumb(); ?>
            <?php Tags::nav_item("Manual de Usuario", base_locale() . 'manual');?>
        <?php Tags::end_breadcrumb(); ?>
        
        <div class="container-doc">
            <h2>Manual de Usuario de Enola PHP</h2>
            
            <h4>Introducción</h4>
            <ul>
                <?php foreach ($docs['introduccion'] as $doc_intro) {?>
                    <li><a href="<?php echo base_locale() . 'manual/introduction/' .$doc_intro->nombreUrl ?>"><?php echo $doc_intro->titulo ?></a></li>
                <?php }?>
            </ul>
            
            <h4>Tutorial</h4>
            <ul>
                <?php foreach ($docs['tutorial'] as $doc_intro) {?>
                    <li><a href="<?php echo base_locale() . 'manual/tutorial/' .$doc_intro->nombreUrl ?>"><?php echo $doc_intro->titulo ?></a></li>
                <?php }?>
            </ul>
            
            <h4>Documentación</h4>
            <ul>
                <?php foreach ($docs['documentacion'] as $doc_intro) {?>
                    <li><a href="<?php echo base_locale() . 'manual/documentation/' .$doc_intro->nombreUrl ?>"><?php echo $doc_intro->titulo ?></a></li>
                <?php }?>
            </ul>
            
            <hr class="divider"></hr>

            <footer class="footer">
                <p class="text-muted">Code and Maintenance via <a href="https://github.com/edunola13/enolaphp" target="blank">GitHub</a></p>
                <p class="text-muted">Currently v1.0 - Code licensed under <a href="https://github.com/edunola13/enolaphp/blob/master/LICENSE" target="blank">MIT</a></p>
                <p class="text-muted">© Copyright 2014 | ENOLA PHP. Developed By <a href="http://www.edunola.com.ar" target="blank">edunola.com.ar</a></p>
            </footer>
        </div>
    </div>
    
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base();?>resources/js/bootstrap.min.js'></script>
</body>