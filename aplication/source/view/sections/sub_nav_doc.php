<div class="nav-desplegable">
    <?php foreach ($navs as $nav) {
        Tags::nav_item($nav->titulo, base_locale() . 'manual/' . $docSection['sec'] .'/'. $nav->nombreUrl, $actualDoc == $nav->id ? 'active': NULL);
    }?>    
</div>