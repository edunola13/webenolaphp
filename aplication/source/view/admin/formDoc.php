<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once 'sections/head.php'; ?>
    <script src="<?php echo BASEURL . 'resources/ckeditor/ckeditor.js'; ?>"></script>
</head>
<body>    
    <div class="container">
        <?php require_once 'sections/header.php'; ?>

        <section class="row list">
            <?php Tags::title("Administracion de Documentacion - Form"); ?>
            <?php Tags::link("link-tabla", real_base() . "adminDoc", "<< Volver", TRUE, "primary"); ?>
            <article class="col col-md-12">
                <?php Tags::form('form-doc',"POST", '' , '', ""); ?>
                    <?php Tags::alert_message($tipoMensaje, $mensaje);?>
                
                    <input name="id" type="hidden" value="<?php echo $doc->id ?>"/>
                    
                    <?php Tags::input("Titulo", "titulo", "titulo", "text", "Titulo del Documento", $doc->titulo, (isset($this->errors['titulo']) ? $this->errors['titulo'] : NULL), 'error'); ?>
                    
                    <?php Tags::input("Version", "version", "version", "text", "Version del Framework", $doc->version, (isset($this->errors['version']) ? $this->errors['version'] : NULL), 'error') ?>
                    
                    <?php Tags::select("Locale", "locale", "locale", $doc->locale)?>
                        <?php Tags::select_option("Español", "es");?>
                        <?php Tags::select_option("Ingles", "en");?>
                    <?php Tags::end_select()?>
                    
                    <?php Tags::input("Nombre URL", "nombreUrl", "nombreUrl", "text", "Nombre de la URL", $doc->nombreUrl, (isset($this->errors['nombreUrl']) ? $this->errors['nombreUrl'] : NULL), 'error')?>
                    
                    <?php Tags::select("Categoria", "categoria", "categoria", $doc->categoria)?>
                        <?php Tags::select_option("Introducción", "introduction");?>
                        <?php Tags::select_option("Tutorial", "tutorial");?>
                        <?php Tags::select_option("Documentación", "documentation");?>
                    <?php Tags::end_select()?>
                    
                    <?php Tags::input("Orden", "orden", "orden", "text", "Orden dentro de la categoria", $doc->orden, (isset($this->errors['orden']) ? $this->errors['orden'] : NULL), 'error')?>
                    
                    <?php Tags::boolean_checkbox("Habilitado", "habilitado","habilitado", $doc->habilitado); ?>
                    
                    <?php if(isset($this->errors['contenido'])){ 
                    Tags::alert_message("warning", $this->errors["contenido"]); }?>
                    <textarea name="contenido" id="contenido" placeholder="Descripcion de la Documentación" rows="10" cols="50" ><?php echo $doc->contenido; ?></textarea>
                    <script>
                        CKEDITOR.replace( 'contenido' );
                    </script>                    
                    
                    <br/>
                    
                    <?php Tags::botonera(); ?>
                        <?php Tags::button('Guardar', '', 'submit');?>
                    <?php Tags::end_botonera(); ?>
                <?php Tags::end_form(); ?>
            </article>
        </section>
    </div>
        
    <?php require_once 'sections/footer.php'; ?>
</body>
</html>