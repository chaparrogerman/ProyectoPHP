
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/codoacodo.png" />
    <title>Conf Bs As</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand text-light" href="index.php">
                <img src="img/codoacodo.png" alt="Codo a Codo" width="120" height="70" class="d-inline-block align-text-center">
                Conf Bs As
              </a>
              <button class="navbar-toggler navbar-light mx-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#conferencia">La conferencia</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#oradores">Los oradores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#lugar">El lugar y la fecha</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registro.php">Conviértete en orador</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-success" href="tickets.html">Comprar tickets</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <section class="conferencia" id="conferencia">
            <div id="carouselExampleSlidesOnly" class="carousel slide"  data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item uno active">
                    <img src="img/ba1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item dos">
                    <img src="img/ba2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item tres">
                    <img src="img/ba3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <div class="container-fluid text-container text-light">
                  <h1>Conf Bs As</h1>
                  <p>Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores del primer nivel que tenemos para ti. Te esperamos!</p>
                  <div class="btn-container">
                    <a href="#oradores" class="btn btn-outline-light" role="button">Quiero ser orador</a>
                    <a href="tickets.html" class="btn btn-success" role="button">Comprar tickets</a>
                  </div>
                </div>
            </div>
        </section>
        <section class="oradores" id="oradores">
            <div class="container-fluid my-2">
                <div class="container-fluid encabezado-container">
                    <span class="small-font">CONOCE A LOS</span>
                    <h2>ORADORES</h2>
                </div>
                <div class="container-fluid card-container">
                    <div class="card mx-3 mb-2" style="width: 19rem;">
                        <img src="img/steve.jpg" class="card-img-top" alt="Steve Jobs">
                        <div class="card-body">
                          <span class="badge bg-warning text-dark">JavaScript</span>
                          <span class="badge text-white bg-info">React</span>
                          <h5 class="card-title">Steve Jobs</h5>
                          <p class="card-text small-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis deleniti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
                        </div>
                      </div>
                      <div class="card mx-3 mb-2" style="width: 19rem;">
                        <img src="img/bill.jpg" class="card-img-top" alt="Bill Gates">
                        <div class="card-body">
                          <span class="badge bg-warning text-dark">JavaScript</span>
                          <span class="badge text-white bg-info">React</span>
                          <h5 class="card-title">Bill Gates</h5>
                          <p class="card-text small-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis deleniti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
                        </div>
                      </div>
                      <div class="card mx-3 mb-2" style="width: 19rem;">
                        <img src="img/ada.jpeg" class="card-img-top" alt="Ada Lovelac">
                        <div class="card-body">
                          <span class="badge bg-secondary">Negocios</span>
                          <span class="badge bg-danger">Startups</span>
                          <h5 class="card-title">Ada Lovelac</h5>
                          <p class="card-text small-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis deleniti, totam fuga sequi iste! Facilis explicabo repellat ut similique incidunt? Ullam nobis beatae, corporis facilis veniam magni ratione!</p>
                        </div>
                      </div>
                </div>
            </div>
        </section>
        <section class="lugar" id="lugar">
            <div class="container-fluid lugar-container my-4">
                <div class="card mb-2" style="max-width: 1350px;">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="img/madero.jpg" class="img-fluid rounded-start h-100" alt="Puerto Madero">
                      </div>
                      <div class="col-md-6">
                        <div class="card-body card-body-lugar text-light h-100">
                          <h5 class="card-title">Bs As - Octubre</h5>
                          <p class="card-text">Buenos Aire es la capital y ciudad más poblada de la República Argentina. Esta metrópolis es una ciudad autónoma que constituye uno de los 24 distritos que conforman el país. Está situada en la región centro-este, sobre la orilla sur del Río de la Plata, en la región pampeana.</p>
                          <button type="button" class="btn btn-outline-light">Conocé más</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="conviertete" id="conviertete">
            <div class="container-fluid conviertete-container">
                <div class="container-fluid encabezado-container">
                  <span class="small-font">CONVIÉRTETE EN UN</span>
                  <h2>ORADOR</h2>
                  <p>Anótate como orador para dar una <u>charla ignite</u>. Cuéntanos de qué quieres hablar!</p>
                </div>
                <form action="">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Nombre" aria-label="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
                        </div>
                    </div>
                    <div class="form-floating my-3">
                        <textarea class="form-control te" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2" class="text-secondary fs-5">Sobre qué quieres hablar?</label>
                        <p class="small-font text-secondary my-1">Recuerda incluir un título para tu charla</p>
                    </div>
                  </div>
                  <button type="submit" class="btn boton text-light w-100 mb-3">Enviar</button>
                </form>
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
  </body>
</html>