$(document).ready(function () {

    $("#btnenviar").click(function(){
        if ($("#inombre").val().length==0) {
            bootbox.alert("Ingresa un nombre");
            return false;
        }else if ($("#iemail").val().length==0) {
            bootbox.alert("Ingresa un email");
            return false;
        }else if ($("#itelefono").val().length==0) {
            bootbox.alert("Ingresa un telefono");
            return false;
        }else if ($("#sasunto").val()==0) {
            bootbox.alert("Selecciona un asunto")
            return false;
        }else if (($("#tcomentario").val().length==0) || ($("#tcomentario").val().length<20)) {
            bootbox.alert("Ingresa un comentario largo");
            return false;
        }else{
            $.post("insertar.php", $("#formdata").serialize(), function(data){
                bootbox.alert(data);
                document.getElementById("formdata").reset();
            });
        };
    });
});