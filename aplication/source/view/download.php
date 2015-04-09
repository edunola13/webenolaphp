<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP - Download</title>
</head>

<body>
    <?php include 'sections/nav.php'; ?>
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <h2 class="pull-left"><?php echo i18n_value('title-descargar'); ?></h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <?php Tags::paragraph('center', 'lead');?>
                <?php echo i18n_value('descargar-des'); ?>
            <?php Tags::end_paragraph();?>
            <legend></legend>
            <div class="jumbotron jumbotron-small">
                <div class="container">
                    <a href="" data-toggle="tooltip" data-placement="top" title="<?php echo i18n_value('descargar')?> v1.0">
                    <img class="img-circle" src="<?php echo real_base();?>resources/images/download.png" alt="Download" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <h3>GitHub</h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('git-hub1'); ?><br/>
                    <?php echo i18n_value('git-hub2'); ?><br/>
                    <br/>
                    <?php Tags::link('', "https://github.com/edunola13/enolaphp/releases", "Download v1.0 from GitHub", TRUE, 'warning');?>
                    <?php Tags::link('', "https://github.com/edunola13/enolaphp/releases", "All Releases from GitHub", TRUE, 'warning');?>
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-12">
                <h3>SourceForce</h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('source-force'); ?><br/>
                    <br/>
                    <?php Tags::link('', "http://sourceforge.net/projects/enolaphp01/", "Download v1.0 from SourceForce", TRUE, 'warning');?>
                    <?php Tags::link('', "http://sourceforge.net/projects/enolaphp01/files/", "All Releases from SourceForce", TRUE, 'warning');?>
                <?php Tags::end_paragraph();?>
            </div> 
	</div>
        
        <div class="row">
            <div class="col-md-4 col-centered animated fadeInRight wow">
                <a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Introducci%C3%B3n"  target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/list.png" alt="Introducción" style="width: 140px; height: 140px;">
		</a>
		<h2><?php echo i18n_value('introduccion'); ?></h2>
		<p><?php echo i18n_value('introduccion-des'); ?></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Tutorial" target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/tick.png" alt="Tutorial" style="width: 140px; height: 140px;">
                </a>
		<h2><?php echo i18n_value('tutorial'); ?></h2>
		<p><?php echo i18n_value('tutorial-des'); ?></p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Documentaci%C3%B3n" target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/docs.png" alt="Introducción" style="width: 140px; height: 140px;">
                </a>
		<h2><?php echo i18n_value('docs'); ?></h2>
		<p><?php echo i18n_value('docs-des'); ?></p>
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div>
    
    <hr class="divider"></hr>
	
    <?php include 'sections/footer.php'?>	
    <script type='text/javascript' src='<?php echo base();?>resources/js/wow.js'></script>
</body>