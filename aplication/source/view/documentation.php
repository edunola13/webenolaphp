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
    <meta name="description" content="<?php echo i18n_value("documentation-descrip")?>">
</head>

<body class="container body-doc">
    <div class="row">
        <div class="nav-doc col-md-3">
            <div class="nav-title">
                <a class="col-xs-12 navbar-brand" href="<?php echo base_locale()?>">
                    <img alt="Enola PHP" src="<?php echo base();?>resources/images/logo-color.png">
                </a>
            </div>
            <div>                
                <?php Tags::navigation_menu('pills', TRUE, TRUE);?>
                    <?php Tags::nav_item(i18n_value('introduction-man'), base_locale() . 'manual/introduction', $docSection == "introduction" ? "active" : NULL);?>                
                    <?php if($docSection == "introduction") include 'sections/sub_nav_doc.php';?>
                    <?php Tags::nav_item(i18n_value('tutorial-man'), base_locale() . 'manual/tutorial', $docSection == "tutorial" ? "active" : NULL);?>
                    <?php if($docSection == "tutorial") include 'sections/sub_nav_doc.php';?>
                    <?php Tags::nav_item(i18n_value('database-man'), base_locale() . 'manual/database', $docSection == "database" ? "active" : NULL);?>
                    <?php if($docSection == "database") include 'sections/sub_nav_doc.php';?>
                    <?php Tags::nav_item(i18n_value('libraries-man'), base_locale() . 'manual/libraries', $docSection == "libraries" ? "active" : NULL);?>
                    <?php if($docSection == "libraries") include 'sections/sub_nav_doc.php';?>
                    <?php Tags::nav_item(i18n_value('documentation-man'), base_locale() . 'manual/documentation', $docSection == "documentation" ? "active" : NULL);?>
                    <?php if($docSection == "documentation") include 'sections/sub_nav_doc.php';?>
                <?php Tags::end_navigation_menu();?>
            </div>
        </div>
        <div class="documentation col-md-9">
            <?php Tags::breadcrumb(); ?>
                <?php Tags::nav_item(i18n_value('breadcrumb-man'), base_locale() . 'manual');?>
                <?php Tags::nav_item(i18n_value($docSection . '-man'), base_locale() . 'manual/'.$docSection, $doc == NULL ? 'active':NULL);?>
                <?php if($doc != NULL)Tags::nav_item($doc->titulo, base_locale() . 'manual/'.$docSection. '/' .$doc->nombreUrl, 'active');?>
                <?php Tags::nav_item_drop_down('Languaje', TRUE);?>
                    <?php Tags::nav_item('English', BASEURL . 'en/manual', LOCALE == 'en' ? "active" : NULL);?>		
                    <?php Tags::nav_item('Español', BASEURL . 'manual', LOCALE == "es" ? "active" : NULL);?>
                <?php Tags::end_nav_item_drop_down();?>
            <?php Tags::end_breadcrumb(); ?>

            <div class="container-doc">
                <?php if($doc != NULl){?>
                    <h3><?php echo $doc->titulo; ?></h3>
                    <?php echo $doc->contenido; ?>
                <?php }else{?>
                    <h3><?php echo i18n_value($docSection . '-man')?></h3>
                    <ul>
                        <?php foreach ($navs as $nav) {?>
                            <li><a href="<?php echo base_locale() . 'manual/' . $docSection . '/' .$nav->nombreUrl ?>"><?php echo $nav->titulo ?></a></li>
                        <?php }?>
                    </ul>
                <?php }?>

                <?php Tags::paginador_simple($previousDoc != NULL ? 'active':'disabled', $previousDoc != NULL ? $previousDoc->nombreUrl:'', i18n_value('anterior-man'), $nextDoc != NULL ? 'active':'disabled', $nextDoc != NULL ? $nextDoc->nombreUrl:'', i18n_value('siguiente-man')); ?>

                <hr class="divider"></hr>

                <footer class="footer">
                    <p class="text-muted">Code and Maintenance via <a href="https://github.com/edunola13/enolaphp" target="blank">GitHub</a></p>
                    <p class="text-muted">Currently v1.0 - Code licensed under <a href="https://github.com/edunola13/enolaphp/blob/master/LICENSE" target="blank">MIT</a></p>
                    <p class="text-muted">© Copyright 2014 | ENOLA PHP. Developed By <a href="http://www.edunola.com.ar" target="blank">edunola.com.ar</a></p>
                </footer>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base();?>resources/js/bootstrap.min.js'></script>
</body>