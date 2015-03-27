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
                <?php Tags::nav_item('Prueba', "asa");?>
                
                <?php Tags::nav_item('Prueba', "asa", 'active');?>
            <div class="nav-desplegable">
                    <?php Tags::nav_item('Prueba', "asa");?>
                <?php Tags::nav_item('Prueba ad ad ad ad  d  das d asd ad ad ad ', "asa", 'active');?>
                <?php Tags::nav_item('Prueba', "asa");?>

                    <?php Tags::nav_item('Prueba', "asa");?>
                </div>
                <?php Tags::nav_item('Prueba', "asa");?>
            <?php Tags::end_navigation_menu();?>
        </div>
    </div>
    <div class="documentation">
                asdadadad
                sd
                asd
                ad
                asd
                as
                asd
                sad
                asd
                <br/>
                asds
                <br/>
    </div>
    
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type='text/javascript' src='<?php echo base();?>resources/js/bootstrap.min.js'></script>
</body>