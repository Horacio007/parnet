<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/parnett/librerias/DataTables-1.10.20/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/parnett/librerias/Buttons-1.6.1/css/buttons.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/parnett/librerias/Responsive-2.2.3/css/responsive.dataTables.min.css"/>
</head>
<body>
    <div class="row">
        <div class="col-xs-12">
            <center><h1 style="color: #fffb00">Lista de Productos</h1></center><br>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12"> 
            <div class="panel panel-default">
                <div class="panel-body" id="panel">
                    <div class="table-responsive">
                        <table id="lista_productos" class="table table-striped table-bordered" border="0">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Imagen</th>
                                    <th>Costo</th>
                                    <th>Stock</th>
                                    <th>Ficha Tecnica</th>
                                </tr>
                            </thead>
                            <tbody id="listado_productos">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>           
        </div>
    </div>
    <script type="text/javascript" src="/parnett/librerias/JSZip-2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="/parnett/librerias/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="/parnett/librerias/pdfmake-0.1.36/vfs_fonts.js"></script>

    <script type="text/javascript" src="/parnett/librerias/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/parnett/librerias/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="/parnett/librerias/Buttons-1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="/parnett/librerias/Buttons-1.6.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="/parnett/librerias/Responsive-2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/parnett/css/estilo.css" type="text/css" media="screen">
    <script src="/parnett/js/productos.js"></script>
</body>
</html>