<?php

include("class_areas.php");
include("class_conexion.php");

class areas_dal extends class_db
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
    function insert_area($nombreArea)
    {
        $insert_area = "INSERT INTO areas (nombre_area) VALUES (";
        $insert_area .= "'" . $nombreArea . "')";
        //print $sql_insert; exit;

        $this->set_sql($insert_area);
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
    function update_area($idArea, $nombreArea)
    {
        $update_area = "UPDATE areas SET ";
        $update_area .= "nombre_area = '" . $nombreArea . "'";
        $update_area .= " WHERE id_area = $idArea";
        //print $sql_update; exit;

        $this->set_sql($update_area);
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
    function delete_area($idArea)
    {
        $delete_area = "DELETE FROM areas WHERE id_area = $idArea";
        //print $sql_delete; exit;

        $this->set_sql($delete_area);
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
    function select_areas()
    {
        $select_areas = "SELECT id_area, nombre_area FROM areas";
        //print $sql_select; exit;

        $this->set_sql($select_areas);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $object = new areas;

            /*los nombres entre comillas son los nombres de las columnas de las tablas
            se usan los set para enviar el valor al objeto y con el get obtenemos el valor
            donde lo invoquemos*/
            $object->setIdArea($row["id_area"]);
            $object->setNombreArea($row["nombre_area"]);

            $counter++;
            $list[$counter] = $object;
            unset($object);
        }
        return $list;
    }

    //select by id_area
    function select_by_idarea($id)
    {
        $select_by_idarea = "SELECT id_area, nombre_area FROM areas WHERE id_area = $id";
        //print $sql_select_by_id; exit;

        $this->set_sql($select_by_idarea);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        $object = null;
        $row = mysqli_fetch_assoc($result);

        if ($total_result > 0) {
            $object = new areas(
                $row["id_area"],
                utf8_encode($row["nombre_area"])
            );
        }
        return $object;
    }
}