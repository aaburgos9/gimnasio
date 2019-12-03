<?php

    class Conexion{

        public function conectar(){
            $link= new PDO("mysql:host=localhost:3306; dbname=gimnasio","root","toradora");
            return ($link);
        }
    }


?>
