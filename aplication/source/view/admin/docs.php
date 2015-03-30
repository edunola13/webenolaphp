<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once 'sections/head.php'; ?>
</head>
<body>    
    <div class="container">
        <?php require_once 'sections/header.php'; ?>

        <section class="row list">
            <div class="col-md-12">
                <?php Tags::title("Administracion de Documentacion"); ?>
                <?php Tags::link("link-pagina", real_base(), "<< Volver al Sitio", TRUE, "primary"); ?>
                <a title="Agregar" href="<?php echo BASEURL . 'adminDoc/add'; ?>" class="btn btn-primary">Agregar</a>
            </div>
                
            <div class="col-md-12">
                <div class="" style="margin-top: 10px; margin-bottom: 10px;">
                    <label for="" class="" style='float:left; margin-top: 3px;'>Buscar:</label>	
                    <div style='float:left;margin-left: 10px;margin-right: 10px;'>
                        <input type="text" id="busquedaDoc" name="busquedaDoc" data-level='required' class='form-control input-sm busquedaDoc' value="<?php if (isset($search)) echo $search;?>">
                    </div>					
                    <div id='btn' style='float:left; margin-right: 10px;'>
                        <span class='glyphicon glyphicon-search' style='cursor:pointer;margin-top: 10px;' onmouseover=jQuery(this).addClass('ui-state-hover'); onmouseout=jQuery(this).removeClass('ui-state-hover') onclick="buscar_docs()" ></span>
                    </div>
                    <?php Tags::link("", real_base() . 'adminDoc', "Limpiar", TRUE, 'default'); ?>
                </div>
            </div>
            <div class="col-md-12" id="mensaje-alert">
                
            </div>
            <div class="col-md-12" id="tabla_docs">
                <?php require_once 'tabla_docs.php'; ?>
            </div>
        </section>
    </div>
        
    <?php require_once 'sections/footer.php'; ?>
</body>
</html>