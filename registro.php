<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/codoacodo.png" />
    <title>Venta Tickets</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="index.html">
                <img src="img/codoacodo.png" alt="Codo a Codo" width="120" height="70" class="d-inline-block align-text-center">
                Conf Bs As
              </a>
              <button class="navbar-toggler navbar-light mx-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html#conferencia">La conferencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#oradores">Los oradores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html#lugar">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active text-light" href="index.html#conviertete">Conviértete en orador</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-success" href="#">Comprar tickets</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <section class="registro" id="registro">
            <div class="container-fluid registro-container mt-4 mb-3">
                <div class="container-fluid encabezado-container">
                  <span class="small-font" id="titulo">CONVIÉRTETE EN ORADOR</span>
                  <h2>Registro</h2>
                </div>
                <div class="container-fluid px-2">
                  <form action="">
                      <div class="row">
                        <div class="col-6 my-2 pe-1">
                          <input type="text" class="form-control" id="nombre" placeholder="Nombre" aria-label="First name">
                        </div>
                        <div class="col-6 my-2 ps-1">
                          <input type="text" class="form-control" id="apellido" placeholder="Apellido" aria-label="Last name">
                        </div>
                        <div class="col-12 my-2">
                            <input type="email" class="form-control" id="correo" placeholder="Correo" aria-label="Correo">
                        </div>
                        <div class="col-12 my-2">
                            <input type="text" class="form-control" id="contraseña" placeholder="Contraseña" aria-label="Contraseña">
                        </div>
                        <div class="col-12 my-1 pe-1">
                            <button type="button" class="btn boton text-light w-100" id="boton-registrarse">Registrarse</button>
                        </div>
                      </div>
                  </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
      <div class="container-fluid foot-container text-center">
          <a class="nav-link" href="#">Preguntas frecuentes</a>
          <a class="nav-link" href="#">Contáctenos</a>
          <a class="nav-link" href="#">Prensa</a>
          <a class="nav-link" href="#">Conferencias</a>
          <a class="nav-link" href="#">Términos y condiciones</a>
          <a class="nav-link" href="#">Privacidad</a>
          <a class="nav-link" href="#">Estudiantes</a>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
    <script src="script.js"></script>
  </body>
</html>