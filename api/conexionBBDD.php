<?php

$Repit=false;

$host = getenv("localhost");
$user = getenv("root");
$password = getenv("fqfq2wgh3h3h");
$db_name = getenv("periodicos") ?: 'periodicos';

$link = mysqli_connect($host, $user, $password);
if(mysqli_connect_error()){
    error_log("Conexión a la Base de Datos ha fallado: " . mysqli_connect_error());
} else {
    $tildes = $link->query("SET NAMES 'utf8'");
    mysqli_select_db($link, $db_name);
}