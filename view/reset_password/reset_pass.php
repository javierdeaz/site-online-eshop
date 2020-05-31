<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eshop - Recuperar contraseña</title>
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
              <p>Se le enviara un correo electrónico con las instrucciones para reestablecer su contraseña.</p>
              <form action="" method="POST">
                <div class="form-group">
                  <label for="email">Correo electrónico</label>
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
                <input
                  name="confirm_email"
                  id=""
                  class="btn btn-block login-btn"
                  type="submit"
                  value="Confirmar"
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
