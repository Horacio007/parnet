<?php

include("class_admin.php");
include("class_conexion.php");

class admin_dal extends class_db
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
    function insert_admin($id_admin, $usuario, $psdw)
    {
        $insert_customer = "INSERT INTO admin(id_admin, usuario, psdw) VALUES(";
        $insert_customer .= "'" . $id_admin . "',";
        $insert_customer .= "'" . $usuario . "',";
        $insert_customer .= "'" . $psdw . "',";
        //print $insert_customer; exit;

        $this->set_sql($insert_customer);
        $this->db_conn->set_charset('utf8');

        mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));

        if (mysqli_affected_rows($this->db_conn) == 1) {
            $inserted = 1;
        } else {
            $inserted = 0;
        }

        return $inserted;
    }

    //update
    function update_admin( $id_admin, $psdw, $usuario)
    {
        $update_customer = "UPDATE admin SET ";
        $update_customer .= "id_admin = '" . $id_admin . "',";
        $update_customer .= "usuario = '" . $usuario . "',";
        $update_customer .= "psdw = '" . $psdw . "',";
        //print $insert_customer; exit;

        $this->set_sql($update_customer);
        $this->db_conn->set_charset('utf8');

        mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));

        if (mysqli_affected_rows($this->db_conn) == 1) {
            $updated = 1;
        } else {
            $updated = 0;
        }

        return $updated;
    }

    //delete
    function delete_admin($id_cli)
    {
        $delete_customer = "DELETE FROM admin WHERE id_admin = $id_admin";
        //print $delete_customer; exit;

        $this->set_sql($delete_customer);
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
    function select_admin()
    {
        $select_customers = "SELECT * FROM admin";
        //print $select_customers; exit;

        $this->set_sql($select_customers);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $object = new admin;

            /*los nombres entre comillas son los nombres de las columnas de las tablas
            se usan los set para enviar el valor al objeto y con el get obtenemos el valor
            donde lo invoquemos*/
            
            $object->setRfc($row["id_admin"]);
            $object->setNombre($row["usuario"]);
            $object->setPaterno($row["psdw"]);
        
            $counter++;
            $list[$counter] = $object;
            unset($object);
        }
        return $list;
    }

    //exists cliente
    function exists_usuario($user,$psdw)
    {
        $sql_exists = "SELECT psdw FROM admin WHERE usuario = '$user' and psdw = '$psdw'";

        $this->set_sql($sql_exists);
        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);
        if($total_result == 1){
            $re=1;
        }else{
            $re=0;
        }

        return $re;
    }
}