<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/fonts/css/all.min.css">
    <link rel="stylesheet" href="/assets/Js/app.js">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="website icon" href="/assets/images/website.png" />
    <link rel="stylesheet" href="/assets/swiper/package/swiper-bundle.css">
    <title>BuildTogether</title>
</head>

<body>

    <!-- ############## -->
    <!-- NavBar -->
    <!-- ############## -->
    <nav class="navbar navbar-expand-lg " style="z-index: 1000;">
        <div class="container-fluid">
            <a class="navbar-brand mx-5" href="#">Build<span>together</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="mx-auto"> <!-- Conteneur pour centrer -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="mx-5">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">
                            <a href="#" class="text-decoration-none">Search</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- ############## -->
    <!-- Home -->
    <!-- ############## -->
    <section class="home" id="home" style="margin-top: -3.5rem;">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 92vh;">
                    <img src="/assets/images/banner.jpg" class="d-block w-100" alt="..." style="filter: brightness(90%);">
                    <div class="carousel-caption d-none d-md-block" style=" top: 14rem; left: 0; transform: translate(0, 0);">
                        <h1 class="text-capitalize">votre désir, notre défi</h1>
                        <h2>Parce que nous savons à quel point c'est important pour vous.</h2>
                    </div>
                </div>
                <div class="carousel-item" style="height: 92vh;">
                    <img src="/assets/images/future.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                    <div class="carousel-caption d-none d-md-block" style=" top: 14rem; left: 0; transform: translate(0, 0);">
                        <h1>Construire Votre Avenir</h1>
                        <h2>Des solutions durables pour tous vos projets.</h2>
                    </div>
                </div>
                <div class="carousel-item" style="height: 92vh;">
                    <img src="/assets/images/Testimonials.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                    <div class="carousel-caption d-none d-md-block" style=" top: 14rem; left: 0; transform: translate(0, 0);">
                        <h1>Innovations en Construction</h1>
                        <h2>Alliez modernité et tradition pour des résultats impressionnants.</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </section>




    <script src="/assets/swiper/package/swiper-bundle.min.js"></script>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/Js/script.js"></script>
    <!-- <script src="/assets/scrollreveal/dist/scrollreveal.min.js"></script> -->
    <script src="/assets/Js/app.js"></script>
</body>

</html>