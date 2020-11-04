<?php


class conexion
{
    private $url = 'localhost:3306';
    private $user = 'root';
    private $pass = 'root';
    private $db = 'prueba';

    public function get_conection()
    {
        try {
            return mysqli_connect($this->url, $this->user, $this->pass, $this->db);

        } catch (Exception $e) {
            echo "<h2 class='text-danger'>".$e->getMessage();
            return false;

        }
    }

}