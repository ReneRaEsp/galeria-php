<?php

require_once 'funciones.php';
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1) ;
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina = $fotos_por_pagina : 0 ;

$conexion = conexion('heroku_8d9e722ab58ceb6', 'b0526ccb9ea09d', '337b8657');

if (!$conexion) {
    echo 'error de conexion';
    header('Location: error.php');
} else {
    //print_r('conectado');
    //print_r($conexion);
}

$result_set = $conexion->query("SELECT SQL_CALC_FOUND_ROWS * FROM imagenes LIMIT $inicio, $fotos_por_pagina");
//$result_set = $conexion->query("SELECT * FROM imagenes");

$fotos = $result_set->fetchAll();

if(!$fotos) {
    header('Location: error.php');
}

$result_set = $conexion->query("SELECT FOUND_ROWS() as total_filas");
$total_post = $result_set->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);

require_once 'views/template.php';
