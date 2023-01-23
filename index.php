<?php
require_once("db.php");
/*if (isset($_GET['search'])) {
    $search = $_GET["search"];
    $sql = "SELECT * FROM `donazione_bonfanti` INNER JOIN foto WHERE descrizione LIKE  '$search'";
    $rec = mysqli_query($db_remoto, $sql);
    if(mysqli_num_rows($rec)!=0){
    while ($array = mysqli_fetch_array($rec)) {

        $descrizione = $array['descrizione'];
        $dimensioni = $array['dimensioni'];
        $percorso = $array['percorso'];

        echo  "</div>
         <div class='row'>";
        for ($i = 0; $i < 4; $i++) {
            echo "<div class='col m-2 p-3'>
          <div class='card' style='width: 18rem;'>
          <img src=" . $percorso . " class='card-img-top' alt=''>
          <div class='card-body'>
          <h5 class='card-title'>Nome</h5>
          <p class='card-text'>" . $descrizione . "</p>
          <a href='#' class='btn btn-primary'>Visualizza</a>
          </div>
          </div>
          </div>";
        }
        echo "</div>";
    }}
} else {
   
}

*/
?>
<!DOCTYPE html>
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
    </div>
    <?php

    function getFAQ($db_remoto)
    {

        $sql = "SELECT * FROM donazione_bonfanti INNER JOIN foto";

        $currentPage = 1;

        if (isset($_GET['pageNumber'])) {
            $currentPage = $_GET['pageNumber'];
        }

        $startPage = ($currentPage - 1) * 8;
        if ($startPage < 0)
            $startPage = 0;
        $href = "index.php?";
        $query = $sql . " limit " . $startPage . "," . 8;

        $rec = mysqli_query($db_remoto, $query);
        echo "<div class='row'>";

        while ($array = mysqli_fetch_array($rec)) {
            $questions[] = $array;


            $id = $array['id'];
            $descrizione = $array['descrizione'];
            $dimensioni = $array['dimensioni'];
            $percorso = $array['percorso'];
            echo "<div class='col m-2 p-3 d-flex align-items-stretch'>
        <div class='card' style='width: 18rem;'>
        <img src=" . $percorso . " class='card-img-top' alt=''>
        <div class='card-body d-flex flex-column'>
        <h5 class='card-title'>Nome</h5>
        <p class='card-text'>" . $descrizione  . " </p>
        <a href='visualizza.php?id=" . $id ."' class='btn btn-primary mt-auto align-self-start'>Visualizza</a>
        </div>
        </div>
        </div>";
        }

        if (is_array($questions)) {
            $questions["page_links"] = paginateResults($db_remoto, $sql, $href);
            return $questions;
        }
    }



    function paginateResults($db, $sql, $href)
    {
        $result = mysqli_query($db, $sql);
        $count = mysqli_num_rows($result);
        $page_links = pagination($count, $href);
        return $page_links;
    }
    function pagination($count, $href)
    {
        $output = '';
        if (!isset($_REQUEST["pageNumber"]))
            $_REQUEST["pageNumber"] = 1;
        if (8 != 0)
            $pages = ceil($count / 8);

        // if pages exists after loop's lower limit
        if ($pages > 1) {
            if (($_REQUEST["pageNumber"] - 3) > 0) {
                $output = $output . '<li class="page-item"><a href="' . $href . 'pageNumber=1" class="page-link">1</a></li>';
            }
            if (($_REQUEST["pageNumber"] - 3) > 1) {
                $output = $output . '<a class="page-link link-secondary disabled">...</a>';
            }

            // Loop for provides links for 2 pages before and after current page
            for ($i = ($_REQUEST["pageNumber"] - 2); $i <= ($_REQUEST["pageNumber"] + 2); $i++) {
                if ($i < 1)
                    continue;
                if ($i > $pages)
                    break;
                if ($_REQUEST["pageNumber"] == $i)
                    $output = $output . '<li class="page-item"><a class="page-link active" id=' . $i . '>' . $i . '</a></li>';
                else
                    $output = $output . '<li class="page-item"><a class="page-link" href="' . $href . "pageNumber=" . $i . '" class="page">' . $i . '</a></li>';
            }

            // if pages exists after loop's upper limit
            if (($pages - ($_REQUEST["pageNumber"] + 2)) > 1) {
                $output = $output . '<a class="page-link link-secondary disabled">...</a>';
            }
            if (($pages - ($_REQUEST["pageNumber"] + 2)) > 0) {
                if ($_REQUEST["pageNumber"] == $pages)
                    $output = $output . '<p id=' . ($pages) . ' class="current">' . ($pages) . '</p>';
                else
                    $output = $output . '<li class="page-item"> <a class="page-link" href="' . $href . "pageNumber=" . ($pages) . '" >' . ($pages) . '</a></li>';
            }
        }
        return $output;
    }
    $questions = getFAQ($db_remoto);
if (is_array($questions)) {
    for ($i = 0; $i < count($questions) - 1; $i ++) {
    ?>
    <?php
    }
    ?>





    <nav class="nav justify-content-center" aria-label="Page navigation example">
        <ul class="pagination">

            <?php     echo $questions["page_links"];
 ?>

        </ul>
    </nav>

    <!--  <table class="table table-bordered">
    <tbody>
    <tr>
            <td></td>
        </tr>
        </tbody>
    </table> -->


    <?php
}
?>
    </div>


    <div class="container">
        <!--   <footer class="d-flex flex-wrap justify-content-between align-items-center  border-top bg-light fixed-bottom">
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
        </footer> -->
    </div>




</body>