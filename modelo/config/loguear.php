<?php
session_start();
require '../config/conexion.php';

$email = $_POST['txtEmail'];
$pass = $_POST['txtPass'];

// Consulta para obtener los datos del usuario
$sentencia = $conexion->prepare('SELECT id_users_db, first_name_users_db, email_users_db, status_users_db, rol_users_db, password_users_db FROM users_db WHERE email_users_db = ?');
$sentencia->execute([$email]);
$datos = $sentencia->fetch(PDO::FETCH_ASSOC);

if ($datos === FALSE || !password_verify($pass, $datos['password_users_db'])) {
    // Si no se encontraron datos o la contraseña no coincide, redirigir al formulario de inicio de sesión con un mensaje de error
    header('Location: ../../index.php');
    exit();
}

// Iniciar sesión con los datos del usuario
$_SESSION['user_id'] = $datos['id_users_db'];
$_SESSION['nombre'] = $datos['first_name_users_db'];
$_SESSION['email'] = $datos['email_users_db'];
$_SESSION['estado'] = $datos['status_users_db'];
$_SESSION['rol'] = $datos['rol_users_db'];

// Redirigir según el rol del usuario
if ($_SESSION['rol'] == 1) {
    header('Location: ../../vista/admin.php');
} elseif ($_SESSION['rol'] == 2) {
    header('Location: ../');
} else {
    header('Location: ../../index.php');
}
exit();
?>

