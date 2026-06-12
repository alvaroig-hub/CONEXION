<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$n1 = $_POST["numero1"];
$n2 = $_POST["numero2"];

$operacion = $_POST["operacion"];

switch($operacion){
case "+":
    echo $n1 + $n2;
    break;

case "-":
    echo $n1 - $n2;
    break;

case "*":
    echo $n1 * $n2;
    break;

case "/":
    echo $n1 / $n2;
    break;
}


}