<?php
require_once 'database.php';
$modalities= $database->select("tb_tipo_pedido","*");

if($_GET){

    $dish = $database->select("tb_info_platillo","*",["id_platillo"=> $_GET["id"]]);
    $portions=$database->select("tb_info_platillo",[
        "[><]tb_cant_personas"=>["platillo_cant_per_porci"=>"cant_pers"]
    ],[
        "id_platillo", "platillo_nombre", "cant_pers_descrip"
    ],["id_platillo"=> $_GET["id"]]);

    var_dump($portions);

}

if($_POST){

}
?>


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
                    <a class="navigation-link" href="">Restaurant</a>
                    <a class="navigation-link" href="">Contact</a>

                    <a class=" login" href="register.php">
                        <img class="logo-user" src="./img/user.png" alt="user-logo">
                    </a>
                    <a class="login" href="register.php">Login</a>
                </nav>
            </div>
        </div>

        <div class="banner-platillo" style="background: url(./img/<?php echo $dish[0]['platillo_img']?>)">
            <div class="mask">


            </div>
        </div>

    </header>

    <main>

        <section class="dish">
            <div class="dish-information">
                <h1 class="dish-title"><?php echo $dish[0]["platillo_nombre"] ?></h1>
                <?php
                if($dish[0]["destacado"]==1){
                    echo "<img class='dish-img' src='./img/star.png' alt='outstanding'>";
                }
                
                ?>
                
            </div>

            <h2 class="dish-subtitle">Description: </h2>

            <div class="dish-information">
                <p class="dish-text"><?php echo $dish[0]["platillo_descrip"] ?></p>
                <p class="dish-price">€ <?php echo $dish[0]["platillo_precio"] ?></p>
            </div>

        </section>

        <!-- parte de filtros -->

        <div class="specifications">
            <div class="specifications-adjust">
                <h2 class="specifications-text">Modality: </h2>
                <select class="select" name="select">
                <?php 
                foreach($modalities as $modality){

                        echo"<option value='".$modality["pedido_descripcion"]."'>".$modality["pedido_descripcion"]."</option>";
                }
            ?>
                    <!-- <option value="lounge">lounge</option>
                    <option value="express" selected>Express</option>
                    <option value="go">Go to take away</option> -->
                </select>
                <!-- <img src="./img/modality.png" alt="Modality"> -->
            </div>

            <div class="specifications-adjust">
                <h2 class="specifications-text">Portions: </h2>
                <select class="select" name="select">
                
                    <option value="individual"><?php echo $portions[0]["cant_pers_descrip"] ?></option>
                    <!-- <option value="couples" selected>Couples</option>
                    <option value="familiar">Familiar</option> -->
                </select>
                <!-- <img src="./img/portions.png" alt="portions"> -->
            </div>

        </div>

        <div class="details-ctn">
            <div class="accompaniment">
                <div class="accompaniment-align">
                    <h3 class="accompaniment-text">accompaniment 1</h3>
                    <div class="bg-button"><a class="accompaniment-btn">Select</a></div>
                    
                </div>

                <hr class="low-bar">

                <div class="accompaniment-align">
                    <h3 class="accompaniment-text">accompaniment 2</h3>
                    <div class="bg-button"><a class="accompaniment-btn">Select</a></div>
                </div>

            </div>

            <div class="accompaniment">
                <div class="accompaniment-align">
                    <h3 class="accompaniment-text">quantity</h3>
                    <input class="quantity" type="number" value="0" min="0" max="8">
                </div>

            </div>

            <h2 class="notes-add">additional notes</h2>

            <div class="accompaniment">
                <input type="text" class="text-area" placeholder="Write the instructions you need."></input>
                <hr class="low-bar">


            </div>

        </div>

        <!-- button to add to card -->

        <div class="ctn-btn-add">

            <a href="#" class="btn-add">
                <div class="circle">
                    <p>1</p>
                </div>

                Add to card

                <p class="dish-price">€ 20</p>
            </a>

        </div>

        <!-- button to add to card -->

        <!-- featured -->

        <div class="specifications">
            <h2 class="specifications-text text-bold"> related dishes</h2>
        </div>

        <div class="carousels-ctn-dishes">
            <div class="arrow-container "><img class="arrow arrow-left" src="./img/left_arrow.svg" alt="left-arrow">
            </div>


            <div class="info-ctn">
                <div class="carousel">
                    <div class="ctn-carrousel-dish">
                        <h3 class="carousels-information-title no-margin">baked rice</h3>
                        <a href="platillo.php" class="image-mask">
                            <img class="carousels-image" src="./img/arroz al horno.png" alt="dish">
                        </a>
                    </div>
                </div>


                <div class="carousel">
                    <div class="ctn-carrousel-dish">
                        <h3 class="carousels-information-title no-margin"> paella</h3>
                        <a href="platillo.php" class="image-mask">
                            <img class="carousels-image" src="./img/paella.jpg" alt="dish">
                        </a>
                    </div>
                </div>

                <div class="carousel">
                    <div class="ctn-carrousel-dish">
                        <h3 class="carousels-information-title no-margin"> pantineta</h3>
                        <a href="platillo.php" class="image-mask">
                            <img class="carousels-image" src="./img/pant-postre.jpg" alt="dish">
                        </a>
                    </div>
                </div>

            </div>

            <div class="arrow-container"><img class="arrow arrow-right" src="./img/right_arrow.svg" alt="right-arrow">
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