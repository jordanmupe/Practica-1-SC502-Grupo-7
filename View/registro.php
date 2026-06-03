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

<div class="page-header">
    <div>
        <h3 class="page-title">Registro de Asociados</h3>
        <p class="text-muted">
            Asociación Solidarista de Estudiantes de Fidélitas (ASEFIDE)
        </p>
    </div>
</div>

<!-- Registro -->
<div class="row">

    <div class="col-lg-12">

        <div class="card">

            <div class="card-header">
                <h4 class="card-title">
                    Información del Asociado
                </h4>
            </div>

            <div class="card-body">

                <form>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Nombre Completo
                            </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Ingrese el nombre completo">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Número de Identificación
                            </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Ingrese la identificación">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Correo Electrónico
                            </label>
                            <input type="email"
                                   class="form-control"
                                   placeholder="correo@ufidelitas.ac.cr">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Teléfono
                            </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="8888-8888">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Carrera
                            </label>
                            <select class="form-select">

                                <option selected>
                                    Seleccione una carrera
                                </option>

                                <option>
                                    Ingeniería en Sistemas
                                </option>

                                <option>
                                    Administración de Empresas
                                </option>

                                <option>
                                    Contaduría Pública
                                </option>

                                <option>
                                    Derecho
                                </option>

                                <option>
                                    Ingeniería Industrial
                                </option>

                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Carné Estudiantil
                            </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Número de carné">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Fecha de Ingreso
                            </label>
                            <input type="date"
                                   class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Estado
                            </label>

                            <select class="form-select">
                                <option selected>Activo</option>
                                <option>Inactivo</option>
                            </select>

                        </div>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Dirección
                        </label>

                        <textarea class="form-control"
                                  rows="3"
                                  placeholder="Ingrese la dirección completa">
                        </textarea>

                    </div>

                    <hr>

                    <h5 class="mb-3">
                        Credenciales de Acceso
                    </h5>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Usuario
                            </label>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Nombre de usuario">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                Contraseña
                            </label>
                            <input type="password"
                                   class="form-control"
                                   placeholder="Contraseña">
                        </div>

                    </div>

                    <div class="text-end">

                        <button type="reset"
                                class="btn btn-secondary">
                            Limpiar
                        </button>

                        <button type="submit"
                                class="btn btn-primary">
                            Registrar Asociado
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>