jQuery(document).ready(function($){
    var form = $("#contact");
    var action= form.attr("action");

    form.on('submit', function(event){
        var FormData = {
            firstname: $('#firstname').val(),
            email: $('#email').val(),
            phone: $('#phone').val(),
            question: $('#question').val()
        }

        $.ajax({
            url: action,
            type: 'POST',
            data: FormData,
            error: function(request, txtstatus, errorThrow){
                console.log(request);
                console.log(txtstatus);
                console.log(errorThrow);
            },
            succes: function(){
                form.html("Ваша заявка отправлена");
            }
            

        });

        event.PreventDefault();
        
    });
});