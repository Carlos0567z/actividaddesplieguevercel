<?php

// INICIO DE CÓDIGO DE DEPURACIÓN TEMPORAL
$debug_host = getenv("DB_HOST");
if (empty($debug_host)) {
    die("ERROR DE DEPURACIÓN: DB_HOST no está definido en Vercel. Por favor, revísalo.");
}
// FIN DE CÓDIGO DE DEPURACIÓN TEMPORAL


$Repit = false;

// Lee las variables de entorno de Vercel
$host = $debug_host; // Ya lo obtuvimos arriba
$user = getenv("DB_USER");
$password = getenv("DB_PASSWORD");
$db_name = getenv("DB_NAME") ?: 'periodicos';
// Establece el puerto de MySQL por defecto
$port = 3306; 

// Conexión a la base de datos (se usa el puerto para forzar TCP/IP)
$link = mysqli_connect($host, $user, $password, $db_name, $port);

// ... (El resto del archivo de manejo de errores sigue aquí)