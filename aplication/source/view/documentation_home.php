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
                    <?php Tags::nav_item(i18n_value('introduction-man'), base_locale() . 'manual/introduction');?>                
                    <?php Tags::nav_item(i18n_value('tutorial-man'), base_locale() . 'manual/tutorial');?>
                    <?php Tags::nav_item(i18n_value('database-man'), base_locale() . 'manual/database');?>
                    <?php Tags::nav_item(i18n_value('libraries-man'), base_locale() . 'manual/libraries');?>
                    <?php Tags::nav_item(i18n_value('documentation-man'), base_locale() . 'manual/documentation');?>
                <?php Tags::end_navigation_menu();?>
            </div>
        </div>
        <div class="col-md-9 documentation">
            <?php Tags::breadcrumb(); ?>
                <?php Tags::nav_item(i18n_value('breadcrumb-man'), base_locale() . 'manual');?>
                <?php Tags::nav_item_drop_down('Languaje', TRUE);?>
                    <?php Tags::nav_item('English', BASEURL . 'en/' . URIAPP, LOCALE == 'en' ? "active" : NULL);?>		
                    <?php Tags::nav_item('Español', BASEURL . URIAPP, LOCALE == "es" ? "active" : NULL);?>
                <?php Tags::end_nav_item_drop_down();?>
            <?php Tags::end_breadcrumb(); ?>

            <div class="container-doc">
                <h2><?php echo i18n_value('title-manual'); ?></h2>
                
                <?php foreach ($docs as $key => $docs_sub) { ?>
                    <h4><?php echo i18n_value($key . '-man'); ?></h4>
                    <ul>
                    <?php foreach ($docs_sub as $doc_intro) {?>
                        <li><span class="glyphicon glyphicon-console" aria-hidden="true"></span> <a href="<?php echo base_locale() . 'manual/' . $key . '/' .$doc_intro->nombreUrl ?>"><?php echo $doc_intro->titulo ?></a></li>
                    <?php }?>
                </ul>                    
                <?php }?>

                <hr class="divider"></hr>

                <footer class="footer">
                    <p class="text-muted">Code and Maintenance via <a href="https://github.com/edunola13/enolaphp" target="blank">GitHub</a></p>
                    <p class="text-muted">Currently v1.0 - Code licensed under <a href="https://github.com/edunola13/enolaphp/blob/master/LICENSE" target="blank">MIT</a></p>
                    <p class="text-muted">© Copyright 2014 | ENOLA PHP. Developed By <a href="http://www.edunola.com.ar" target="blank">edunola.com.ar</a></p>
                </footer>
            </div>
            <div class="container-doc">

            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base();?>resources/js/bootstrap.min.js'></script>
</body>