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
            <center><h1 style="color: #fffb00">Lista de Sugerencias</h1></center><br>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-md-12"> 
            <div class="panel panel-default">
                <div class="panel-body" id="panel">
                    <div class="table-responsive">
                        <table id="lista_sugerencias" class="table table-striped table-bordered" border="0">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Id</th>
                                    <th>Titulo</th>
                                    <th>Remitente</th>
                                    <th>E-mail</th>
                                    <th>Teléfono</th>
                                    <th>Sugerencia</th>
                                </tr>
                            </thead>
                            <tbody id="listado_sugerencias">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="/parnett/css/estilo.css" type="text/css" media="screen">
    <script src="/parnett/js/sugerencias_admin.js"></script>
</body>
</html>