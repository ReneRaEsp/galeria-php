<?php

function conexion($db, $user, $pass){
    try {
        $conexion = new PDO("mysql:host=us-cdbr-east-04.cleardb.com;dbname=$db", $user, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

?>