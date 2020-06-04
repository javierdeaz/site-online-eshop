
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eshop - Recordar Contraseña</title>
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
              <h1 class="login-title">Recuperar contraseña</h1>
<?php
include 'config/db.php';
$error = "";
if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
    $email = $_POST["email"];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email) {

        $error .= '<div class="alert alert-danger" role="alert">
    <strong>¡Error!</strong> Dirección de correo electrónico inválida, por favor escriba una dirección de correo electrónico válida.
</div>';
    } else {
        $sel_query = "SELECT * FROM `usuario` WHERE email='" . $email . "'";
        $results   = mysqli_query($con, $sel_query);
        $row       = mysqli_num_rows($results);
        if ($row == "") {
            $error .= '<div class="alert alert-danger" role="alert">
    <strong>¡Error!</strong> Ningún usuario está registrado con esta dirección de correo electrónico.
</div>';
        }
    }
    if ($error != "") {
        echo '<div>' . $error . '</div>
        <a class="btn btn-block login-btn" href="email_password.php">Regresar</a>';
    } else {
        $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
        $expDate   = date("Y-m-d H:i:s", $expFormat);
        $key       = substr(md5(uniqid(time(), true)), 0, 20);
// Insert Temp Table
        mysqli_query($con,
            "INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");

        $output = '<p><strong>Querido usuario</strong></p>';
        $output .= '<p>Acabamos de recibir una solicitud de cambío de clave para iniciar sesión en Eshop.</p>';
        $output .= '<p>-----------------------------------------------------------------------------------------</p>';
        $output .= '<p><strong>Ingresa al siguiente LINK para actualizar la clave</strong><br/><a href="http://localhost/sites/site-online-eshop/view/reset_password/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">https:localhost/sites/site-online-eshop/view/reset_password/demo/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
        $output .= '<p>-----------------------------------------------------------------------------------------</p>';
        $output .= '<p>Si tiene problemas con el Link por favor, asegúrese de copiar todo el enlace en su navegador.<br/>
El enlace expirará después de 1 día por razones de seguridad.</p>';
        $output .= '<p>Si no has solicitado este correo electrónico de contraseña olvidada, no es necesario realizar ninguna acción, tu contraseña no se restablecerá. Sin embargo, es posible que desee iniciar sesión en su cuenta y cambiar su contraseña de seguridad, ya que alguien puede haberla adivinado.</p>';
        $output .= '<p>Gracias,</p>';
        $output .= '<p><strong>Equipo Eshop</strong></p>';
        $body    = $output;
        $subject = "[IMP]Actualizar Password - Eshop.com";

        $email_to = $email;

//+++++++++++++++++++++++++++++++++ PHP MAILER ++++++++++++++++++++++++++++++++++++++
        require "PHPMailer/PHPMailerAutoload.php";
        $mail              = new PHPMailer();
        $mail->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host     = "smtp.gmail.com";

// SMTP a utilizar. Por ej. smtp.elserver.com
        $mail->Username = "eshopdeaz@gmail.com"; // Correo completo a utilizar
        $mail->Password = "ADMIN12345"; // Contraseña
        $mail->Port     = 25; // Puerto a utilizar
        $mail->IsHTML(true); // El correo se envía como HTML
        $mail->From     = "eshopdeaz@gmail.com"; // Desde donde enviamos (Para mostrar)
        $mail->FromName = "Eshop";
        $mail->AddAddress($email_to); // Esta es la dirección a donde enviamos

        $mail->Subject = $subject; // Este es el titulo del email.
        $mail->Body    = $body; // Mensaje a enviar
        $exito         = $mail->Send(); // Envía el correo.

        if ($exito) {

            echo '<div class="alert alert-success" role="alert">
        <strong>OK.</strong> El correo fue enviado correctamente, revisa tu bandeja de entrada de GMAIL.
        </div>
        <a class="btn btn-block login-btn" href="../login.php"
                >Regresar</a>
        ';
        } else {
            echo '<div class="alert alert-danger" role="alert">
        <strong>Error!</strong> Hubo un inconveniente, contacta a un administrador.
        </div>
        <a class="btn btn-block login-btn" href="../login.php"
                >Regresar</a>
                ';
        }

//++++++++++++++++++++++++++ FIN PHP MAILER +++++++++++++++++++++++++++++++++++++++++++++
    }

} else {
//+++++++++++++++++++++++++++++ HTML FORM +++++++++++++++++++++++++++++++
    ?>
              <p>Se le enviara un correo electrónico con las instrucciones para reestablecer su contraseña.</p>
              <form action="" method="POST">
                <div class="form-group">
                  <label for="email">Correo electrónico</label>
                  <input
                    type="email"
                    name="email"
                    class="form-control validate-input"
                    placeholder="correo@example.com"
                    data-validate="Type email"
                  />
                </div>
                <input
                    name="reset"
                    class="btn btn-block login-btn"
                    type="submit"
                    value="Enviar email"
                />
              </form>
              <p class="login-wrapper-footer-text">
                <strong>¿Ya recuerdo mi contraseña?</strong>
                <a href="../login.php" class="text-reset">Inicia sesión aquí</a>
              </p>
            </div>
          </div>
          <div class="col-sm-6 px-0 d-none d-sm-block">
            <img
              src="../static/images/bg-password.jpg"
              alt="login image"
              class="login-img"
            />
          </div>
        </div>
      </div>
    </main>
<?php
//+++++++++++++++++++++++++++++ FIN HTML FORM +++++++++++++++++++++++++++++++
}?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>