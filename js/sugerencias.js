$(document).ready(function () {

    $("#btn_insert_sug").on('click', function(){
        //console.log("Entro al botton de enviar el servico");
        var captcha = grecaptcha.getResponse();
        if ($("#tsugerencia").val().trim()=="0") {
            bootbox.alert("Error: Agrege un titulo");
            return false;
        }
        if ($("#rsugerencia").val().trim()=="") {
            bootbox.alert("Error: Agrege un remitente");  
            return false; 
        }
        if ($("#esugerencia").val().trim()==0) {
            bootbox.alert("Error: Ingrese un E-mail");
            return false;
        }
        if($("#telsugerencia").val().trim()=="") {
            bootbox.alert("Error: Ingrese un numero de teléfono");
            return false;
        }
        if ($("#tareasugerencia").val().trim()=="") {
            bootbox.alert("Error: Ingrese un mensaje")
            return false;
        }
        if (captcha.length == 0) {
            bootbox.alert("Error: Marca la casilla del ReCaptcha");
            return false;
        }

        var data = {
            titulo: $("#tsugerencia").val(),
            remitente: $("#rsugerencia").val(),
            email: $("#esugerencia").val(),
            telefono: $("#telsugerencia").val(),
            mensaje: $("#tareasugerencia").val()
        }

        console.log(data.titulo, data.remitente, data.email, data.telefono, data.mensaje);

        $.ajax({
            url: '/parnett/paginas/sugerencias_insert.php',
            type: 'POST',
            data: data,
            success(result){
                console.log(result);
                document.getElementById("formdata").reset();
                grecaptcha.reset();
                Swal.fire({
                    icon: 'success',
                    title: 'Oops...',
                    text: '' + result,
                  })
            },
            error: function(result){
                console.log(result);
            }
        });
    });
})