<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP - Contribute</title>
</head>

<body>
    <?php include 'sections/nav.php'; ?>
	
    <div class="jumbotron jumbotron-small">
        <div class="container">
            <h2 class="pull-left">Contribuye con Enola PHP</h2>
	</div>
    </div>

    <div class="container">
	<div class="row">
            <?php Tags::paragraph('center', 'lead');?>
                Para que Enola PHP mejore necesitamos de su ayuda, sin importar si usted es o no un experto
            <?php Tags::end_paragraph();?>
            <legend></legend>
            <div class="col-md-4">
                <h3>Corre la Voz</h3>
                <?php Tags::paragraph('center');?>
                    Si te parecio interesante el proyecto y te ayudo a crear mejores aplicaciones, tu voz es muy importante
                    para nosotros. Difundelo. Crea una entrada en tu blog, comportale con tus amigos por facebook, etc.
                <?php Tags::end_paragraph();?>
            </div>
            <div class="col-md-4">
                <h3>Documentemos</h3>
                <?php Tags::paragraph('center');?>
                    Para que un proyecto crezca se necesita buena documentación. Enola PHP cuenta con su propia documentacion
                    pero se puede mejorar. Puede agregar la documentacion en <a href="https://github.com/edunola13/enolaphp/wiki">GitHub</a>
                    o en su propio blog o pagina web.
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-4">
                <h3>Diseñemos</h3>
                <?php Tags::paragraph('center');?>
                    El proyecto se encuentra en sus primeras versiones tanto de codigo, de sitio web, documentacion, etc. Si usted
                    tiene consejos de diseño o similares no dude en contactarse con nosotros.
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-12">
                <h3>Testers - Reporte de Errores</h3>
                <?php Tags::paragraph('center');?>
                    Enola PHP es un proyecto que recien comienza y cuenta con la participacion de pocas personas actualmente, 
                    por lo tanto necesitamos de su ayuda para encontrar y solucionar problemas.<br/>
                    Si usted encuentra un Bug puede reportar el mismo en <a href="https://github.com/edunola13/enolaphp/issues">GitHub</a>. Si no esta
                    seguro de que sea un Bug puede consultarnos por privado y le responderemos lo antes posible. Mediante GitHub usted tambien puede 
                    ayudarnos a resolver los distintos Bugs que se vayan reportando.
                <?php Tags::end_paragraph();?>
            </div> 
            <div class="col-md-12">
                <h3>Programmers - Architects</h3>
                <?php Tags::paragraph('center');?>
                    Si usted es un amante de la programacion y del diseño de desarrollo de software puede ayudarnos a mejorar 
                    la arquitectura del framework como asi tambien opinar sobre como se encuentra implementado el mismo para en una
                    proxima version tenerlo en cuenta y mejorar.<br/>
                    Si se le ocurre alguna nueva funcionalidad que le gustaria que proveyera el framework no dude y comunicanolos.<br/>
                    Ya sea tanto para mejorar la arquitectura y la codificacion del framework como porque desea una nueva funcionalidad
                    comunicanolos mediante <a href="https://github.com/edunola13/enolaphp/pulls">GitHub</a>
                <?php Tags::end_paragraph();?>
            </div> 
	</div>        
    </div>
    
    <hr class="divider"></hr>
	
    <?php include 'sections/footer.php'?>	
</body>