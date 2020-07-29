<?php

include('class_conexion.php');
include('class_productos.php');

class productos_dal extends class_db
{
    function __construct()
    {
        parent::__construct();
    }

    function __destruct()
    {
        parent::__destruct(); // TODO: Change the autogenerated stub
    }

    //insert
    function insert_producto($name, $desc, $img, $cost, $stock, $areaid)
    {
        /*$check = getimagesize($_FILES[$img]["tmp_name"]);
        if ($check != false) {
            $image = $_FILES[$img]['tmp_name'];
            $imgContenido = addslashes(file_get_contents($image));
        }*/
        $insert_product = "INSERT INTO productos (nombre_producto, descripcion_producto, imagen, costo, stock, area_id) VALUES (";
        $insert_product .= "'" . $name . "',";
        $insert_product .= "'" . $desc . "',";
        $insert_product .= "'" . $img . "',";
        $insert_product .= $cost . ",";
        $insert_product .= $stock . ",";
        $insert_product .= $areaid . ")";
        //print $insert_producto; exit;

        $this->set_sql($insert_product);
        $this->db_conn->set_charset('utf8');

        mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));

        if (mysqli_affected_rows($this->db_conn) == 1) {
            $inserted = 1;
        } else {
            $inserted = 0;
        }

        unset($object);
        return $inserted;
    }

    //delete
    function delete_producto($id)
    {
        $delete_product = "DELETE FROM productos WHERE id_producto = $id";
        //print $delete_product; exit;

        $this->set_sql($delete_product);
        $this->db_conn->set_charset('utf8');

        mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));

        if (mysqli_affected_rows($this->db_conn) == 1) {
            $deleted = 1;
        } else {
            $deleted = 0;
        }

        return $deleted;
    }

    //select all
    function select_productos()
    {
        $select_productos = "SELECT * FROM productos";
        //print $select_productos; exit;

        $this->set_sql($select_productos);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $object = new productos;

            /*los nombres entre comillas son los nombres de las columnas de las tablas
            se usan los set para enviar el valor al objeto y con el get obtenemos el valor
            donde lo invoquemos*/
            $object->setIdProducto($row["id_producto"]);
            $object->setNombreProducto($row["nombre_producto"]);
            $object->setDescripcionProducto($row["descripcion_producto"]);
            $object->setImagen($row["imagen"]);
            $object->setCosto($row["costo"]);
            $object->setStock($row["stock"]);
            $object->setAreaId($row["area_id"]);


            $counter++;
            $list[$counter] = $object;
            unset($object);
        }
        return $list;
    }

    //exists producto
    function exists_product($id_product)
    {
        $product = $this->db_conn->$id_product;
        $sql = "SELECT count(*) FROM productos WHERE id_producto = $id_product";

        $this->set_sql($sql);
        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);
        //$row = mysqli_fetch_array($result);
        //$total = $row[0];
        return $total_result;
    }

    //select by id_producto
    function select_by_idproducto($id)
    {
        $select_id_producto = "SELECT * FROM productos WHERE id_producto = $id";
        //print $select_id_producto; exit;

        $this->set_sql($select_id_producto);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        //$object = null;
        $i=0;
        while($renglon = mysqli_fetch_assoc($result)) {
                   $obj_det = new productos($renglon["id_producto"],
                   utf8_encode($renglon["nombre_producto"]),
                   utf8_encode($renglon["descripcion_producto"]),
                   $renglon["imagen"],
                   $renglon["costo"],
                   $renglon["stock"],
                $renglon["area_id"]);
    
  
            $i++;
            $lista[$i]=$obj_det;
            unset($obj_det);
        }
        mysqli_free_result($result);    
        return $lista;
    }

    //update
    function update_producto($id_producto, $nombre_producto,$descripcion_producto, $costo, $stock)
    {
        $update_producto = "UPDATE productos SET ";
        $update_producto .= "nombre_producto = '$nombre_producto', ";
        $update_producto .= "descripcion_producto = '$descripcion_producto', ";
        $update_producto .= "costo = $costo, ";
        $update_producto .= "stock = $stock ";
        $update_producto .= "WHERE id_producto = $id_producto";
        //print $update_producto; exit;

        $this->set_sql($update_producto);
        $this->db_conn->set_charset('utf8');

        mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));

        if (mysqli_affected_rows($this->db_conn) == 1) {
            $updated = 1;
        } else {
            $updated = 0;
        }
        unset($object);
        return $updated;
    }
}

?>