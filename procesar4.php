<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$usuario = $_POST["usuario"];
$contrasenia = $_POST["contraseña"];

if($usuario == "admin" and $contrasenia == "1234" ){
echo "Acceso Permitido";
} else{
    echo "Datos Incorrectos";
}

}


