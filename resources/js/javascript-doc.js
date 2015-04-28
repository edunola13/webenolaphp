var base= "http://localhost/webenolaphp/";
//var base= "http://enolaphp.com/";

jQuery(document).on('keydown', 'input.busquedaDoc', function(e) {
	if(e.which == 13) {buscar_docs();}
});

function buscar_docs(){
    var search= $("#busquedaDoc").val();
    window.location= base + "adminDoc/page/1/" + search;
}

function actualizar_docs(page, search){
    $.ajax( {
	    url: base + "adminDoc/actualizar/" + page + "/" + search,
	    type: 'GET',
	    success: function (rta) {
	    	document.body.style.cursor = 'auto';
	    	$("#tabla_docs").html(rta);
	    },
	    error: function (){
	    	document.body.style.cursor = 'auto';
	        alert("Error");
	    }
	} );
}

function delete_doc(id, page, search){
    if(confirm("Esta seguro que desea eliminar el Doc?")){
        $.ajax( {
	    url: base + "adminDoc/delete/" + id,
	    type: 'GET',
	    success: function (rta) {
	    	document.body.style.cursor = 'auto';                
	    	actualizar_docs(page, search);
                $("#mensaje-alert").html(rta);
	    },
	    error: function (){
	    	document.body.style.cursor = 'auto';
	        alert("Error");
	    }
	} );
    }
}