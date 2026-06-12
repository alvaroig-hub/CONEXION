<?php
/* if($SERVER["REQUEST_METHOD"] == "POST"){
$variable = $_POST['nombre'];
}

else{
    
    }


*/

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    echo "Hola ".$nombre." bienvenido.";
}