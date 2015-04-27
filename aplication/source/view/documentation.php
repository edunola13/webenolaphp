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

<body class="container body-doc">
    <div class="row">
        <div class="nav-doc col-md-3">
            <div class="nav-title">
                <a class="navbar-brand" href="<?php echo real_base();?>">
                    <img alt="Logo-color" src="<?php echo base();?>resources/images/logo-color.png">
                </a>
            </div>
            <div>
                <?php Tags::navigation_menu('pills', TRUE, TRUE);?>
                    <?php Tags::nav_item(i18n_value('introduccion-man'), base_locale() . 'manual/introduction', $docSection['sec'] == "introduction" ? "active" : NULL);?>                
                    <?php if($docSection['sec'] == "introduction") include 'sections/sub_nav_doc.php';?>
                    <?php Tags::nav_item(i18n_value('tutorial-man'), base_locale() . 'manual/tutorial', $docSection['sec'] == "tutorial" ? "active" : NULL);?>
                    <?php if($docSection['sec'] == "tutorial") include 'sections/sub_nav_doc.php';?>
                    <?php Tags::nav_item(i18n_value('documentacion-man'), base_locale() . 'manual/documentation', $docSection['sec'] == "documentation" ? "active" : NULL);?>
                    <?php if($docSection['sec'] == "documentation") include 'sections/sub_nav_doc.php';?>
                <?php Tags::end_navigation_menu();?>
            </div>
        </div>
        <div class="documentation col-md-9">
            <?php Tags::breadcrumb(); ?>
                <?php Tags::nav_item(i18n_value('breadcrumb-man'), base_locale() . 'manual');?>
                <?php Tags::nav_item(i18n_value($docSection['title']), base_locale() . 'manual/'.$docSection['sec'], $doc == NULL ? 'active':NULL);?>
                <?php if($doc != NULL)Tags::nav_item($doc->titulo, base_locale() . 'manual/'.$docSection['sec']. '/' .$doc->nombreUrl, 'active');?>
            <?php Tags::end_breadcrumb(); ?>

            <div class="container-doc">
                <?php if($doc != NULl){?>
                    <h3><?php echo $doc->titulo; ?></h3>
                    <?php echo $doc->contenido; ?>
                <?php }else{?>
                    <h3><?php echo i18n_value($docSection['title'])?></h3>
                    <ul>
                        <?php foreach ($navs as $nav) {?>
                            <li><a href="<?php echo base_locale() . 'manual/' . $docSection['sec'] . '/' .$nav->nombreUrl ?>"><?php echo $nav->titulo ?></a></li>
                        <?php }?>
                    </ul>
                <?php }?>

                <?php Tags::paginador_simple('disabled', '', i18n_value('anterior-man'), 'active', '', i18n_value('siguiente-man')); ?>

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