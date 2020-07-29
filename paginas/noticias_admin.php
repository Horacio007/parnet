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
            <center><h1 style="color: #fffb00">Lista de Noticias</h1></center><br>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <button class='update btn btn-success btn-sm pull-right' data-toggle='modal' data-target='#modalI' id="insertar">Insertar</button>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12"> 
            <div class="panel panel-default">
                <div class="panel-body" id="panel">
                    <div class="table-responsive">
                        <table id="lista_noticias" class="table table-striped table-bordered" border="0">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Imagen</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody id="listado_noticias">

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
    <script src="/parnett/js/noticias_admin.js"></script>
</body>
</html>
<div class='modal fade' id='modalI'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <legend class="text-center header">
                    <h4 class='modal-title'>Insertar Producto</h4>
                </legend>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form name="insert_form" method="post" id="formdataI">
                    <label for="ltitulo">Titulo:</label><br>
                    <input type="text" class="form-control" id="ititulo">
                    <label for="ldescripcion">Descripcion:</label><br>
                    <input type="text" class="form-control" id="idescripcion">
                    <label for="limagen">Imagen:</label>
                    <input type="file" class="form-control" id="iimagen">
                    <br>
                    <button type="button" class="btn btn-success btn-lg" id="btninsertar">Insertar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class='modal fade' id='modalA'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <legend class="text-center header">
                    <h4 class='modal-title'>Modificar Producto</h4>
                </legend>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form name="insert_form" method="post" id="formdataA">
                    <input type="hidden" class="form-control" id="aid">
                    <label for="ldescripcion">Descripcion:</label><br>
                    <input type="text" class="form-control" id="adescripcion">
                    <br>
                    <button type="button" class="btn btn-success btn-lg" id="btnmodificar">Modificar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>