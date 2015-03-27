    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo real_base();?>">
                <img alt="Logo-color" src="<?php echo base();?>resources/images/logo-color.png">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php Tags::nav_item("Home", BASEURL_LOCALE, $section == "index" ? "active" : NULL);?>
                <?php Tags::nav_item("Documentación", BASEURL_LOCALE . 'documentation', $section == "documentation" ? "active" : NULL);?>
                <?php Tags::nav_item("Descargar", BASEURL_LOCALE . 'download', $section == "download" ? "active" : NULL);?>
		<?php Tags::nav_item("Contribuir", BASEURL_LOCALE . 'contribute', $section == "contribute" ? "active" : NULL);?>
                <?php Tags::nav_item("Contacto", BASEURL_LOCALE . 'contact', $section == "contact" ? "active" : NULL);?>		
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Buscar...">
                </div>
            </form>
	</div>
        </div><!--/.nav-collapse -->
      </div>
    </nav>