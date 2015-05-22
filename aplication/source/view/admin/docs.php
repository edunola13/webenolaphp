<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP</title>
</head>
<body>    
    <div class="container">
        <?php require_once 'sections/header.php'; ?>

        <section class="row list">
            <div class="col-md-12">
                <?php Tags::title("Administracion de Documentacion"); ?>
                <?php Tags::link("link-pagina", real_base(), "<< Volver al Sitio", TRUE, "primary"); ?>
                <a title="Agregar" href="<?php echo base() . 'adminDoc/add'; ?>" class="btn btn-primary">Agregar</a>
                <a title="Cerrar Sesión" href="<?php echo base() . 'logout'; ?>" class="btn btn-primary pull-right">Cerrar Sesión</a>
            </div>
                
            <div class="col-md-12" style="margin-top: 15px; margin-bottom: 10px;">
                <div class="col-md-4" style="padding-left: 0px;">
                    <label for="" class="" style='float:left; margin-top: 3px;'>Buscar:</label>	
                    <div style='float:left;margin-left: 10px;margin-right: 10px;'>
                        <input type="text" id="busquedaDoc" name="busquedaDoc" data-level='required' class='form-control input-sm busquedaDoc' value="<?php if (isset($search)) echo $search;?>">
                    </div>					
                    <div id='btn' style='float:left; margin-right: 10px;'>
                        <span class='glyphicon glyphicon-search' style='cursor:pointer;margin-top: 10px;' onmouseover=jQuery(this).addClass('ui-state-hover'); onmouseout=jQuery(this).removeClass('ui-state-hover') onclick="filtrarDocs()" ></span>
                    </div>
                    <?php Tags::link('', 'javascript:limpiarBuscador()', "Limpiar", TRUE, 'default'); ?>
                </div>
                <div class="col-md-2">
                    <?php Tags::select_full(TRUE, '', 'select-version', 'select-version', $version, $optionsVersion, 0, 0, 'Todas las Versiones', '', 'filtrarDocs()');?>
                </div>
                <div class="col-md-3">
                    <?php Tags::select_full(TRUE, '', 'select-categoria', 'select-categoria', $categoria, $optionsCategoria, 0, 1, 'Todas las Categorias', '', 'filtrarDocs()');?>
                </div>
                <div class="col-md-3">
                    <?php Tags::select_full(TRUE, '', 'select-locale', 'select-locale', $locale, $optionsLocale, 0, 1, 'Todas los Idiomas', '', 'filtrarDocs()');?>
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