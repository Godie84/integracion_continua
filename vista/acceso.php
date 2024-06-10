<?php
session_start();
include "../vista/template/cabecera.php";
include "../vista/template/nav.php";
require "../vista/template/text_title.php";

function mostrarError($mensaje) {
    echo "<div class='alert alert-danger' role='alert'>$mensaje</div>";
}

$title = title_acceso();
?>

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-6">
                <div class="card shadow rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body p-md-5 mx-md-4">
                                <h5 class="card-title text-center">Login</h5>
                                <div class="text-center mb-4">
                                    <img src="../assets/img/Logotipo.png" style="width: 180px; height: 40px;" alt="logo de empresa">
                                    <br><br>
                                </div>
                                <?php echo $title; ?>
                                <form id="form-login" action="../modelo/config/loguear.php" method="POST">
                                    <div class="form-outline mb-4">
                                        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" autocomplete="off" required />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" required />
                                    </div>
                                    <?php
                                    if (isset($_GET["fallo"]) && $_GET["fallo"] == 'true') {
                                        mostrarError("Usuario o contraseña inválido");
                                    }
                                    if (isset($_GET["user_fallo"]) && $_GET["user_fallo"] == 'true') {
                                        mostrarError("Este usuario no tiene acceso");
                                    }
                                    ?>

                                    <div class="text-center pt-1 mb-1 pb-1">
                                        <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 btn-sm">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "../vista/template/footer.php"; ?>
