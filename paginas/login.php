<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="stylesheet" href="/parnett/css/estilo.css" type="text/css">
	<title></title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <center><h1 style="color: #fffb00">Acceso a administradores</h1></center>
    </div>
    <br>
    <div class="row">
        <center><img src="/parnett/img/sesiongif.gif" alt="No hay gif" id="sesion"></center>
    </div>
    <br>
    <br>
    <div class="row">
        <form id="formdata" class="col-xs-12">
            <div class="form-group">
                <div class="form-row col-xs-2"></div>
                <div class="form-row col-xs-3 text-right">
                    <label for="lusuario" style="color: white">Usuario:</label>
                </div>
                <div class="form-row col-xs-3">
                    <input class="form-control" type="text" id="usuario" name="usuario" maxlength="30" placeholder="Usuario...">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="form-row col-xs-2"></div>
                <div class="form-row col-xs-3 text-right">
                    <label for="lcontrasena" style="color: white">Contraseña:</label>
                </div>
                <div class="form-row col-xs-3">
                    <input class="form-control" type="password" id="contrasena" name="contrasena" maxlength="30" placeholder="Usuario...">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="form-row col-xs-3">

                </div>
                <div class="form-row col-xs-6">
                    <div class="g-recaptcha" data-sitekey="6LfH4u0UAAAAAP2iM5RpHHbBYMk1sMkmqVzg-6tm" data-theme="light"></div>
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <div class="form-row col-xs-5">

                </div>
                <div class="form-row col-xs-3">
                    <button type="button" class="btn btn-info pull-right" id="login" style="color: white; background-color: #0a83bf">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
<script src="js/validar_admin.js"></script>
</body>
</html>