$(document).ready(function(){
    $.ajax({
        url: '/parnett/paginas/t_noticias_admin.php',
        type: 'POST',
        data: {
            catalago_noticias: true
        },
        success: function(result){
            document.getElementById("listado_noticias").innerHTML = result;

            if($("#listado_noticias").length){
                $('#lista_noticias').DataTable({
                    responsive: true,
                    destroy: true,
                    language: {
                        "sProcessing":     "Procesando...",
                                    "sLengthMenu":     "Mostrar _MENU_ registros",
                                    "sZeroRecords":    "No se encontraron resultados",
                                    "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                                    "sInfoPostFix":    "",
                                    "sSearch":         "Buscar:",
                                    "sUrl":            "",
                                    "sInfoThousands":  ",",
                                    "sLoadingRecords": "Cargando...",
                                    "oPaginate": {
                                        "sFirst":    "Primero",
                                        "sLast":     "Último",
                                        "sNext":     "Siguiente",
                                        "sPrevious": "Anterior"
                                    },
                                    "oAria": {
                                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                    },
                                    "buttons": {
                                        "copy": "Copiar",
                                        "colvis": "Visibilidad"
                                    }
                    },
    
                });

            }
            else{
                bootbox.aler("No existen noticias registrados");
                return false;
            }
        }
    });

    $("#insertar").on('click', function(){
        //muestro el modal 
        //$("#modalI").modal("show");
        //verifico la info para insertar el modal
        $("#btninsertar").on('click', function(){
            if ($("#ititulo").val().trim()=="") {
                bootbox.alert("Error: Ingrese un titulo");
                return false;
            }
            if ($("#idescripcion").val().trim()=="") {
                bootbox.alert("Error: Ingrese una descripcion");
                return false;
            }
            if ($("#iimagen").val().trim()=="") {
                bootbox.alert("Error: Ingrese una imagen")
                return false;
            }

            var imagen = $("#iimagen").val();
            imagen = imagen.replace(/\\/g, '/');
            var imagens = imagen.split('/');
            imagens = imagens.reverse();
            imagens.pop();
            imagens.pop();
            imagens = imagens.toString();
            var imgC = '/parnett/img/noticias/' + imagens;
            //imagens = "/parnett/img/productos/";
            //console.log(imagens, typeof(imagens), imgC);

            var datos = {
                nombre: $("#ititulo").val(),
                descripcion: $("#idescripcion").val(),
                imagen: imgC,
            }
            //console.log(datos.nombre, datos.descripcion, datos.imagen, datos.costo, datos.stock, datos.area);
            //mando la informacion del ajax
            $.ajax({
                url: "/parnett/paginas/noticias_insert.php",
                type: "POST",
                data: datos,
                success: function (result) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Oops...',
                        text: '' + result,
                    });
                    document.getElementById("formdataI").reset();
                    $("#modalI").modal("hide");
                }
            });
        });

    });

    //cuando preciono el boton de de actualizar sale el modal 
    $("#lista_noticias tbody").on('click', ".update",function(){
        bootbox.confirm({
            title: "Modificar?",
            message: "Si deseas Actualizar el nombre o la imagen, Ingresalo como una noticia nueva",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> Cancelar'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Aceptar'
                }
            },
            callback: function (result) {
                console.log('This was logged in the callback: ' + result);
                if (result==false) {
                    $("#modalA").modal('hide');
                }
            }
        });
        console.log("Si entra a edtiar");
        var idnoticia = $(this).parents("tr").find("td:first").html();
        var nombre = $(this).parents("tr").find('td').eq(1).html();
        var descripcion = $(this).parents("tr").find('td').eq(2).html();
        var imagen = $(this).parents("tr").find('td').eq(3).html();

        //elimino de la imagen la parte de la etiqueta html para quedarme con src=""
        imagen = imagen.split(' ');
        imagen.pop();
        imagen.pop();
        imagen.pop();
        imagen = imagen.reverse();
        imagen.pop();
        imagen = imagen.toString();
        //sigo trabajando la imagen 
        imagen = imagen.split('"');
        imagen.pop();
        imagen = imagen.reverse();
        imagen.pop();
        imagen = imagen.toString();
        imagen = imagen.split('/');
        imagen = imagen.reverse();
        imagen.pop();
        imagen.pop();
        imagen.pop();
        imagen.pop();
        imagen = imagen.toString();

        console.log(idnoticia, nombre, descripcion, imagen);

        $("#aid").val(idnoticia);
        $("#anombre").val(nombre);
        $("#adescripcion").val(descripcion);

        var datosAntes = {
            idnoticia: idnoticia,
            descripcion: descripcion,
        }

        $("#btnmodificar").on('click', function(){
            console.log("si entro al modificar");
            console.log(datosAntes.idnoticia, datosAntes.descripcion);
            var datosdespues = {
                idnoticia: $("#aid").val(),
                descripcion: $("#adescripcion").val(),
            }

            console.log(datosdespues.idnoticia, datosdespues.descripcion);

            $.ajax({
                url: '/parnett/paginas/noticias_update.php',
                type: 'POST',
                data: datosdespues,
                success: function(result){
                    console.log(result);
                    Swal.fire({
                        icon: 'success',
                        title: 'Oops...',
                        text: '' + result,
                    })
                    document.getElementById("formdataA").reset();
                    $("#modalA").modal("hide");
                }
            });
        
        });

    });

    $("#lista_noticias tbody").on('click', '.delete', function(){
        //console.log("entra a eliminar");
        var id= $(this).parents("tr").find("td:first").html();
        var id2 = this;
        //console.log(typeof(id), id);
        Swal.fire({
            title: 'Eliminar Noticia',
            text: "Realmente estas seguro?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#04B431',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sip',
            cancelButtonText: 'Ñop'
          }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '/parnett/paginas/noticias_delete.php',
                    type: 'POST',
                    data: {id:id},
                    success: function(data){
                        //console.log("entro al succes");
                        //bootbox.alert("Alumno Eliminado");
                        Swal.fire({
                            icon: 'success',
                            title: 'Producto Eliminado',
                            text: '' + data,
                        })
                        $(id2).closest('tr').css('background','tomato');
                        $(id2).closest('tr').fadeOut(1000,function(){
                            $(this).remove();
                        });
                        console.log(data);  
                    },
                    error: function(data){
                        console.log(data);
                    }
                });
            }
          })

    });
});