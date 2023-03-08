<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Recuperar contraseña</title>
  <link rel="stylesheet" href="css/login-register.css" />
  <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
</head>

<body>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
          <div class="text-center my-5 mb-4">
            <img src="./assets/images/logo.png" alt="logo" width="50" />
          </div>
          <div class="card shadow-lg">
            <div class="card-body p-5">
              <h1 class="fs-4 card-title fw-bold mb-4">
                Recuperar Contraseña
              </h1>
              <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                <div class="mb-3">
                  <label class="mb-2 text-muted" for="email">Correo Electrónico</label>
                  <input id="email" type="email" class="form-control" name="email" value="" required autofocus />
                  <div class="invalid-feedback">
                    Correo electrónico inválido.
                  </div>
                </div>

                <p class="small text-muted">
                  Recibirás un correo electrónico con las instrucciones
                </p>

                <div class="d-flex align-items-center">
                  <button type="submit" class="btn btn-dark fw-bold ms-auto text-light px-3">
                    ENVIAR
                  </button>
                </div>
              </form>
            </div>
            <div class="card-footer py-5 pb-4 border-0">
              <div class="text-center">
                Tienes tu contraseña?
                <a href="login.php" class="text-dark fw-bold text-decoration-none">Inicia Sesión</a>
              </div>
            </div>
          </div>
          <div class="text-center mt-5 text-muted">
            Copyright &copy; 2023 &mdash; Aitana
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/login.js"></script>
  <script src="assets/js/login-register.js"></script>
</body>

</html>