<?php
require_once("db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<!DOCTYPE html>
<html lang=" en">

    <head>
        <title>Museo Informatico Volta</title>
        <meta charset="utf-8q">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="visualizza.css" rel="stylesheet">
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

    <div class="row">
        <div class="col">
            <div class="display-1 text-center">La notte</div>
        </div>
    </div>

    <div class="row-5 mt-4">
        <div class="col-md-6 offset-md-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>

                </div>
                <div class="carousel-inner" role="listbox" style=" width:100%; height: 500px !important">
                    <div class="carousel-item active">
                        <img src="images/Buka.jpg" class="d-block  w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/scary-groke.png" class="d-bloc w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/batman.png" class="d-block  w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/really-scary-groke.jpg" class="d-block  w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col">
        <div class="display-5 text-center">Descrizione</div>
            
        </div>
    </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <p class="lead text-start">
                The Groke (Swedish name Mårran, Finnish name Mörkö) is a fictional character in the Moomin stories
                created by Tove Jansson.[1] She appears as a ghost-like, hill-shaped body with two cold staring eyes and
                a wide row of white shiny teeth. In the book Who Will Comfort Toffle?, it is mentioned that she has a
                tail, but it has never been seen. Wherever she stands, the ground below her freezes and plants and grass
                die. She leaves a trace of ice and snow when she walks the ground. Anything that she touches will
                freeze. On one occasion, she froze a campfire by sitting down on it. She seeks friendship and warmth,
                but she is declined by everyone and everything, leaving her in her cold cavern on top of the Lonely
                Mountains.

                On one occasion in a comic, however, she was hailed as a heroine when she, in her constant search for
                warmth, extinguished a forest wildfire by sitting on it. In another comic, Sniff has made a magical
                potion with seemingly random effects. In curiosity, he drips a few drops on an ant which then transforms
                into the Groke. It is never made clear if this is how the Groke came to be, or if the ant transformed to
                another creature of the same type.
        </div>
    </div>
    </div>
</body>

</html>