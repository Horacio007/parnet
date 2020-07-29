<?php

include("../class/class_productos_dal.php");

    if (isset($_POST['catalago_productos'])) {
        $obj_dato_productos=new productos_dal;

        $result_dato_productos=$obj_dato_productos->select_productos();

        if($result_dato_productos!=Null){
            foreach($result_dato_productos as $key => $value){
                $salida ="<tr>
                <td>".$value->getIdProducto()."</td>
                <td>".$value->getNombreProducto()."</td>
                <td>".$value->getDescripcionProducto()."</td>
                <td><img src='".$value->getImagen()."'width='100' height=''100 /></td>
                <td>".$value->getCosto()."</td>
                <td>".$value->getStock()."</td>
                <td>".$value->getAreaId()."</td>
                <td><button class='update btn btn-primary btn-sm' data-toggle='modal' data-target='#modalA' id='update_".$value->getIdProducto()."'data-id='".$value->getIdProducto()."'>Actualizar</button></td>
                <td><button class='delete btn btn-danger btn-sm' id='del_".$value->getIdProducto()."'data-id='".$value->getIdProducto()."'>Eliminar</button></td>
                </tr>";
                echo $salida;
            }
        }else { 
            echo "No se encontraron registros";
        }    
    }
?>