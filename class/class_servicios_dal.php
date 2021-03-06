<?php

include('class_conexion.php');
include('class_servicios.php');

class servicios_dal extends class_db
{

    /**
     * servicios_dal constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * servicios_dal destructor.
     */
    public function __destruct()
    {
        parent::__destruct(); // TODO: Change the autogenerated stub
    }

    //insert
    function insert_servicio( $areaId, $desc, $tel, $email)
    {
        $insert_servicio = "INSERT INTO servicios(area_id, descripcion_servicio, tel_servicio, email_servicio)";
        $insert_servicio .= " VALUES (";
        $insert_servicio .= "'" . $areaId . "',";
        $insert_servicio .= "'" . $desc . "',";
        $insert_servicio .= "'" . $tel . "',";
        $insert_servicio .= "'" . $email . "')";
        //print $insert_servicio; exit;

        $this->set_sql($insert_servicio);
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
    function update_servicio($idServicio, $areaId, $desc, $tel, $email)
    {
        $update_servicio = "UPDATE servicios SET ";
        $update_servicio .= "area_id = '" . $areaId . "',";
        $update_servicio .= "descripcion_servicio = '" . $desc . "',";
        $update_servicio .= "tel_servicio = '" . $tel . "',";
        $update_servicio .= "email_servicio = " . $email;
        $update_servicio .= " WHERE ip_servicio = " . $idServicio;
        //print $update_servicio; exit;

        $this->set_sql($update_servicio);
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
    function delete_servicio($id_serv)
    {
        $delete_servicio = "DELETE FROM servicios WHERE id_servicio = $id_serv";
        //print $delete_servicio; exit;

        $this->set_sql($delete_servicio);
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
    function select_servicios()
    {
        $select_all = "SELECT * FROM servicios";
        //print $select_all; exit;

        $this->set_sql($select_all);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));

        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $object = new servicios();

            /*los nombres entre comillas son los nombres de las columnas de las tablas
            se usan los set para enviar el valor al objeto y con el get obtenemos el valor
            donde lo invoquemos*/
            $object->setIdServicio($row["id_servicio"]);
            $object->setAreaId($row["area_id"]);
            $object->setDescripcionServicio($row["descripcion_servicio"]);
            $object->setTelServicio($row["tel_servicio"]);
            $object->setEmailServicio($row["email_servicio"]);

            $counter++;
            $list[$counter] = $object;
            unset($object);
        }

        return $list;
    }

    //exists servicio
    function exists_servicio($idServ)
    {
        $sql_exists = "SELECT * FROM servicios WHERE id_servicio = $idServ";

        $this->set_sql($sql_exists);
        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        return $total_result;
    }

    //select by id_servicio
    function select_by_id($idServ)
    {
        $select_id_servicio = "SELECT * FROM servicios WHERE id_servicio = $idServ";
        //print $select_id_servicio; exit;

        $this->set_sql($select_id_servicio);
        $this->db_conn->set_charset('utf8');

        $result = mysqli_query($this->db_conn, $this->db_query) or die(mysqli_error($this->db_conn));
        $total_result = mysqli_num_rows($result);

        $object = null;
        $row = mysqli_fetch_assoc($result);
        if ($total_result > 0) {
            $object = new servicios(
                $row["id_servicio"],
                $row["area_id"],
                utf8_encode($row["descripcion_servicio"]),
                utf8_encode($row["tel_servicio"]),
                utf8_encode($row["email_servicio"])
            );
        }

        return $object;
    }
}