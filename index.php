<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quintana del rey</title>
    <link rel="shortcut icon" href="./img/logo.png">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;700&family=Marcellus&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- font -->

    <link rel="stylesheet" href="./css/main.css">


</head>

<body>

    <header class="header">

        <?php
        include("./parts/headerNav.php");
        ?>

        <div class="banner">
            <div class="mask">
                <h1 class="bnr-title">
                    Welcome
                </h1>
                <h4 class="bnr-text">
                    It is a pleasure to offer our service.
                    ¡Conquering palates!
                </h4>

                <a class="bnr-button bnr-fund" href="platillo.php">Reserve now</a>

            </div>
        </div>

    </header>

    <main>
        <!-- Promos -->
        <div class="promos-container">
            <h2 class="promos-title">Promotions</h2>

            <div class="promos">

                <div class="ctn-img">
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>

                    <a href="platillo.php"><img class="promos-images" src="./img/bebidas.jpg" alt="promo"></a>
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>

                    <a href="platillo.php"><img class="promos-images" src="./img/entrada.jpg" alt="promo"></a>
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>
                    <a href="platillo.php"><img class="promos-images" src="./img/promocion.jpeg" alt="promo"></a>

                </div>


            </div>

            <ul class="promos-points">
                <li class="point point--active"></li>
                <li class="point"></li>
                <li class="point"></li>
            </ul>

        </div>
        <!-- mean foods -->
        <div>
            <div class="titles">
                <h2>Platos destacados</h2>
            </div>
            <!-- Carrusel de platos destacados -->
            <div class="carousels-container">
                <div class="arrow-container "><img class="arrow arrow-left" src="./img/left_arrow.svg" alt="left-arrow">
                </div>

                <div class="inf-carousels-container">

                    <div class="carousel">
                        <div class="carousels-image-container">
                            <a href="platillo.php" class="image-mask">
                                <img class="carousels-image" src="./img/paella.jpg" alt="dish">
                            </a>
                        </div>
                        <div class="information-container">
                            <h3 class="carousels-information-title">Paella</h3>
                            <p class="carousels-parr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi.</p>
                            <div class="carousels-button">
                                <a class="btn-inf" href="#">Ordénalo</a>
                            </div>
                        </div>
                    </div>


                    <div class="carousel">
                        <div class="carousels-image-container">
                            <a href="platillo.php" class="image-mask">
                                <img class="carousels-image" src="./img/arroz al horno.png" alt="dish">
                            </a>
                        </div>
                        <div class="information-container">
                            <h3 class="carousels-information-title">Paella</h3>
                            <p class="carousels-parr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod
                                tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi.</p>
                            <div class="carousels-button">
                                <a class="btn-inf" href="#">Ordénalo</a>
                            </div>
                        </div>
                    </div>



                </div>

                <div class="arrow-container"><img class="arrow arrow-right" src="./img/right_arrow.svg"
                        alt="right-arrow"></div>
            </div>
        </div>
        <!-- Categories -->
        <section>
            <div class="titles ">
                <h2 class="titles-cat">Categorias</h2>
            </div>

            <div class="cards-container">

                <a href="categories.php?id=1" class="cards-info img-size appetizers ">

                    <div class="cards-title-container">
                        <h2 class="cards-title">Entradas</h2>
                    </div>
                </a>

                <a href="categories.php?id=2" class="cards-info img-size main-course">

                    <div class="cards-title-container">
                        <h2 class="cards-title">Plato Fuerte</h2>
                    </div>
                </a>

                <a href="categories.php?id=3" class="cards-info img-size desserts">

                    <div class="cards-title-container">
                        <h2 class="cards-title">Postres</h2>
                    </div>
                </a>

                <a href="categories.php?id=4" class="cards-info img-size drinks">

                    <div class="cards-title-container">
                        <h2 class="cards-title">Bebidas</h2>
                    </div>
                </a>

            </div>
        </section>
        <!-- Find us -->
        <div class=" ctn-location">


            <div class="location-image madrid-location">
                <div class="location-mask">
                </div>
            </div>

            <div class="location-text-container">
                <div class="location-text">
                    <h2 class="location-subtitles">Quintana del Rey</h2>
                    <hr class="underline">
                    <h3>Ubicanos</h3>
                </div>
                <p class="location-paragraph">It is a long established fact that a reader will be distracted by the
                    readable content of a page when
                    looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English

                    It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like
                    readable English</p>
            </div>
        </div>
    </main>

    <?php
    include("./parts/footer.php");
    ?>

    <script src="./js/funtions.js"></script>


</body>

</html>