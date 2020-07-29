<?php
    include("../class/class_areas_dal.php");
    if(isset($_POST['areas_select'])){
        $obj_lista_areas=new areas_dal;
        $lista_areas=$obj_lista_areas->select_areas();
      
        if ($lista_areas==NULL){
            echo '<select name="sarea" id="saread" class="form-control"><option value="0">No hay areas registradas</option>';
        }
        else{
            $output = '<select name="sarea" id="saread" class="form-control"><option value="0">Seleccione Area:</option>';

            foreach ($lista_areas as $key => $value) {
              $output .= '<option value="'.$value->getIdArea().'">'.$value->getNombreArea().'</option>';     
          }
            $output .= '</select>';
            echo $output;
        }    //cierre de foreach lista de personas
        
    }
      
?>