<?php
include "conexion.php";
class querys extends conexion
{

    //**************************************
    //              ACTIONS
    //*************************************
    public function create($dni, $nombre, $apellido, $carrera){
        $query = "INSERT INTO alumno VALUES($dni, '$nombre', '$apellido', '$carrera')";
        try {
            $con = $this->get_conection();
            $con->query($query);

            return true;

        }catch (Exception $e){
            echo $e->getMessage();
            return false;
        } finally {
            try {
                $con->close();
            }catch (Exception $e){
                return false;
            }
        }

    }

    //READ DATA TABLE.
    public  function read(){
        $query = "SELECT * FROM alumno";
        try {
            $con = $this->get_conection();
            $resutl = $con->query($query)->fetch_all();
            return  $resutl;

        }catch (Exception $e){
            echo $e->getMessage();
        } finally {
            try {
                mysqli_close($con);
            }catch (Exception $e){
                return false;
            }
        }


    }

    public function delete($dni){
        $query = "DELETE FROM alumno WHERE dni=$dni";
        try {
            $con = $this->get_conection();
            $con->query($query);
            $con->commit();
            return true;
        }catch (Exception $e){
            echo $e->getMessage();

        } finally {
            try {
                $con->close();

            }catch (Exception $e){
                return false;
            }
        }
        return  false;
    }

    //GET VALUES AND UPDATE

    public function get_data($dni){
        $query = "SELECT * FROM alumno WHERE dni=$dni";
        try {
            $con = $this->get_conection();
            $result = $con->query($query)->fetch_array();
            return $result;
        }catch (Exception $e){
            echo $e->getMessage();

        } finally {
            try {
                $con->close();

            }catch (Exception $e){
                return  false;

            }
        }

    }


    public function update($id, $dni, $nombre, $apellido, $carrera){
        $query = "UPDATE  alumno SET dni=$dni, nombre='$nombre', apellido='$apellido', carrera='$carrera' WHERE dni=$id";
        try {
            $con = $this->get_conection();
            $con->query($query);
            $con->commit();
            return true;
        }catch (Exception $e){
            echo $e->getMessage();

        } finally {
            try {
                $con->close();

            }catch (Exception $e){
                return false;
            }
        }
    }




}

