//para agregar campos o eliminar. Interactua con el modulo formularios

//variable global. El campo esta en campo1 entonces es para que el proximo sea campo2 con el acumulador
var numeral_campo = 1;


//agrega campos al formulario
function agregar_campos()
{
	//clonar el primer campo
	$("#campo").clone().appendTo("#campos");
	//acumulador numeral_campo
	numeral_campo = numeral_campo+1;
	//cambiar el id del ultimo campo
	$("#campos #campo").attr("id","campo"+numeral_campo);
	//cambiar el titulo h3 del ultimo campo copiado
	$("#campo"+numeral_campo+ " h3:first").html('<i style="cursor: pointer;" onclick="eliminar_campo(this)" class="fa fa-times" aria-hidden="true"></i>  campo'+numeral_campo);
	//asociar el valor al campo al que pertenece
	$("#campo"+numeral_campo+ " input[name=valores_campo]").attr("name","valores_campo["+numeral_campo+"][]");

}


//agrega valores a un campo del formulario
function agregar_valores(objeto)
{
  
  var idcampo = $(objeto).parent().parent().parent().attr("id");
  //sacar el numeral del objeto
  var regexp = /[0-9]+/;
  var numeral_campo = idcampo.match(regexp);
  //crear el elemento
  var input = '<li class="fa fa-trash" style="cursor: pointer;" onclick="eliminar_valor(this)"></li> <input type="text" name="valores_campo['+numeral_campo+'][]" placeholder="Ej: Chile" class="form-control">';
  $("#"+idcampo+" .valores").append(input);
}


//elimina el campo
function eliminar_campo(objeto)
{
	//obtener el id del campo
	var idcampo = $(objeto).parent().parent().parent().attr("id");
	//eliminar el campo
	$('#'+idcampo).fadeOut( function() { $(this).remove(); });
}

//elimina el valor del campo
function eliminar_valor(objeto)
{
	$(objeto).fadeOut( function() { $(this).next().remove(); });
	$(objeto).fadeOut( function() { $(this).remove(); });
}
