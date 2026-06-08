<?php
require_once "conexion.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$nombre = $_POST["circuito"];
$pais = $_POST["pais"];
$longitud = $_POST["longitud"];

if(empty($nombre) or empty($pais) or empty($longitud)){
    echo "<script>
    alert('campos vacíos');
    window.history.back();
    </script>";
}else{

$sql = "INSERT INTO circuitos (nombre, pais, longitud_km)
    values('$nombre', '$pais', '$longitud')";
    mysqli_query($conexion, $sql);



    mysqli_close($conexion);

    echo "circuito registrado correctamente";
} 

}else{
    echo "Acceso no permitido.";
}