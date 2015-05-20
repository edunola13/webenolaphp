<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP - Contact</title>
    <meta name="description" content="<?php echo i18n_value("contact-descrip")?>">
</head>

<body>
    <?php include 'sections/nav.php'; ?>
	
    <div class="jumbotron jumbotron-small jumbotron-small2">
        <div class="container">
            <h2 class="pull-left"><?php echo i18n_value('title-contacto'); ?></h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <legend><?php echo i18n_value('legend-contacto'); ?></legend>
            <div class="col-md-3">
                <?php Tags::paragraph('left');?>
                    <?php echo i18n_value('contacto-des'); ?>
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-9">
                <?php Tags::form('form-contact', 'POST', ''); ?>
                    <?php Tags::alert_message("danger", $mensaje);?>            
                
                    <?php Tags::input(i18n_value('form-nombre'), 'nombre',"nombre", "text", i18n_value('form-nombre'), $email['nombre'], (isset($this->errors['nombre']) ? $this->errors['nombre'] : NULL), 'error');?> 

                    <?php Tags::input(i18n_value('form-email'), 'email',"email", "email", i18n_value('form-email'), $email['email'], (isset($this->errors['email']) ? $this->errors['email'] : NULL), 'error');?> 

                    <?php if(isset($this->errores['asunto'])){
                        Tags::alert_message("warning", $this->errores["asunto"]); }?>

                    <?php Tags::select(i18n_value('form-asunto'), "asunto","asunto", $email['asunto'], NULL,FALSE,(isset($this->errors['asunto']) ? $this->errors['asunto'] : NULL),'error'); ?>
                        <?php Tags::select_option("General", "General"); ?>
                        <?php Tags::select_option("Enola PHP", "Enola PHP"); ?>
                        <?php Tags::select_option("UI Services", "UI Services"); ?>
                        <?php Tags::select_option("Games", "Games"); ?>
                    <?php Tags::end_select(); ?>

                    <?php Tags::textarea(i18n_value('form-mensaje'), "mensaje","mensaje", 10, i18n_value('form-mensaje'), $email['mensaje'],(isset($this->errors['mensaje']) ? $this->errors['mensaje'] : NULL),'error');?>

                    <?php Tags::botonera(); ?>            
                    <?php Tags::button(i18n_value('form-enviar'), '', 'submit', NULL, 'default');?>
                    <?php Tags::end_botonera(); ?>
                <?php Tags::end_form();?>
            </div>
	</div>        
    </div>
	
    <hr class="divider"></hr>
	
    <?php include 'sections/footer.php'?>	
</body>