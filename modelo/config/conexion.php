<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "db_hardsoft";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$base_datos", $usuario, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Conexión establecida";
} catch (PDOException $error) {
    // Muestra un mensaje amigable al usuario en caso de error de conexión
    echo "No se pudo conectar a la base de datos. Por favor, inténtalo de nuevo más tarde.";
    // Registra el error en un archivo de registro para fines de depuración
    error_log("Error de conexión a la base de datos: " . $error->getMessage(), 0);
    // Detén la ejecución del script
    exit();
}
?>
