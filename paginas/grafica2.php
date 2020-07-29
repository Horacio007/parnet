<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Grafica con Plotly</title>
</head>
<body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-succes">
					<div class="panel panel-heading">
						Graficas con plot.ly js (Facultad de Sistemas)
					</div>
					<div class="panel panel-body">
						<div class="row">
							<div class="col-md-12">
								<div id="cargaLineal"></div>
							</div>
						</div>
					</div>
				</div>
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
        $("#cargaLineal").load("graficass.php");
    });
</script>