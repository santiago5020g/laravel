
function eliminar(eliminar)
{
		
		$.ajax({
		method	: 'delete',
        url   : $(eliminar).attr('data-t'),
  			data	: {
  				_token	: $(eliminar).data('token')
  			},
	    success: function(result) {
	        // Do something with the result
	        alert("Registro eliminado");
	        $(eliminar).parent().parent().remove();

	    }
	});
}
