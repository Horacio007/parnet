<html>
<head>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="col-xs-12">
        <img src="/parnett/img/clienteees.png" id="carr22">
    </div>
    <div class="row">
        <div class="col-xs-6">
            <h1 style="color: #fffb00"><strong>Contáctanos</strong></h1>
            <h3 style="color: white">Horario de Atención</h3>
            <p style="color: white">
                8:00 am - 2:00 pm
                <br>
                3:00 pm - 6:00 pm
            </p>
            <p style="color: white">Complete los datos requeridos para contactarnos</p>
            <form id="formdata">
                <div class="row">
                    <div class="col-xs-2">
                        <label for="empresa" style="color: white">Empresa:</label>
                    </div>
                    <div class="col-xs-8">
                        <input class="form-control" type="text" name="empresa" id="empresa" placeholder="Empresa..." required="required">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        <label for="nombre" style="color: white">Nombre:</label>
                    </div>
                    <div class="col-xs-8">
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre..." required="required">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        <label for="telefono" style="color: white">Teléfono:</label>
                    </div>
                    <div class="col-xs-8">
                        <input class="form-control" type="tel" name="telefono" id="telefono" pattern="[0-9]{10}" maxlength="10" placeholder="Teléfono..." required="required">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        <label for="correo" style="color: white">Correo:</label>
                    </div>
                    <div class="col-xs-8">
                        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail..." required="required">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-2">
                        <label for="mensaje" style="color: white">Mensaje:</label>
                    </div>
                    <div class="col-xs-8">
                        <textarea class="form-control" name="tarea" id="tarea" cols="50" rows="4" placeholder="Mensaje..."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-8">
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LfH4u0UAAAAAP2iM5RpHHbBYMk1sMkmqVzg-6tm" data-theme="light"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-2">

                    </div>
                    <div class="col-xs-8">
                        <br>
                        <button type="button" class="btn btn-info pull-right" id="btn_correo" style="color: white; background-color: #0a83bf">Enviar Correo</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-6 text-center">
            <div class="row">
                <br>
                <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7206.90228074973!2d-100.9883995558413!3d25.42317665080126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868872b10fe01b2b%3A0x642046ebebad83df!2sCalle%20Gral.%20Ram%C3%B3n%20Corona%201131%2C%20Zona%20Centro%2C%2025000%20Saltillo%2C%20Coah.!5e0!3m2!1ses-419!2smx!4v1590205817504!5m2!1ses-419!2smx" width="370" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>   
            <div class="row">
                <div class="col-xs-12 text-align-center">
                    <h3 style="color: #fffb00">Matriz Saltillo</h3>
                    <p style="color: white">
                        Conmutador:
                        <br>
                        (844) 414.27.07, 08 y 09
                        <br>
                        ventas.saltillo@parnetmx.com
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-align-center">
                    <h3 style="color: #fffb00">Filial Monclova</h3>
                    <p style="color: white">
                        Teléfono:
                        <br>
                        (866) 695.32.99
                        <br>
                        ventas.monclova@parnetmx.com
                    </p>
                </div>
            </div>    
        </div>
    </div>
</div>

<link rel="stylesheet" href="/parnett/css/estilo.css" type="text/css" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="/parnett/js/contactos.js"></script>
</body>
</html>