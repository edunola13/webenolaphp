<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="<?php echo BASEURL;?>resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL;?>resources/css/style.css" rel="stylesheet">
    <!-- Bootstrap JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo BASEURL;?>resources/js/bootstrap.min.js"></script>
</head>
<body>
    <?php Tags::navigation_bar('EnolaPHP - Framework', base(), FALSE) ?>
        <?php Tags::nav_bar_right()?>
            <?php Tags::nav_item('Download', 'download')?>
            <?php Tags::nav_item('Documentation', 'documentation')?>
            <?php Tags::nav_item('The Team', 'team')?>
            <?php Tags::nav_item('Contact', 'contact')?>
        <?php Tags::end_nav_bar_right()?>
    <?php Tags::end_navigation_bar()?>
    <div class="container">    
        <section style="text-align: center;">
            <h1>Bienvenido a Enola Framework PHP</h1>
            <p class="lead">Felicitaciones, ya se encuentra en funcionamiento el framework Enola PHP.</p>
        </section>      
    </div>
</body>
</html>