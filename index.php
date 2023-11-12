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

        <div class="header-red-bar">
            <div class="header-ctn">
                <a class="logo" href="index.php">
                    <img src="./img/graphic-identifier.png" alt="graphic-identifier">
                </a>

                <!-- mobile nav btn -->

                <input class="mobile-check" type="checkbox">
                <label class="mobile-btn">
                    <span></span>
                </label>

                <!-- mobile nav btn -->

                <nav class="navigation">
                    <a class="navigation-link" href="index.php">Home</a>
                    <a class="navigation-link" href="categories.php">Product</a>
                    <a class="navigation-link" href="#">Restaurant</a>
                    <a class="navigation-link" href="#">Contact</a>

                    <a class="login" href="register.php">
                        <img class="logo-user" src="./img/user.png" alt="user-logo">
                    </a>
                    <a class="login" href="register.php">Login</a>
                </nav>
            </div>
        </div>

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
                <div class="arrow-container "><img class="arrow arrow-left" src="./img/left_arrow.svg" alt="left-arrow"></div>

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

                <div class="arrow-container"><img class="arrow arrow-right" src="./img/right_arrow.svg" alt="right-arrow"></div>
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

    <footer class="footer">
        <div class="footer-layout">
            <div class="logo">
                <a href="index.php">
                    <img class="logo-footer" src="./img/graphic-identifier.png" alt="graphic-identifier">
                </a>
            </div>

            <div class="links">
                <h2 class="footer-title">
                    about us
                </h2>
                <ul class="footer-links">
                    <a href="">
                        <li>Reservation rules and policies</li>
                    </a>
                    <a href="">
                        <li>Accessibility</li>
                    </a>
                    <a href="">
                        <li>Address</li>
                    </a>
                    <a href="">
                        <li>Account</li>
                    </a>
                    <a href="">
                        <li>Contact Us</li>
                    </a>
                    <a href="">
                        <li>Help</li>
                    </a>
                    <a href="">
                        <li>Download our mobile app</li>
                    </a>
                </ul>
                <div class="download-app">
                    <a href="https://www.apple.com/la/app-store/">
                        <img src="./img/app-store.png" alt="app-store">
                    </a>
                    <a href="https://play.google.com/store/">
                        <img src="./img/google-play.png" alt="google-play">
                    </a>
                </div>
            </div>

            <div class="ctn-form">

                <h4 class="subtitle">write to us</h4>
                <form class="form">
                    <input class="placeholder" type="text" placeholder="Email Address">
                    <input class="submit" type="submit" value="">
                </form>

                <h4 class="subtitle">
                    Search us in:
                </h4>

                <div class="footer-network">
                    <a href="https://www.facebook.com/?locale=es_LA"><img src="./img/facebook-link.png"
                            alt="facebook"></a>
                    <a href="https://www.instagram.com/"><img src="./img/instagram-link.png" alt="instagram"></a>
                    <a href="https://www.whatsapp.com/?lang=es_LA"><img src="./img/whatsApp-link.png"
                            alt="whatsApp"></a>
                    <a href="https://twitter.com/?lang=es"><img src="./img/twitter-link.png" alt="twitter"></a>
                </div>


            </div>




        </div>

        <p class="text-end">
            © All rights reserved. Quintana del rey 2023
        </p>
    </footer>

    <script src="./js/funtions.js"></script>


</body>

</html>