<?php
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Museo Informatico Volta</title>
    <meta charset="utf-8q">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid border-bottom">
            <a href="index.php" class="navbar-brand ">
                <img src="images/thegroke.png" height="50" alt="Museo Informatico Volta">Museo Informatico Volta
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
    </div>

    <?php
    $sql = "SELECT* FROM donazione_bonfanti INNER JOIN foto";
    $rec = mysqli_query($db_remoto, $sql);
    while ($array = mysqli_fetch_array($rec)) {
        $descrizione = $array['descrizione'];
        $dimensioni = $array['dimensioni'];
        $percorso = $array['percorso'];
        echo  "</div>
        
        <div class='row'>";
        for ($i = 0; $i < 4; $i++){
            echo "<div class='col m-2 p-3'>
          <div class='card' style='width: 18rem;'>
          <img src=" . $percorso . " class='card-img-top' alt=''>
          <div class='card-body'>
              <h5 class='card-title'>Nome</h5>
              <p class='card-text'>" . $descrizione . "</p>
              <a href='#' class='btn btn-primary
              '>Visualizza</a>
          </div>
          </div>
          </div>";}
          echo "</div>";
    }
    


    ?>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center  border-top bg-light fixed-bottom">
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