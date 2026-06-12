<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$curso = $_POST["curso"];

echo "Alumno Registrado: <br> Nombre: ".$nombre." <br>Edad: ".$edad." <br>Curso: ".$curso;




}