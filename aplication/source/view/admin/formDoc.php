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
            <article class="col col-md-12">
                <?php Tags::form('form-doc',"POST", '' , '', ""); ?>
                    <?php Tags::alert_message("info", $this->mensaje);?> 
                    <?php Tags::alert_message("danger", $this->mensaje_error);?> 
                
                    <input name="id" type="hidden" value="<?php echo $doc->id ?>"/>
                    
                    <?php Tags::input("Titulo", "titulo", "titulo", "text", "Titulo del Documento", $doc->titulo, (isset($this->errores['nombre']) ? $this->errores['nombre'] : NULL), 'error'); ?>
                    
                    <?php Tags::input("Version", "version", "version", "text")
                    
                    <?php if(isset($this->errores['descripcion'])){ 
                    Tags::alert_message("warning", $this->errores["descripcion"]); }?>
                    <?php Tags::textarea("Descripcion", "descripcion","descripcion", 5, "Descripcion del Post", $this->post->descripcion); ?>
                    <?php if(isset($this->errores['contenido'])){ 
                    Tags::alert_message("warning", $this->errores["contenido"]); }?>
                    <textarea name="contenido" id="contenido" placeholder="Descripcion del Post" rows="10" cols="50" ><?php echo $this->post->contenido; ?></textarea>
                    <script>
                        CKEDITOR.replace( 'contenido' );
                    </script>
                    <?php Tags::boolean_checkbox("Habilitado", "habilitado","habilitado", $this->post->habilitado); ?>
                    <?php Tags::select("Posts Relacionados", "relacion","relacion[]", $this->relaciones, NULL,TRUE); ?>
                        <?php foreach ($this->posts as $pos) { ?>
                            <?php Tags::select_option($pos->titulo, $pos->id); ?>
                        <?php } ?>
                    <?php Tags::end_select(); ?>
                    <?php Tags::select("Tags", "tags","tags[]", $this->tags_rel, NULL,TRUE); ?>
                        <?php foreach ($this->tags as $tag) { ?>
                            <?php Tags::select_option($tag->nombre, $tag->id); ?>
                        <?php } ?>
                    <?php Tags::end_select(); ?>
                    
                    <?php Tags::botonera(); ?>
                        <?php Tags::button('Modificar', '', 'submit');?>
                    <?php Tags::end_botonera(); ?>
                <?php Tags::end_form(); ?>
            </article>
        </section>
    </div>
        
    <?php require_once 'sections/footer.php'; ?>
</body>
</html>