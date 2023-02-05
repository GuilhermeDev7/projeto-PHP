<?php

$host = "localhost";
$user = "root";
$senha = "";
$db = "portifolio";

$mysqli = new mysqli($host, $user, $senha, $db);

if($mysqli->errno) {
        die("Não foi possivel se conectar com o banco de dados");
}