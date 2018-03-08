/*
	Your Own 'Like' System
	https://github.com/Iguannaweb/your-own-like-system
	http://www.iguannaweb.com
*/
	
//Make de ajax get request with the unique ID
function sendToDatabase(id){
	
	
	$.ajax({
            url:   '?sw=megusta&ic='+id,
            type:  'get',
            beforeSend: function () {
                $(".like"+id).html("Cargando...");
            },
            success:  function (response) {
                $(".like"+id).html(response);
            }
        });

}

/*function FuncionGuardaMegustaGenerico(nombre_campo, valor_campo, rut, id_empresa){*/
function FuncionGuardaMegustaGenerico(id, tipo_objeto){
	
	$.ajax({
            url:   '?sw=megustagenerico&id='+id+'&tipoobjeto='+tipo_objeto,
            type:  'get',
            beforeSend: function () {
                $(".like"+id).html("Cargando...");
            },
            success:  function (response) {
                $(".like"+id).html(response);
            }
        });

}
