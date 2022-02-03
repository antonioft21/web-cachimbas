<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Supermercado+One&display=swap" rel="stylesheet">
    <link href="./estilos.css" rel="stylesheet">
    <title>Página principal</title>
</head>

<body>
    <?php
    require_once("./vista/funciones.php");
    $menu = imprimirMenu();
    echo $menu;
    ?>
    <div class="container my-3">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        <img src="https://www.compraentradas.com/ImagenesTPV/ONLINE_GIGANTE_DULCES.jpg " class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://scontent.fgrx1-1.fna.fbcdn.net/v/t1.6435-9/173656090_3971877236210811_4653829945257986658_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=730e14&_nc_ohc=LHIWXKzsBNoAX97jaXb&_nc_ht=scontent.fgrx1-1.fna&oh=00_AT_fYdCeDCwXmphl2bHaqIxcW0aW56V159UJTOu_5DpiWQ&oe=621F6324" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://pbs.twimg.com/media/C6-NGCzWkAEHXBX?format=jpg&name=large" class=" w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <h2 class="titulo text-center p-5">¡ÚLTIMOS LANZAMIENTOS!</h2>
    <div class="container-fluid mt-3 ">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="col-6 listado text-center w-25">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">1. </li>
                    <li class="list-group-item">1. </li>
                    <li class="list-group-item">2. </li>
                    <li class="list-group-item">3. </li>
                    <li class="list-group-item">4. </li>
                </ul>
            </div>
            <div class="col-6 listado text-center w-25">
                <ul class="list-group ">
                    <li class="list-group-item active" aria-current="true">1. </li>
                    <li class="list-group-item">1. </li>
                    <li class="list-group-item">2. </li>
                    <li class="list-group-item">3. </li>
                    <li class="list-group-item">4. </li>
                </ul>
            </div>
            <div class="col-6 listado text-center w-25">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">1. </li>
                    <li class="list-group-item">1. </li>
                    <li class="list-group-item">2. </li>
                    <li class="list-group-item">3. </li>
                    <li class="list-group-item">4. </li>
                </ul>
            </div>
            <div class="col-6 listado text-center w-25">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">1. </li>
                    <li class="list-group-item">1. </li>
                    <li class="list-group-item">2. </li>
                    <li class="list-group-item">3. </li>
                    <li class="list-group-item">4. </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    
    <div class="container">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner d-flex">
                <div class="carousel-item active d-flex justify-content-center">
                    <div class="card w-50 m-5">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>1 well-known quote, contained in a blockquote element.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="carousel-item d-flex justify-content-center">
                    <div class="card w-50 m-5">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>2 well-known quote, contained in a blockquote element.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="carousel-item d-flex justify-content-center">
                    <div class="card w-50 m-5">
                        <div class="card-header">
                            Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>3 well-known quote, contained in a blockquote element.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</body>
<footer>
    <section class="">
        <!-- Footer -->
        <footer class="text-center text-white bg-dark">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Register for free</span>
                        <button type="button" class="btn btn-outline-light btn-rounded">
                            Sign up!
                        </button>
                    </p>
                </section>
                <!-- Section: CTA -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
</footer>

</html>