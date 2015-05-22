var base= "http://localhost/webenolaphp/";
//var base= "http://enolaphp.com/";

var pagina= 0;

function actualizarPagina(pag){
    pagina= pag;
}

function limpiarBuscador(){
    $("#busquedaDoc").val("");
    filtrarDocs();
}

jQuery(document).on('keydown', 'input.busquedaDoc', function(e) {
	if(e.which == 13) {filtrarDocs();}
});

function filtrarDocs(pag){
    var search= $("#busquedaDoc").val();
    var ver= $("#select-version").val();
    var loc= $("#select-locale").val();
    var cat= $("#select-categoria").val();
    if(pag != null){
        pagina= pag;
    }    
    
    document.body.style.cursor = 'wait';
    
    $.ajax( {
        url: "adminDoc/page/"+pagina+"/"+search+"/"+ver+"/"+loc+"/"+cat,
        type: 'GET',
        success: function (rta) {
            $( "#tabla_docs" ).html(rta);
            document.body.style.cursor = 'auto';
        },
	error: function (){
            document.body.style.cursor = 'auto';
            alert("Error");
	}
    });
}

function delete_doc(id, page, search){
    if(confirm("Esta seguro que desea eliminar el Doc?")){
        $.ajax( {
	    url: base + "adminDoc/delete/" + id,
	    type: 'GET',
	    success: function (rta) {
	    	document.body.style.cursor = 'auto';                
	    	filtrarDocs();
                $("#mensaje-alert").html(rta);
	    },
	    error: function (){
	    	document.body.style.cursor = 'auto';
	        alert("Error");
	    }
	} );
    }
}