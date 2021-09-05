<?php

require_once 'funciones.php';

$conexion = conexion('heroku_8d9e722ab58ceb6', 'b0526ccb9ea09d', '337b8657');

if (!$conexion) {

    print_r('no hay conexion');
    die();

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {

    $check = getimagesize($_FILES['foto']['tmp_name']);
    if ($check !== false) {
        $carpeta_destino = 'pictures/';
        $archivo_subido = $carpeta_destino . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

        $statemen = $conexion->prepare('INSERT INTO imagenes (titulo, imagen, texto) VALUES (?, ?, ?)');
        $statemen->execute(array(
            $_POST['titulo'], 
            $_FILES['foto']['name'], 
            $_POST['descripcion']
        ));
        header('Location: index.php');
    } else {
        $error = "El archivo no es una imagen o es muy pesado";
    }

}
    require_once 'views/pages/subida.view.php';

?>