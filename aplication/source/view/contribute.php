<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP - Contribute</title>
    <meta name="description" content="<?php echo i18n_value("contribute-descrip")?>">
</head>

<body>
    <?php include 'sections/nav.php'; ?>
	
    <div class="jumbotron jumbotron-small jumbotron-small2">
        <div class="container">
            <h2 class="pull-left"><?php echo i18n_value('title-contribuir'); ?></h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <?php Tags::paragraph('center', 'lead');?>
                <?php echo i18n_value('contribuir-des'); ?>
            <?php Tags::end_paragraph();?>
            <legend></legend>
            <div class="col-md-4">
                <h3><?php echo i18n_value('corre-la-voz'); ?></h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('corre-la-voz-des'); ?>                    
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-4">
                <h3><?php echo i18n_value('documentemos'); ?></h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('documentemos-des'); ?>                    
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-4">
                <h3><?php echo i18n_value('diseñemos'); ?></h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('diseñemos-des'); ?>                    
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-12">
                <h3><?php echo i18n_value('testers'); ?></h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('testers-des1'); ?><br/>
                    <?php echo i18n_value('testers-des2'); ?>                    
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-12">
                <h3><?php echo i18n_value('programmers'); ?>Programmers - Architects</h3>
                <?php Tags::paragraph('center');?>
                    <?php echo i18n_value('programmers-des1'); ?><br/>
                    <?php echo i18n_value('programmers-des2'); ?>                    
                <?php Tags::end_paragraph();?>
            </div> 
	</div>        
    </div>
    
    <hr class="divider"></hr>
	
    <?php include 'sections/footer.php'?>	
</body>