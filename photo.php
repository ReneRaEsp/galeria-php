<?php

require_once 'funciones.php';

$conexion = conexion('heroku_8d9e722ab58ceb6', 'b0526ccb9ea09d', '337b8657');

if (!$conexion) {
    header('Location: error.php');
}

$id = $_GET['id'];

if (!$id){
    header('Location: error.php');
}

$result_set = $conexion->query("SELECT * FROM imagenes WHERE id = $id");

$foto = $result_set->fetch();

if (!$foto) {
    header('Location: error.php');
}

require_once 'views/pages/photo.view.php';

?>