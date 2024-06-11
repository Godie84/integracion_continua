<?php
// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establecer conexión a la base de datos
    require '../modelo/config/conexion.php'; // Reemplaza 'conexion.php' con el nombre de tu archivo de conexión

    // Recoger los datos del formulario
    $firstName = $_POST['txtFirstName'];
    $email = $_POST['txtEmail'];
    $status = $_POST['txtStatus'];
    $rol = $_POST['txtRol'];
    $password = $_POST['txtPassword'];

    // Hash de la contraseña (reemplaza esto con tu método de hash preferido)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Preparar la consulta SQL para insertar datos
    $consulta = $conexion->prepare("INSERT INTO users_db (first_name_users_db, email_users_db, status_users_db, rol_users_db, password_users_db) VALUES (?, ?, ?, ?, ?)");
    $consulta->execute([$firstName, $email, $status, $rol, $hashedPassword]);

    // Verificar si la inserción fue exitosa
    if ($consulta->rowCount() > 0) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar usuario";
    }
} else {
    // Si no se recibieron datos del formulario, redirigir al formulario de registro
    header("Location: formulario_registro.php");
    exit();
}
?>
