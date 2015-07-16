<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP</title>
    <meta name="description" content="<?php echo i18n_value("index-descrip")?>">
</head>
<body>
    <?php include 'sections/nav.php'; ?>
    <div class="jumbotron">
        <div class="container">
            <img src="<?php echo base();?>resources/images/logo-negro.png" class="img-responsive animated bounce" alt="Logo-negro" style="margin-left:auto;margin-right:auto;">
            <h1>ENOLA - Framework PHP</h1>
            <h1><small><?php echo i18n_value('sub-title'); ?></small></h1>
            <br>
            <a href="https://github.com/edunola13/enolaphp/releases/tag/v1.0" data-toggle="tooltip" data-placement="top" title="<?php echo i18n_value('descargar'); ?> v1.0">
                <img class="img-circle" src="<?php echo base();?>resources/images/download.png" alt="Download" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
            </a>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <div class="col-md-4 animated fadeInUp wow">
                <h2><?php echo i18n_value('que-es'); ?></h2>
		<p><?php echo i18n_value('que-es-des1'); ?><br>
                   <?php echo i18n_value('que-es-des2'); ?>
                </p>
            </div>
            <div class="col-md-4 animated fadeInUp wow">
		<h2><?php echo i18n_value('por-que'); ?></h2>
		<p>
                <?php echo i18n_value('por-que-des1'); ?><br>
		<?php echo i18n_value('por-que-des2'); ?><br>
		<?php echo i18n_value('por-que-des3'); ?><br>
		<?php echo i18n_value('por-que-des4'); ?><br>
		<?php echo i18n_value('por-que-des5'); ?><br>
		<?php echo i18n_value('por-que-des6'); ?><br>
                <?php echo i18n_value('por-que-des7'); ?><br>
                <?php echo i18n_value('por-que-des8'); ?>
                </p>
            </div>
            <div class="col-md-4 animated fadeInUp wow">
		<h2><?php echo i18n_value('por-que-nacio'); ?></h2>
		<p><?php echo i18n_value('por-que-nacio-des1'); ?><br>
                   <?php echo i18n_value('por-que-nacio-des2'); ?> 
                </p>
            </div>
	</div>
	
	<hr class="divider"></hr>
	<div class="row">
            <div class="col-md-4 col-centered animated fadeInRight wow">
                <a href="<?php echo base_locale() . "manual/introduction"?>"  target="blank">
		<img class="img-circle" src="<?php echo base();?>resources/images/list.png" alt="Introducción" style="width: 140px; height: 140px;">
		</a>
		<h2><?php echo i18n_value('introduccion'); ?></h2>
		<p><?php echo i18n_value('introduccion-des'); ?></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="<?php echo base_locale() . "manual/tutorial"?>" target="blank">
		<img class="img-circle" src="<?php echo base();?>resources/images/tick.png" alt="Tutorial" style="width: 140px; height: 140px;">
                </a>
		<h2><?php echo i18n_value('tutorial'); ?></h2>
		<p><?php echo i18n_value('tutorial-des'); ?></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="<?php echo base_locale() . "manual/documentation"?>" target="blank">
		<img class="img-circle" src="<?php echo base();?>resources/images/docs.png" alt="Introducción" style="width: 140px; height: 140px;">
                </a>
		<h2><?php echo i18n_value('docs'); ?></h2>
		<p><?php echo i18n_value('docs-des'); ?></p>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div>
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <a href="https://github.com/edunola13/enolaphp/releases/tag/v1.0" data-toggle="tooltip" data-placement="top" title="<?php echo i18n_value('descargar'); ?> v1.0">
            <img class="img-circle" src="<?php echo base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
            </a>
	</div>
    </div>
	
    <?php include 'sections/footer.php'?>
    <script type='text/javascript' src='<?php echo base();?>resources/js/wow.js'></script>
    <script>
	$(function () {
            $('[data-toggle="tooltip"]').tooltip()
	})
	new WOW().init();
    </script>
	
</body>