<!DOCTYPE html>
<html lang="es">
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
    <main class="auth-page">
        <section class="auth-card">
            <div class="mb-4">
                <h1 class="h3 mb-1">Recuperar acceso</h1>
                <p class="text-muted mb-0">Introduce tu correo para recibir instrucciones de recuperación.</p>
            </div>
            
            <form action="procesar_recuperacion.php" method="POST">
                <div class="mb-4">
                    <label class="form-label" for="email">Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Enviar instrucciones</button>
                
                <div class="mt-3 text-center">
                    <a href="login.php">Volver al inicio de sesión</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>