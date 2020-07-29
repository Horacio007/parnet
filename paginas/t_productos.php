<?php

include("../class/class_productos_dal.php");

    if (isset($_POST['catalago_productos'])) {
        $obj_dato_productos=new productos_dal;

        $result_dato_productos=$obj_dato_productos->select_productos();

        if($result_dato_productos!=Null){
            foreach($result_dato_productos as $key => $value){
                $salida ="<tr>
                <td>".$value->getNombreProducto()."</td>
                <td>".$value->getDescripcionProducto()."</td>
                <td><img src='".$value->getImagen()."'width='100' height=''100 /></td>
                <td>".$value->getCosto()."</td>
                <td>".$value->getStock()."</td>
                <td> <a href='/parnett/paginas/ficha_tecnica.php?id=".$value->getIdProducto()."' class='ver btn btn-danger btn-sm' target='_blank'>PDF</a></td>
                </tr>";
                echo $salida;
            }
           
        }else { 
            echo "No se encontraron registros";
        }    
    }   
?>