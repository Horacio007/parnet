<?php
include('../class/class_productos_dal.php');

if (isset($_POST['idproducto'])) {
    //verificar si se hicieron cambios
    $id= $_POST["idproducto"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST['descripcion'];
    $costo= $_POST["costo"];
    $stock = $_POST["stock"];
    $objeto2 = new productos_dal();
    $resultado2 = $objeto2->select_by_idproducto($id);

    foreach ($resultado2 as $key => $value) {
        $nombrea = $value->getNombreProducto();
        $descripciona = $value->getDescripcionProducto();
        $costoa = $value->getCosto();
        $stocka = $value->getStock();
    }

    if ($nombre==$nombrea && $descripcion==$descripciona && $costo==$costoa && $stock==$stocka){
        echo "No hubo ningun cambio, no se modifico la base de datos";
    }
    else{
        $objeto = new productos_dal();
        $resultado = $objeto->update_producto($id,$nombre,$descripcion, $costo, $stock);
        
        if ($resultado == 1) {
            echo "Producto actualizado";
        } else {
            echo "Producto no actualizado";
        }  
    } 
}
else{
    echo"No llegaron los datos";
}
?>