<?php

$Repit=false;

$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$db_name = getenv("DB_NAME") ?: 'periodicos';

$link = mysqli_connect($host, $user, $password);
if(mysqli_connect_error()){
    error_log("Conexión a la Base de Datos ha fallado: " . mysqli_connect_error());
} else {
    $tildes = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link, $db_name);
}