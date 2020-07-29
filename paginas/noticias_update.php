<?php
include('../class/class_noticias_dal.php');

if (isset($_POST['idnoticia'])) {
    //verificar si se hicieron cambios
    $id= $_POST["idnoticia"];
    $descripcion = $_POST['descripcion'];
    $objeto2 = new noticias_dal();
    $resultado2 = $objeto2->select_by_idnoticia($id);

    foreach ($resultado2 as $key => $value) {
        $nombrea = $value->getTituloNoticia();
        $descripciona = $value->getDescripcionNoticia();
    }

    if ($descripcion==$descripciona){
        echo "No hubo ningun cambio, no se modifico la base de datos";
    }
    else{
        $objeto = new noticias_dal();
        $resultado = $objeto->update_noticia($id,$descripcion);
        
        if ($resultado == 1) {
            echo "Noticia actualizada";
        } else {
            echo "Noticia no actualizada";
        }  
    } 
}
else{
    echo"No llegaron los datos";
}
?>