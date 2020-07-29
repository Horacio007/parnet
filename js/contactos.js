$(document).ready(function(){
    $("#btn_correo").on('click', function() {
        console.log("Entro al boton");
        var captcha = grecaptcha.getResponse();
        if ($("#empresa").val().trim()=="") {
            bootbox.alert("Error: Ingresa una Empresa");
            return false;
        }
        if ($("#nombre").val().trim()=="") {
            bootbox.alert("Error: Ingresa un Nombre");
            return false;
        }
        if ($("#telefono").val().trim()=="") {
            bootbox.alert("Error: Ingresa un Teléfono");
            return false;
        }
        if ($("#email").val().trim()=="") {
            bootbox.alert("Error: Ingresa una E-mail");
            return false;
        }
        if ($("#tarea").val().trim()=="") {
            bootbox.alert("Error: Ingresa un Mensaje");
            return false;
        }
        if (captcha.length==0) {
            bootbox.alert("Error: Marca la casilla del ReCaptcha");
            return false;
        }

        var data = {
            empresa: $("#empresa").val(),
            nombre: $("#nombre").val(),
            telefono: $("#telefono").val(),
            email: $("#email").val(),
            tarea: $("#tarea").val()
        }

        //console.log(data.empresa, data.nombre, data.telefono, data.email,data.tarea);

        $.ajax({
            url: '/parnett/paginas/correo.php',
            type: 'POST',
            data: data,
            success(result){
                console.log(result);
                document.getElementById("formdata").reset();
                grecaptcha.reset();
                Swal.fire({
                    icon: 'success',
                    title: 'Ooops...',
                    text: '' + result,
                })
            },
            error: function(result){
                console.log(result);
            }
        });
    });
});