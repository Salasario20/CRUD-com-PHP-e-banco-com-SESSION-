$(document).ready(function() {
    $('#cadastroForm').submit(function(event) {
        event.preventDefault(); 

        var form = $(this);
        var url = form.attr('action');
        var formData = form.serialize(); 

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            success: function(response) {
                $('#resultado').text(response); 
                form.trigger('reset'); 
            },
            error: function() {
                $('#resultado').text("Erro ao processar a requisição.");
            }
        });
    });
});
var idUsuarios = this.getAttribute('data-idUsuarios');
