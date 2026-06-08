<?php
require_once "conexion.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
$nombre = $_POST["nombre"];
$pais = $_POST["pais"];


if(empty($nombre) or empty($pais)){
    echo "<script>
    alert('campos vacíos');
    window.history.back();
    </script>";
} else{




$sql = "INSERT INTO equipos (nombre, pais)
    values('$nombre', '$pais')";
    mysqli_query($conexion, $sql);

    mysqli_close($conexion);

    echo "Equipo ingresado correctamente";

} 
}else{
    echo "Acceso denegado";
}











?>