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
                <?php Tags::nav_item('Introducción', base_locale() . 'manual/introduction', $docSection['sec'] == "introduction" ? "active" : NULL);?>                
                <?php if($docSection['sec'] == "introduction") include 'sections/sub_nav_doc.php';?>
                <?php Tags::nav_item('Tutorial', base_locale() . 'manual/tutorial', $docSection['sec'] == "tutorial" ? "active" : NULL);?>
                <?php if($docSection['sec'] == "tutorial") include 'sections/sub_nav_doc.php';?>
                <?php Tags::nav_item('Documentación', base_locale() . 'manual/documentation', $docSection['sec'] == "documentation" ? "active" : NULL);?>
                <?php if($docSection['sec'] == "documentation") include 'sections/sub_nav_doc.php';?>
            <?php Tags::end_navigation_menu();?>
        </div>
    </div>
    <div class="documentation">
        <?php Tags::breadcrumb(); ?>
            <?php Tags::nav_item("Manual de Usuario", base_locale() . 'manual');?>
            <?php Tags::nav_item($docSection['title'], base_locale() . 'manual/'.$docSection['sec'], $doc == NULL ? 'active':NULL);?>
            <?php if($doc != NULL)Tags::nav_item($doc->titulo, base_locale() . 'manual/'.$docSection['sec']. '/' .$doc->nombreUrl, 'active');?>
        <?php Tags::end_breadcrumb(); ?>
        
        <div class="container-doc">
            <?php if($doc != NULl){?>
                <h3><?php echo $doc->titulo; ?></h3>
                <?php echo $doc->contenido; ?>
            <?php }else{?>
                <h3><?php echo $docSection['title']?></h3>
                <ul>
                    <?php foreach ($navs as $nav) {?>
                        <li><a href="<?php echo base_locale() . 'manual/tutorial/' .$nav->nombreUrl ?>"><?php echo $nav->titulo ?></a></li>
                    <?php }?>
                </ul>
            <?php }?>
                
            <?php Tags::paginador_simple('disabled', '', 'Anterior', 'active', '', 'Siguiente'); ?>
            
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