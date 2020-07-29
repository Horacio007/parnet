<html>
<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="col-xs-12">
        <img src="/parnett/img/bloggg.png" id="carr2">
    </div>
    <div class="col-xs-12">
        <center><h1 style="color: #fffb00"><strong>Solicitud de servicios</strong></h1></center>
        <p style="color: white">Complete los datos requeridos para enviar una solicitud de servicios.</p>
    </div>
    <form class="col-xs-12" accept-charset="utf-8" id="formdata">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <label for="areas" style="color: white">Áreas:</label>
                </div>
                <div class="col-xs-6" id="select_areas">
                    
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <label for="desc" style="color: #fff0ff">Asunto:</label>
                </div>
                <div class="col-xs-6">
                    <input class="form-control" type="text" id="desc" placeholder="Asunto..." required="required">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <label for="tel" style="color: white">Teléfono:</label>
                </div>
                <div class="col-xs-6">
                    <input class="form-control" type="tel" id="tel" pattern="[0-9]{10}" maxlength="10" placeholder="Teléfono..." required="required">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-1">
                    <label for="email" style="color: white">E-mail:</label>
                </div>
                <div class="col-xs-6">
                    <input class="form-control" type="email" id="email"  placeholder="E-mail..." required="required">
                </div>
            </div>
        </div>
        <br>
        <div class="col-xs-12">
            <div class="col-xs-1"></div>
            <div class="col-xs-5">
                <div class="g-recaptcha" data-sitekey="6LfH4u0UAAAAAP2iM5RpHHbBYMk1sMkmqVzg-6tm" data-theme="light"></div>
            </div>
        </div>
        <br>
        <div class="col-xs-12">
            <div class="col-xs-1"></div>
            <br>
            <div class="col-xs-6">
                <button type="button" class="btn btn-info pull-right" id="btn_insert_serv" style="color: white; background-color: #0a83bf">Enviar</button>
            </div>
        </div>
    </form>
</div>

<!--grafica-->
<link rel="stylesheet" href="/parnett/css/estilo.css" type="text/css" media="screen">

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="/parnett/js/servicios_cursos.js"></script>
</html>