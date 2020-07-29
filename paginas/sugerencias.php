<html>
<head>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <div class="col-xs-12">
        <img src="/parnett/img/sugerencia.png" id="carr2">
    </div>
    <div class="col-xs-12">
        <center><h1 style="color: #fffb00"><strong>Sugerencias</strong></h1></center>
        <p style="color: white">Tu opinion es importante para mejorar nuestras atenciones y productos.</p><br>
        <p style="color: white">Complete los datos requeridos para enviar una sugerencia.</p>
    </div>
    <div class="row">
        <form class="col-xs-12" accept-charset="utf-8" id="formdata">
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-2">
                        <label for="titulo" style="color: white">Titulo:</label>
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" type="text" id="tsugerencia" placeholder="Titulo..." required="required">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-2">
                        <label for="remitente" style="color: #fff0ff">Remitente:</label>
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" type="text" id="rsugerencia" placeholder="Remitente..." required="required">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-2">
                        <label for="email" style="color: white">E-mail:</label>
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" type="email" id="esugerencia" placeholder="E-mail..." required="required">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-2">
                        <label for="telefono" style="color: white">Teléfono:</label>
                    </div>
                    <div class="col-xs-6">
                        <input class="form-control" type="tel" id="telsugerencia" pattern="[0-9]{10}" maxlength="10" placeholder="Teléfono..." required="required">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="col-xs-2">
                        <label for="mensaje" style="color: white">Mensaje:</label>
                    </div>
                    <div class="col-xs-6">
                        <br>
                        <textarea class="form-control" name="tareasugerencia" id="tareasugerencia" cols="50" rows="5" placeholder="Mensaje..."></textarea>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-xs-12">
                <div class="col-xs-2"></div>
                <div class="col-xs-6">
                    <div class="g-recaptcha" data-sitekey="6LfH4u0UAAAAAP2iM5RpHHbBYMk1sMkmqVzg-6tm" data-theme="light"></div>
                </div>
            </div>
            <br>
            <div class="col-xs-12">
                <div class="col-xs-6"></div>
                <br>
                <div class="col-xs-6">
                    <button type="button" class="btn btn-info pull-right" id="btn_insert_sug" style="color: white; background-color: #0a83bf">Enviar</button>
                </div>
            </div>
    </form>
    </div>
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
<script src="/parnett/js/sugerencias.js"></script>
</html>