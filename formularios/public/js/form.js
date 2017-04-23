//para agregar campos o eliminar. Interactua con el modulo formularios

//variable global. El campo esta en campo1 entonces es para que el proximo sea campo2 con el acumulador
var numeral_campo = 1;

function agregar_campos()
{
	//clonar el primer campo
	$("#campo").clone().appendTo("#campos");
	//acumulador numeral_campo
	numeral_campo = numeral_campo+1;
	//cambiar el id del ultimo campo
	$("#campos #campo").attr("id","campo"+numeral_campo);
	//cambiar el titulo h3 del ultimo campo copiado
	$("#campo"+numeral_campo+ " h3:first").html("campo"+numeral_campo);

}



