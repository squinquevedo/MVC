<?php

require_once "carro.php";

$carroEspecial1 = new carro("amarillo","Audi","A5",800,22, 5);
$carroEspecial2 = new carro("rojo","chevrolet","camaro",800,22, 5);
$carroEspecial3 = new carro("azul","mercedesbenz","C300",800,22, 5);
$carroEspecial4 = new carro("verde","Nissan","Skyline",800,22, 5);


var_dump($carroEspecial1);
var_dump($carroEspecial2);
var_dump($carroEspecial3);
var_dump($carroEspecial4);
