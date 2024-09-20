<?php

$Servidor ="localhost";
$Usuarios ="root";
$Password =" ";
$BD = "usuarios";


$Conecta =new mysqli($Servidor,$Usuarios,$Password,$BD);

if($Conecta->connect_error){
    die("Error".$Conecta->connect_error);
}
?>