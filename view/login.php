<?php
require_once 'GoogleApi/config.php';
$loginURL = $gClient->createAuthUrl();

if (!empty($_SESSION['errMsg'])) {
    $errMsg = $_SESSION['errMsg'];
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eshop - Iniciar Sesión</title>
    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      href="static/static_template/images/favicon.png"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="static/css/login.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $("#ocultar").fadeOut(1500);
    },2000);
});
</script>

  </head>
  <body>
    <main>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 login-section-wrapper">
            <div class="brand-wrapper">
            <a href="index.php"><img src="static/images/logo.png" alt="logo" class="logo" /></a>
            </div>
            <div class="login-wrapper my-auto">
              <h1 class="login-title">Iniciar sesión</h1>
              <form action="../controller/ACTIONS/act_login.php" method="POST">
                <div class="form-group">
                  <label for="email">Correo electronico</label>
                  <input
                    type="text"
                    name="email"
                    id="email"
                    class="form-control"
                    placeholder="correo@example.com"
                    class="validate-input"
                    data-validate="Type email"
                  />
                </div>
                <div class="form-group mb-4">
                  <label for="password">Contraseña</label>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                    placeholder="enter your passsword"
                    vali
                    class="validate-input"
                    data-validate="Type password"
                  />
                </div>
                <input
                  name="login"
                  id="login"
                  class="btn btn-block login-btn"
                  type="submit"
                  value="Ingresar"
                />
              </form>

              <!-- ZONA DE MENSAJE -->
              <?php if (!empty($errMsg)): ?>
                <div class="alert alert-danger" role="alert" id="ocultar">
                  <strong><?=$errMsg?></strong>
                </div>
              <?php
$_SESSION['errMsg'] = '';
endif;?>

              <a href="reset_password/reset_pass.php" class="forgot-password-link"
                >¿Quieres recuperar tu contraseña?</a
              >
              <div class="flex">
                <a class="zmdi-google" onclick="window.location = '<?php echo $loginURL ?>';"
                  ><img src="static/icono/google.svg" alt="" />Continuar con Google</a
                >
                <!--

                <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Google" class="btn btn-danger zmdi-google">-->
              </div>
              <div class="flex">
                <a class="zmdi-facebook"
                  ><img src="static/icono/facebook.svg" alt=""/>Continuar con Facebook</a
                >
              </div>
              <p class="login-wrapper-footer-text">
                <strong>¿No tienes una cuenta?</strong>
                <a href="singup.php" class="text-reset">Registraté aquí</a>
              </p>
            </div>
          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img
              src="static/images/bg-login.jpg"
              alt="login image"
              class="login-img"
            />
          </div>
        </div>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
