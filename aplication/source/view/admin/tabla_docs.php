                <?php Tags::table(); ?>
                    <thead><tr>
                        <th>Titulo</th>
                        <th>Version</th>
                        <th>Locale</th>
                        <th>Categoria</th>
                        <th>Orden</th>
                        <th>Estado</th>
                        <th></th>
                    </tr></thead>
                    <?php foreach ($docs as $doc) { ?>
                        <tr>
                            <td><?php echo $doc->titulo; ?></td>
                            <td><?php echo $doc->version; ?></td>
                            <td><?php echo $doc->locale; ?></td>
                            <td><?php echo $doc->categoria; ?></td>
                            <td><?php echo $doc->orden; ?></td>
                            <td>
                                <?php if($doc->habilitado) { ?>
                                <span title="Habilitado" class="glyphicon glyphicon-ok-circle"></span>
                                <?php } else { ?>
                                <span title="Deshabilitado" class="glyphicon glyphicon-minus-sign"></span>
                                <?php } ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-md" title="Eliminar" onclick="delete_doc('<?php echo $doc->id; ?>', '<?php echo $paginador->current_page; ?>', '<?php $search ?>')">
                                <span class="glyphicon glyphicon-remove"></span></button>
                                <a title="Update" href="<?php echo BASEURL . "adminDoc/update/" . $doc->id; ?>" class="btn btn-primary" title="Modificar">
                                <span class="glyphicon glyphicon-edit"></span></a>
                                <a title="Update" href="<?php echo BASEURL . "adminDoc/add/" . $doc->id; ?>" class="btn btn-primary" title="Duplicar">
                                <span class="glyphicon glyphicon-copy"></span></a>
                            </td>
                        </tr>
                    <?php } ?>                
                <?php Tags::end_table(); ?>            
                <?php Tags::paginator();?>
                    <?php Tags::page_first('javascript:filtrarDocs(1)'); ?>
                    <?php for ($i = 1; $i < $paginador->current_page; $i++) { ?>
                        <?php Tags::page($i, 'javascript:filtrarDocs('.$i.')'); ?>
                    <?php } ?>
                    <?php Tags::page($paginador->current_page, 'javascript:filtrarDocs('.$paginador->current_page.')', 'active'); ?>
                    <?php for ($i = $paginador->current_page + 1; $i <= $paginador->number_of_pages(); $i++) { ?>
                        <?php Tags::page($i, 'javascript:filtrarDocs('.$i.')'); ?>
                    <?php } ?>
                    <?php Tags::page_last('javascript:filtrarDocs('.$paginador->number_of_pages().')'); ?>
                <?php Tags::end_paginator(); ?>
                <script>
                    document.onreadystatechange = function () {
                        actualizarPagina(<?php echo $paginador->current_page?>);
                    };
                </script>