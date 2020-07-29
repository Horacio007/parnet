$(document).ready(function (){
    //Todos los botones del navabr
    //Boton -> principal que del nav
    $("#bnav1").click(function () {
        //console.log("jala el boton de pagina principal");
        $.ajax({
            url: "/parnett/paginas/pagina_principal.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> quinees somos del nav
    $("#bnav2").click(function () {
        //console.log("jala el boton de quienes somos);
        $.ajax({
            url: "/parnett/paginas/quienes_somos.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> clientes del nav
    $("#bnav3").click(function () {
        //console.log("jala el boton de clientes");
        $.ajax({
            url: "/parnett/paginas/clientes.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> servicios del nav
    $("#bnav4").click(function () {
        //console.log("jala el boton de servicios");
        $.ajax({
            url: "/parnett/paginas/servicios.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> productos del nav
    $("#bnav5").click(function () {
        //console.log("jala el boton de productos;
        $.ajax({
            url: "/parnett/paginas/productos.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> casos de exito nav
    $("#bnav6").click(function () {
        $.ajax({
            url: '/parnett/paginas/casos_de_exito.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> contacto nav
    $("#bnav7").click(function () {
        $.ajax({
            url: '/parnett/paginas/contactos.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton -> socios nav
    $("#bnav8").click(function () {
        $.ajax({
            url: '/parnett/paginas/socios.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

//----------------------------------------------------------------//

    //Botonoes laterales
    //Boton noticias lateral
    $("#noticias").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/noticias.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton certificaciones laterales
    $("#btn1").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/certificaciones.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de telecomunicaciones lateral
    $("#btn2").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/telecomunicaciones.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Botono de redes electricas lateral
    $("#btn3").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/redes_electricas.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Botono de circuito cerrado de televicion lateral
    $("#btn4").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/circuito_cerrado_tv.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Botono de corriente regulada lateral
    $("#btn5").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/corriente_regulada.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Botono de data center lateral
    $("#btn6").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/data_center.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Botono de fibra optica lateral
    $("#btn7").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/fibra_optica.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de cable estructurado lateral
    $("#btn8").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/cable_estructurado.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de polizas lateral
    $("#btn9").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/polizas.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de outsorcing lateral
    $("#btn10").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/outsourcing.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de outsorcing lateral
    $("#btn11").on('click', function(){
        $.ajax({
            url: '/parnett/paginas/login.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });
//----------------------------------------------------------------//
    //Boton del mundito de parnet para recargar footer
    $("#foo1btn").on('click', function(){
        location.reload();
    });

    //Boton de pagina principal footer
    $("#foo2btn").click(function () {
        //console.log("jala el boton de pagina principal");
        $.ajax({
            url: "/parnett/paginas/pagina_principal.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de quienes somos footer
    $("#foo3btn").click(function () {
        //console.log("jala el boton de quienes somos);
        $.ajax({
            url: "/parnett/paginas/quienes_somos.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de clientes footer
    $("#foo4btn").click(function () {
        //console.log("jala el boton de clientes");
        $.ajax({
            url: "/parnett/paginas/clientes.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de servicios
    $("#foo5btn").click(function () {
        //console.log("jala el boton de servicios");
        $.ajax({
            url: "/parnett/paginas/servicios.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de productos footer
    $("#foo6btn").click(function () {
        $.ajax({
            url: "/parnett/paginas/productos.php",
            success: function (result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de de casos de exito del foooter
    $("#foo7btn").click(function () {
        $.ajax({
            url: '/parnett/paginas/casos_de_exito.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de contacto del footer
    $("#foo8btn").click(function () {
        $.ajax({
            url: '/parnett/paginas/contactos.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });

    //Boton de sugerencias del footer
    $("#foo9btn").click(function () {
        $.ajax({
            url: '/parnett/paginas/sugerencias.php',
            success: function(result) {
                $("#principal").html(result);
            }
        });
    });
})