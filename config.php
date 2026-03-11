<?php

session_start();

$host = "localhost";
$user = "root";
$pass = " ";
$db = "stellar_academy";

$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_error){
    die("Erro de conexão");
}

?>