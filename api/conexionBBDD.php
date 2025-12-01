<?php

$Repit=false;
$host="localhost";
$user="root";
$password="fqfq2wgh3h3h";

$link= mysqli_connect($host,$user,$password);
$tildes=$link->query("SET NAMES 'utf8'");
mysqli_select_db($link,'periodicos');