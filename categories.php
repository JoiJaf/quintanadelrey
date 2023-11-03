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
                <a class="logo" href="index.html">
                    <img src="./img/graphic-identifier.png" alt="graphic-identifier">
                </a>

                <!-- mobile nav btn -->

                <input class="mobile-check" type="checkbox">
                <label class="mobile-btn">
                    <span></span>
                </label>

                <!-- mobile nav btn -->

                <nav class="navigation">
                    <a class="navigation-link" href="index.html">Home</a>
                    <a class="navigation-link" href="categories.html">Product</a>
                    <a class="navigation-link" href="#">Restaurant</a>
                    <a class="navigation-link" href="#">Contact</a>

                    <a class="login" href="#">
                        <img class="logo-user" src="./img/user.png" alt="user-logo">
                    </a>
                    <a class="login" href="#">Login</a>
                </nav>
            </div>
        </div>

        <div class="banner-platoFuerte">
            <div class="mask-c align">


                <h1 class="bnr-title ">
                    Main Courses
                </h1>

                <h4 class="bnr-text align-bnr-text ">
                    page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here,
                </h4>

            </div>
        </div>

    </header>

    <main>

        <!-- Categories -->
        <div>
            <div class="titles">
                <h3> Categories</h3>
            </div>
            <div class="categories-container">
                <a class="each-category">
                    <img class="categories-image" src="./img/entrada.jpg" alt="Entradas">
                    <h4 class="text-set">Appetizers</h4>
                </a>

                <a class="each-category">
                    <img class="categories-image" src="./img/plato_fuerte.jpg" alt="PlatoFuerte">
                    <h4 class="text-set">Main course</h4>
                </a>

                <a class="each-category">
                    <img class="categories-image" src="./img/Postres.png" alt="Postres">
                    <h4 class="text-set">Desserts</h4>
                </a>

                <a class="each-category">
                    <img class="categories-image" src="./img/bebidas.jpg" alt="bebidas">
                    <h4 class="text-set">Drinks</h4>
                </a>

            </div>
        </div>

        <!-- End Categories -->

        <!-- Filters -->

        <!-- <div class="filters">
            <section class="filters-align">
                <h3 class="filter-title">Mode:</h3>

                <div class="filters-ctn">
                    <h4 class="filter-text">In site:</h4>
                    <img class="filters-img" src="./img/place_black.svg" alt="">
                </div>

                <div class="filters-ctn">
                    <h4 class="filter-text">Carry:</h4>
                    <img class="filters-img" src="./img/carry_black.svg" alt="">
                </div>

                <div class="filters-ctn">
                    <h4 class="filter-text">Empress:</h4>
                    <img class="filters-img" src="./img/express_black.svg" alt="">
                </div>
            </section>

            <section class="filters-align">
                <h3 class="filter-title">Servings:</h3>
                <div class="filters-ctn">
                    <h4 class="filter-text">Sigle:</h4>
                    <img class="filters-img" src="./img/single_black.svg" alt="">
                </div>

                <div class="filters-ctn">
                    <h4 class="filter-text">Couple:</h4>
                    <img class="filters-img" src="./img/couple_black.svg" alt="">
                </div>

                <div class="filters-ctn">
                    <h4 class="filter-text">Familiar:</h4>
                    <img class="filters-img" src="./img/familiar_black.svg" alt="">
                </div>
            </section>
        </div> -->

        <hr>

        <!-- End Filters -->

        <!-- Filtered food -->

        <section>

            <!-- This part is showed base on filters and created by javascript -->


            <div class="cards-container">

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>

                <div class="cards-ctn">
                    <a href="platillo.html" class="cards-info main-course cards-ctn ">
                        <div class="opacity">
                            <h2 class="cards-title /*cards-title-mod*/">Entradas</h2>
                            <p class="card-text">Nisi ratione nemo eligendi excepturi ipsa, aut at error, sit aliquid
                                impedit omnis. Totam delectus, ipsa earum cupiditate eligendi harum molestias iusto.</p>
                        </div>
                    </a>
                </div>





            </div>
        </section>

        <!-- Filtered food -->

    </main>

    <footer class="footer">
        <div class="footer-layout">
            <div class="logo">
                <a href="index.html">
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