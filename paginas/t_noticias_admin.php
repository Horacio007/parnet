<?php
include("../class/class_noticias_dal.php");

    if (isset($_POST['catalago_noticias'])) {
        $obj_dato_noticias=new noticias_dal; 

        $result_dato_noticias=$obj_dato_noticias->select_noticias();

        if($result_dato_noticias!=Null){
            foreach($result_dato_noticias as  $key => $value){
                $salida ="<tr>
                <td>".$value->getIdNoticia()."</td>
                <td>".$value->getTituloNoticia()."</td>
                <td>".$value->getDescripcionNoticia()."</td>
                <td><img src='".$value->getImagenNoticia()."'width='100' height=''100 /></td>
                <td><button class='update btn btn-primary btn-sm' data-toggle='modal' data-target='#modalA' id='update_".$value->getIdNoticia()."'data-id='".$value->getIdNoticia()."'>Actualizar</button></td>
                <td><button class='delete btn btn-danger btn-sm' id='del_".$value->getIdNoticia()."'data-id='".$value->getIdNoticia()."'>Eliminar</button></td>
                </tr>";
                echo $salida;
            }
        }else { 
            echo "No se encontraron registros";
        }    
    }     
?>