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
            <h2 class="pull-left">Descarga Enola PHP</h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <?php Tags::paragraph('center', 'lead');?>
                Descargue la versión que mas se ajuste a sus necesidades. La version actual de Enola PHP es v1.0
            <?php Tags::end_paragraph();?>
            <legend></legend>
            <div class="jumbotron jumbotron-small">
                <div class="container">
                    <a href="" data-toggle="tooltip" data-placement="top" title="Descargar v1.0">
                    <img class="img-circle" src="<?php echo real_base();?>resources/images/download.png" alt="Introducción" style="width:60px;height:60px;display:block;margin-left:auto;margin-right:auto;">
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <h3>GitHub</h3>
                <?php Tags::paragraph('center');?>
                    Enola PHP se desarrolla usando GitHub como su plataforma de desarrollo colaborativa. En esta se encuentra
                    todo el repositorio de codigo del proyecto.<br/>
                    Mediante <a href="https://github.com/edunola13/enolaphp/releases">GitHub</a> usted podra descargar las distintas versiones que se fueron creando asi como tambien descargar
                    la version actual que se esta desarrollando.<br/>
                    <br/>
                    <?php Tags::link('', "https://github.com/edunola13/enolaphp/releases", "Download v1.0 from GitHub", TRUE, 'warning');?>
                    <?php Tags::link('', "https://github.com/edunola13/enolaphp/releases", "All Releases from GitHub", TRUE, 'warning');?>
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-12">
                <h3>SourceForce</h3>
                <?php Tags::paragraph('center');?>
                    Cuando una version de Enola PHP se ha terminado de desarrollorar el codigo fuente es subido a <a href="http://sourceforge.net/projects/enolaphp01/">SourceForce</a> 
                    donde tambien desde aqui se pueden descargar las distintas versiones del framework.<br/>
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
		<h2>Introducción</h2>
		<p>Una mirada rápida al framework y sus componentes. Cómo funciona Enola PHP.</p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Tutorial" target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/tick.png" alt="Tutorial" style="width: 140px; height: 140px;">
                </a>
		<h2>Tutorial</h2>
		<p>Fácil y rápido. Realiza el tutorial del Framework Enola PHP aquí.</p>
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-centered animated fadeInRight wow">
		<a href="http://www.edunola.com.ar/enolaphp/doc/version/0.1/Documentaci%C3%B3n" target="blank">
		<img class="img-circle" src="<?php echo real_base();?>resources/images/docs.png" alt="Introducción" style="width: 140px; height: 140px;">
                </a>
		<h2>Docs</h2>
		<p>Una mirada mas profunda al framework. Como funciona internamente Enola PHP.</p>
            </div>
        </div>
    </div>
    
    <hr class="divider"></hr>
	
    <?php include 'sections/footer.php'?>	
</body>