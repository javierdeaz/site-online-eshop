<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eshop - Actualizar contraseña</title>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      href="../static/static_template/images/favicon.png"
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
    <link rel="stylesheet" href="../static/css/login.css" />
</head>
<body>

    <main>
      <div class="container-fluid">
        <div class="row">
        <div class="col-sm-6 login-section-wrapper">
            <div class="brand-wrapper">
            <a href="index.php"><img src="../static/images/logo.png" alt="logo" class="logo" /></a>
            </div>
            <div class="login-wrapper my-auto">
              <h1 class="login-title">Actualizar contraseña</h1>
<?php
include 'config/db.php';
$error = "";
if (isset($_GET["key"]) && isset($_GET["email"])
    && isset($_GET["action"]) && ($_GET["action"] == "reset")
    && !isset($_POST["action"])) {
    $key     = $_GET["key"];
    $email   = $_GET["email"];
    $curDate = date("Y-m-d H:i:s");
    $query   = mysqli_query($con, "
SELECT * FROM `password_reset_temp` WHERE `key`='" . $key . "' and `email`='" . $email . "';");
    $row = mysqli_num_rows($query);
    if ($row == "") {
        $error .= '
            <div class="alert alert-danger" role="alert">
    <strong>¡Link invalido!</strong> El enlace es inválido o caducado. O bien no ha copiado el enlace correcto del correo electrónico, o bien ya ha utilizado la clave, en cuyo caso está desactivado. Tienes que enviar la solicitud de cambio nuevamente.
</div>
<a href="email_password.php" class="btn btn-block login-btn">Regresar</a>';
        mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `email`='" . $email . "';");
    } else {
        $row     = mysqli_fetch_assoc($query);
        $expDate = $row['expDate'];
        if ($expDate >= $curDate) {
//++++++++++++++++++++++++++++++ HTML +++++++++++++++++++++++++++++++++++++++++++++
            ?>

              <form action="" method="POST">

                <div class="form-group mb-4">
                  <input
                    type="hidden"
                    name="action"
                    value="update"
                  />
                </div>

                <div class="form-group mb-4">
                  <label for="password">Nueva contraseña</label>
                  <input
                    type="password"
                    name="pass1"
                    id="pass1"
                    class="form-control"
                    placeholder="enter your passsword"
                    data-validate="Type password"
                    maxlength="15"
                    required
                  />
                </div>

                <div class="form-group mb-4">
                  <label for="password">Confirmar contraseña</label>
                  <input
                    type="password"
                    name="pass2"
                    id="pass2"
                    class="form-control validate-input"
                    placeholder="confirm your passsword"
                    data-validate="Type password"
                    maxlength="15"
                    required
                  />
                </div>

                <div class="form-group mb-4">
                  <input
                    type="hidden"
                    name="email"
                    value="<?php echo $email; ?>"
                  />
                </div>

                <input
                  name="update"
                  id="reset"
                  class="btn btn-block login-btn"
                  type="submit"
                />
              </form>
            </div>
          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img
              src="../static/images/bg-update.jpg"
              alt="login image"
              class="login-img"
            />
          </div>
        </div>
      </div>
    </main>

<?php
//++++++++++++++++++++++++++++++ FIN HTML +++++++++++++++++++++++++++++++++++++++++++
        } else {
            $error .= '
            <div class="alert alert-danger" role="alert">
    <strong>¡Link expirado!</strong> El enlace ha expirado. Usted está tratando de utilizar el enlace expirado que como válido sólo 24 horas (1 día después de la solicitud). También puedes enviar otra solicitud
</div>
<a href="../login.php" class="btn btn-block login-btn">Regresar</a>
<a href="email_password.php" class="btn btn-block login-btn">Enviar solicitud</a>';
        }
    }
    if ($error != "") {
        echo "<div>" . $error . "</div>";
    }
} // isset email key validate end

if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
    $error   = "";
    $pass1   = mysqli_real_escape_string($con, $_POST["pass1"]);
    $pass2   = mysqli_real_escape_string($con, $_POST["pass2"]);
    $email   = $_POST["email"];
    $curDate = date("Y-m-d H:i:s");
    if ($pass1 != $pass2) {
        $error .= '<div class="alert alert-warning" role="alert">
  <strong>¡Atención!</strong>Las contraseñas no coinciden, ambas deben ser iguales. Solo devuelvete a la página anterior.
</div>';
    }
    if ($error != "") {
        echo "<div>" . $error . "</div>";
    } else {
        mysqli_query($con,
            "UPDATE `usuario` SET `password`='" . $pass1 . "' WHERE `email`='" . $email . "';");

        mysqli_query($con, "DELETE FROM `password_reset_temp` WHERE `email`='" . $email . "';");

        echo '<div class="alert alert-success" role="alert">
    <strong>¡Felicidades!</strong> Tu contraseña ha sido modificada satisfactoreamente. Click para que puedas logearte
</div>
<a href="../login.php" class="btn btn-block login-btn">Regresar</a>';
    }
}
?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>