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
                    <a class="navigation-link" href="./about us/contact.php">Contact</a>

                    <a href="cart.php">
                        <svg width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M6 2a1 1 0 0 1 .993 .883l.007 .117v1.068l13.071 .935a1 1 0 0 1 .929 1.024l-.01 .114l-1 7a1 1 0 0 1 -.877 .853l-.113 .006h-12v2h10a3 3 0 1 1 -2.995 3.176l-.005 -.176l.005 -.176c.017 -.288 .074 -.564 .166 -.824h-5.342a3 3 0 1 1 -5.824 1.176l-.005 -.176l.005 -.176a3.002 3.002 0 0 1 1.995 -2.654v-12.17h-1a1 1 0 0 1 -.993 -.883l-.007 -.117a1 1 0 0 1 .883 -.993l.117 -.007h2zm0 16a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm11 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z"
                                stroke-width="0" fill="currentColor" />
                        </svg>
                    </a>

                    <a class="login" href="register.php">
                        <img class="logo-user" src="./img/user.png" alt="user-logo">
                    </a>
                    <a class="login" href="register.php">Login</a>
                </nav>
            </div>
        </div>


    </header>


    <main>
        <div class="bg-cart">
            <div class="cart-tl-ctn">
                <p class="cart-titles">imagen</p>
                <p class="cart-titles">platillo</p>
                <p class="cart-titles">cantidad</p>
                <p class="cart-titles">precio</p>
            </div>


            <div class="cart-element">
                <input class="cart-check" type="checkbox" name="" id="">
                <img class="cart-img" src="./img/banner.png" alt="">
                <p class="cart-text">nombre platillo</p>
                <input class="cart-num" type="number" min="0">
                <p class="cart-price">20$</p>

            </div>
            <hr>

            <div class="cart-element">
                <input class="cart-check" type="checkbox" name="" id="">
                <img class="cart-img" src="./img/banner.png" alt="">
                <p class="cart-text">nombre platillo</p>
                <input class="cart-num" type="number" min="0">
                <p class="cart-price">20$</p>

            </div>
            <hr>


        </div>

        <div class="cart-button-ctn">
            <input type="submit" class="fr-button cart-button" value="Clean cart">
            <p class="btn-price">Precio total: 40$</p>
            <input type="submit" class="fr-button" value="Pay">
        </div>






    </main>



    <?php
    include("./parts/footer.php");
    ?>

    <script src="./js/funtions.js"></script>


</body>

</html>