<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD authentication page">
  <title>ASEFIDE</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100..1000&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="styles/assets/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="styles/styles.css">

  

</head>

<body class="auth-body">
  <button class="icon-button theme-toggle auth-theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
    <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
  </button>
  <main class="auth-page">
    <section class="auth-card">
      <div class="d-flex justify-content-center mb-5 mt-3"><img src="styles/assets/images/svg/logo-asefide.svg" alt="adminHMD dashboard interface"></div>
      <form class="needs-validation" novalidate>
        <div class="mb-4">
          
          <h1 class="h3 mb-1">Te damos la bienvenida nuevamente</h1>
          <p class="text-muted mb-0">Inicia sesión con tu correo y contraseña</p>
        </div>
        <div class="mb-4 fs-5"><label class="form-label" for="loginEmail">Correo electrónico</label><input class="form-control" id="loginEmail" type="email" required><div class="invalid-feedback">Enter a valid email.</div></div>
        <div class="d-flex justify-content-between">

        <label class="form-label" for="loginPassword">Contraseña</label>
        <a class="small fw-semibold" href="recuperar.php">¿Olvidaste tu contraseña?</a>
        </div>
        
        <div class="form-check mb-4"></div>
        <button class="btn btn-primary w-100" type="submit"> Iniciar sesión</button>
      </form>
      
      <div class="auth-footer">¿No tienes cuenta? <a href="mailto:adminasefide@gmail.com">Contacta a un administrador</a></div>
    </section>
  </main>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
