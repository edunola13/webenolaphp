<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP - Contact</title>
</head>

<body>
    <?php include 'sections/nav.php'; ?>
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <h2 class="pull-left">Contacta al Equipo de Enola PHP</h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <legend>Contact Us</legend>
            <div class="col-md-3">
                <?php Tags::paragraph('left');?>
                    Si tiene cualquier tipo de consulta, ya se comercial, de interes personal u otra, por favor complete el siguiente
                    formulario para contactarnos con usted y asi poder aclarar sus dudas.<br/><br/>
                    Saludos y Gracias.
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-9">
                <?php Tags::form('form-contact', 'POST'); ?>
                    <?php Tags::alert_message("danger", $this->message);?>            
                
                    <?php Tags::input("Nombre", 'nombre',"nombre", "text", "Nombre", $this->email['nombre'], (isset($this->errores['nombre']) ? $this->errores['nombre'] : NULL), 'error');?> 

                    <?php Tags::input("Email", 'email',"email", "email", "Email", $this->email['email'], (isset($this->errores['email']) ? $this->errores['email'] : NULL), 'error');?> 

                    <?php if(isset($this->errores['asunto'])){
                        Tags::alert_message("warning", $this->errores["asunto"]); }?>

                    <?php Tags::select("Asunto", "asunto","asunto", $this->email['asunto'], NULL,FALSE,(isset($this->errores['asunto']) ? $this->errores['asunto'] : NULL),'error'); ?>
                        <?php Tags::select_option("General", "General"); ?>
                        <?php Tags::select_option("Enola PHP", "Enola PHP"); ?>
                        <?php Tags::select_option("UI Services", "UI Services"); ?>
                        <?php Tags::select_option("Games", "Games"); ?>
                    <?php Tags::end_select(); ?>

                    <?php Tags::textarea("Mensaje", "mensaje","mensaje", 10, "Mensaje a Enviar", $this->email['mensaje'],(isset($this->errores['mensaje']) ? $this->errores['mensaje'] : NULL),'error');?>

                    <?php Tags::botonera(); ?>            
                    <?php Tags::button('Enviar', '', 'submit', NULL, 'default');?>
                    <?php Tags::end_botonera(); ?>
                <?php Tags::end_form();?>
            </div>
	</div>        
    </div>
	
    <hr class="divider"></hr>
	
    <?php include 'sections/footer.php'?>	
</body>