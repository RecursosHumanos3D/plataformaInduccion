$(document).ready(function() {

    $("#enviar-btn").click(function() {
    	

        var idusuario = $("input#idusuario").val();
        var comment = $("textarea#comment").val();
        var now = new Date();
        var date_show = now.getDate() + '-' + now.getMonth() + '-' + now.getFullYear() + ' ' + now.getHours() + ':' + + now.getMinutes() + ':' + + now.getSeconds();

        var dataString = 'idusuario=' + idusuario + '&comment=' + comment;

        $.ajax({
            type: "POST",
            url: "?sw=coment",
            data: dataString,
            success: function() {
                $('#newmessage').append('<div class="alert alert-success"><p><strong>Comentario Enviado!!</strong><br> Tu comentario será validado por el administrador.</p></div>.');
            }
        });
        return false;
    });
	
	//INICIO DE ME GUSTA
	
	$(".votos .voting_btn").click(function (e) 
	{
		
	 	e.preventDefault();
		var voto_hecho = $(this).data('voto');
		var id = $(this).data("id"); 
		var td = $(this);
		
		
		if(voto_hecho && id)
		{
			$.post('?sw=likes', {'id':id, 'voto':voto_hecho}, function(data) 
			{
				if (data!="voto_duplicado") 
				{
					td.addClass(voto_hecho+"_votado").find("span").text(data);
					//li.closest("ul").append("<span class='votado'>Gracias!</span>");
				}
				//else li.closest("ul").append("<span class='votado'>Ya has votado!</span>");
			});
			setTimeout(function() {$('.votado').fadeOut('fast');}, 3000);
		}
	});
});
