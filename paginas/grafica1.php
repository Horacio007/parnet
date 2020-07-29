<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/parnett/css/estilo.css" type="text/css" media="screen">
</head>
<body>
    <div class="container-fluid">
        <div class="form-group col-md-12">
            <button class='update btn btn-primary btn-sm pull-right' data-toggle='modal' data-target='#modalI' id="servicios">Servicios</button>
            <button class='update btn btn-primary btn-sm pull-right' data-toggle='modal' data-target='#modalI' id="productos">Productos</button>
        </div>
        <br>
		<div class="row">
            <div class="col-md-12">
				<div id="cargaLineal"></div>
			</div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
				<div id="grafica"></div>
			</div>
        </div>
        
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="/parnett/js/plotly-latest.min.js"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function (){
        $("#servicios").on('click', function(){
            $("#cargaLineal").load("/parnett/paginas/graficas.php");
        });

        $("#productos").on('click', function(){
            $("#grafica").load("/parnett/paginas/graficass.php");
        });
    });
</script>