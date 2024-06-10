<?php
include "../vista/template/cabecera.php";
include "../vista/template/nav.php";
require "../vista/template/text_title.php";
?>
<?php title_servicios(); ?>

<h1>Usuarios</h1>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <!-- Agregar los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+zG0tqLkPZdYW+OnqOwJwtsu5+8FyX2E02S9ZJj" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5 mb-5">
        <h2 class="mb-4">Formulario de Registro</h2>
        <form action="procesar_registro.php" method="POST">
            <div class="mb-3">
                <label for="txtFirstName" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" required>
            </div>
            <div class="mb-3">
                <label for="txtEmail" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
            </div>
            <div class="mb-3">
                <label for="txtStatus" class="form-label">Estado:</label>
                <select class="form-select" id="txtStatus" name="txtStatus" required>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtRol" class="form-label">Rol:</label>
                <select class="form-select" id="txtRol" name="txtRol" required>
                    <option value="1">Administrador</option>
                    <option value="2">Usuario</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="txtPassword" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="txtPassword" name="txtPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
    <!-- Agregar los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>




<?php include "../vista/template/footer.php"; ?>

</body>
</html>