<?php
$server ="localhost";
$user = "root";
$password = "";
$banco = "sync360";

$conn = mysqli_connect($server, $user, $password, $banco);

if(!$conn){
    die("Falha na conexão com banco de dados: ".mysqli_connect_error());
}else{
    // echo "Conexão bem sucedida";
}
