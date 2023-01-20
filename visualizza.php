<?php
require_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<!DOCTYPE html>
<html lang="en">

<head>
    <title>Museo Informatico Volta</title>
    <meta charset="utf-8q">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<body>
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid border-bottom">
                    <a href="index.php" class="navbar-brand ">
                        <img src="images/thegroke.png" height="50" alt="Museo Informatico Volta">Museo Informatico Volta
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="contattaci.php" class="nav-item nav-link">Contattaci</a>
                            <a href="orario.php" class="nav-item nav-link">Orari</a>
                            <a href="corradobonfanti.php" class="nav-item nav-link">Corrado Bonfanti</a>
                        </div>
                    </div>
            </nav>
        </div>
    </div>
    <div class="middle-box">
        <div class="md">
            <form action="index.php" method="get">
                <div class="input-group rounded p-2 ml-2 ">
                    <input type="text" name="search" class="form-control rounded" placeholder="Search"
                        aria-label="Search" aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <button type="submit" class="btn btn-primary">Cerca</button>
                    </span>
                </div>
            </form>

            <div class="p-2 ml-2 ">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>

            </div>
            <label for="customRange1" class="form-label "></label>
            <input type="range" class="form-range" id="customRange1">
        </div>
    </div>, initial-scale=1.0">
    <title>Document</title>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    
</body>
</html>