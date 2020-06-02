<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Eshop - Actualizar contraseña</title>
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

              <form action="../../controller/ACTIONS/act_update_pass.php" method="POST">
                <div class="form-group mb-4">
                  <label for="password">Nueva contraseña</label>
                  <input
                    type="password"
                    name="pwd"
                    class="form-control"
                    placeholder="enter your passsword"
                    data-validate="Type password"
                  />
                </div>

                <div class="form-group mb-4">
                  <label for="password">Confirmar contraseña</label>
                  <input
                    type="password"
                    name="pwd-repeat"
                    class="form-control validate-input"
                    placeholder="confirm your passsword"
                    data-validate="Type password"
                  />
                </div>

                <input
                  name="reset-password-submit"
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
