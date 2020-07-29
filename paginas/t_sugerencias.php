<?php

include("../class/class_sugerencias_dal.php");

    if (isset($_POST['sugerencias'])) {
        $obj_dato_sugerencias = new sugerencias_dal;

        $result_dato_sugerencias=$obj_dato_sugerencias->select_sugerencias();

        if($result_dato_sugerencias!=Null){
            foreach($result_dato_sugerencias as $key => $value){
                $salida ="<tr>
                <td>".$value->getIdSugerencia()."</td>
                <td>".$value->getTituloSugerencia()."</td>
                <td>".$value->getRemitenteSugerencia()."</td>
                <td>".$value->getEmailRemitenteSugerencia()."</td>
                <td>".$value->getTelRemitenteSugerencia()."</td>
                <td>".$value->getAsuntoSugerencia()."</td>
                </tr>";
                echo $salida;
            }
        }else { 
            echo "No se encontraron registros";
        }    
    }
?>