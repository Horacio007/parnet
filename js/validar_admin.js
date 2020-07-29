$(document).ready(function(){
    $("#login").click(function () {
        var captcha = grecaptcha.getResponse();
       if ($("#usuario").val().trim()=="") {
           bootbox.alert("Error: Ingrese un usuario");
           return false;
       }
       if ($("#contrasena").val().trim()=="") {
           bootbox.alert("Erro: Ingrese una contraseña");
           return false;
       }
       if (captcha==0){
           bootbox.alert("Error: Marca la casilla del ReCaptcha")
           return false
       }

       var datos = {
           usuario: $("#usuario").val(),
           psdw: $("#contrasena").val()
       }

       $.ajax({
            url: "/parnett/paginas/login_verificar.php",
            type: "post",
            data: datos,
            success: function (result) {
                //console.log(result);
                window.location.replace("/parnett/index2.php");
            }   
        });
    });
});