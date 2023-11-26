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
    <link rel="stylesheet" href="./css/admin-main.css">


</head>

<body>

    <header class="header">

        <?php
        include("./parts/headerNav.php");
        ?>


    </header>


    <main>
        <div class="bg-cart">
            <div class="cart-tl-ctn">
                <p class="cart-titles">imagen</p>
                <p class="cart-titles">platillo</p>
                <p class="cart-titles">cantidad</p>
                <p class="cart-titles">precio</p>
            </div>


            <?php
            if (isset($_COOKIE['platillo_img']) && isset($_COOKIE['platillo_nombre']) && isset($_COOKIE['platillo_cantidad']) && isset($_COOKIE['platillo_precio'])) {

                ?>

                <div class="cart-element">
                    <input class="cart-check" type="checkbox" name="" id="">
                    <img class="cart-img" src="./img/<?php echo $_COOKIE['platillo_img']; ?>" alt="">
                    <p class="cart-text">
                        <?php echo $_COOKIE['platillo_nombre']; ?>
                    </p>
                    <input class="cart-num" type="number" min="0" value="<?php echo $_COOKIE['platillo_cantidad']; ?>">
                    <p class="cart-price">
                        <?php echo $_COOKIE['platillo_precio']; ?>$
                    </p>
                </div>
                <hr>

                <?php
            }
            ?>

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