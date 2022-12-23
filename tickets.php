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
        <section class="tickets" id="tickets">
            <div class="container-fluid tickets-container mt-4 mb-3">
                <div class="container-fluid categorias-container px-2">
                    <div class="card border-primary mb-2 py-2" style="width: 33%;">
                        <div class="card-body">
                          <h5 class="card-title">Estudiante</h5>
                          <p class="card-text">Tienen un descuento</p>
                          <h6><strong>80%</strong></h6>
                          <p class="small-font text-secondary my-1">* presentar documentación</p>
                        </div>
                    </div>
                    <div class="card border-info mb-2 py-2" style="width: 33%;">
                        <div class="card-body">
                          <h5 class="card-title">Trainee</h5>
                          <p class="card-text">Tienen un descuento</p>
                          <h6><strong>50%</strong></h6>
                          <p class="small-font text-secondary my-1">* presentar documentación</p>
                        </div>
                    </div>
                    <div class="card border-warning mb-2 py-2" style="width: 33%;">
                        <div class="card-body">
                          <h5 class="card-title">Junior</h5>
                          <p class="card-text">Tienen un descuento</p>
                          <h6><strong>15%</strong></h6>
                          <p class="small-font text-secondary my-1">* presentar documentación</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid encabezado-container">
                  <span class="small-font" id="titulo">VENTA</span>
                  <h2>VALOR DE TICKET $200</h2>
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
                        <div class="col-6 my-2 pe-1">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad" placeholder="Cantidad" aria-label="Cantidad">
                        </div>
                        <div class="col-6 my-2 ps-1">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select id="categoria" class="form-select">
                              <option selected value="1">Estudiante</option>
                              <option value="2">Trainee</option>
                              <option value="3">Junior</option>
                            </select>
                        </div>
                        <div class="col-12 my-4">
                          <div class="alert alert-primary mb-0">
                            <p id="total">Total a Pagar: $ </p>
                          </div>
                        </div>
                        <div class="col-6 my-1 pe-1">
                            <button type="reset" onclick="borrar()" class="btn boton text-light w-100" id="boton-borrar">Borrar</button>
                        </div>
                        <div class="col-6 my-1 ps-1">
                            <button onclick="totalPagar()" type="button" class="btn boton text-light w-100" id="boton-resumen">Resumen</button>
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