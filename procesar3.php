<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$edad = $_POST["edad"];

if($edad >= 18){
    echo "Sos mayor de edad";
}else{
    echo "Sos menor de edad";
}




}