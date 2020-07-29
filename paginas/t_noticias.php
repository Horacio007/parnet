<?php
    include("../class/class_noticias_dal.php");
    
    if(isset($_POST['catalago_noticias'])){
        $obj = new noticias_dal;
        $lista = $obj->select_noticias();
        $obj2 = new noticias_dal;
        $lista2 = $obj->count_noticas();

        if ($lista2 == 0) {
            echo "No existen recursos";
        }
        else {
            foreach($lista as $key => $value){
                $salida ="<tr>
                <td><img src='".$value->getImagenNoticia()."' 'width='80%' height='80%'/></td>
                </tr>";
                echo $salida;
            }
        }
    }
?>
                
                    
                    
                
                
                    
                    
                
