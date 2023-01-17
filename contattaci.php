<!DOCTYPE html>
<html lang="en">

<head>
    <title>Museo Informatico Volta</title>
    <meta charset="utf-8q">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="contattaci.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg">
        <div class="container-fluid border-bottom">
            <a href="index.php" class="navbar-brand ">
                <img src="thegroke.png" height="50" alt="Museo Informatico Volta">Museo Informatico Volta
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="contattaci.php" class="nav-item nav-link">Contattaci</a>
                    <a href="orario.php" class="nav-item nav-link">Orari</a>
                    <a href="corradobonfanti.php" class="nav-item nav-link">Corrado Bonfanti</a>

                </div>

    </nav>

<div class="container h-100 p-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-10 col-lg-8">
            <form class="form-example" action="prenotazione.php" method="post">
                <h1>Contattaci

                </h1>
                <input type="hidden" name="id_concerto" value="">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control username" placeholder="Nome" name="nome_utente" required>
                </div>
                <div class="form-group">
                    <label for="nome">Cognome</label>
                    <input type="text" class="form-control username" placeholder="Cognome" name="cognome_utente" required>
                </div>
                <div class="form-group">
                    <label for="nome">Mail</label>
                    <input type="email" class="form-control username" placeholder="Mail" name="mail_utente" required>
                </div>
                <button type="submit" class="btn btn-dark btn-customized mt-4">Invia</button>
            </form>


        </div>
    </div>
</div>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-1 my-2 border-top fixed-bottom">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; Sciardis Luca Sanchez Martinez Daniele</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#twitter" />
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#instagram" />
            </svg></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
              <use xlink:href="#facebook" />
            </svg></a></li>
      </ul>
    </footer>
  </div>

</body>