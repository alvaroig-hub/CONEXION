<?php


    $servidor = 'localhost';
    $nombre_bd = 'f1_2025';
    $usuario = 'root';
    $password = '';

    $conexion = mysqli_connect($servidor,$usuario,$password,$nombre_bd);
    if(!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


    mysqli_set_charset($conexion, "utf8mb4");

    echo "Conexión exitosa <br>";

    //mysqli_close($conexion);

?>