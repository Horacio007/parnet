$(document).ready(function () {
    $.ajax({
        url: '/parnett/paginas/s_area.php',
        type: 'POST',
        data: {
            areas_select: true
        },
        success: function(response) {
            //alert(response);
            // remueve el registro tambien del datatable
          document.getElementById("select_areas").innerHTML = response;

        }
    });

    $("#btn_insert_serv").on('click', function(){
        //console.log("Entro al botton de enviar el servico");
        var captcha = grecaptcha.getResponse();
        if ($("#sarea").val()=="0") {
            bootbox.alert("Error: Seleccione un Area");
            return false;
        }
        if ($("#desc").val().trim()=="") {
            bootbox.alert("Error: Agrege el Asunto");  
            return false; 
        }
        if ($("#tel").val().trim()==0) {
            bootbox.alert("Error: Ingresa un numero Telefonico");
            return false;
        }
        if($("#email").val().trim()=="") {
            bootbox.alert("Error: Ingrese un E-mail");
            return false;
        }
        if (captcha.length == 0) {
            bootbox.alert("Error: Marca la casilla del ReCaptcha");
            return false;
        }

        var data = {
            area: $("#sarea").val(),
            asunto: $("#desc").val(),
            tel: $("#tel").val(),
            email: $("#email").val()
        }

        //console.log(data.area, data.asunto, data.tel, data.email);

        $.ajax({
            url: '/parnett/paginas/servicios_insert.php',
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