<?php
require_once 'database.php';

if($_POST){
    var_dump($_POST);
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT, ['cost' => 12]);//revisar
    $database->insert("tb_usuarios",[
        "nombre"=> $_POST["firstName"],
        "apellido"=> $_POST["lastName"],
        "cedula"=> $_POST["id"],
        "telefono"=> $_POST["phone"],
        "correo"=> $_POST["email"],
        "fecha_nacimiento"=> $_POST["birthday"],
        "nombre_usuario"=> $_POST["user"],
        "contrasena"=> $pass
    ]);
}

if($_GET){

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
                    <a class="navigation-link" href="#">Restaurant</a>
                    <a class="navigation-link" href="#">Contact</a>

                    <a class="login" href="register.php">
                        <img class="logo-user" src="./img/user.png" alt="user-logo">
                    </a>
                    <a class="login" href="register.php">Login</a>
                </nav>
            </div>
        </div>


    </header>

    <main>
        <div class="register-ctn">

            <section class="login-ctn">
                <h2 class="login-title">log in</h2>
                <img class="login-shield" src="./img/escudo.png" alt="">
                <div class="login-form-ctn">
                    <form class="form-ctn" method="get" action="index.php">
                        <div class="form-inputs">
                            <img src="./img/min-login.png" alt="">
                            <input class="fr-input_log" type="text">
                        </div>

                        <div class="form-inputs">
                            <img src="./img/min-pwd.png" alt="">
                            <input class="fr-input_log" type="text">
                        </div>
                    </form>
                    <div class="form-tools">
                        <div>
                            <input type="checkbox"> <span>remember user</span>
                        </div>
                        <a class="link-pwd" href=""> ¿forget your password?</a>
                    </div>


                    <a href="index.php">
                        <img src="./img/btn_logIn.png" alt="">
                    </a>

                    <hr>

                    <div class="login-btns">
                        <a href="">
                            <img src="./img/btn_google.png" alt="">
                        </a>
                        <a href="">
                            <img src="./img/btn_face.png" alt="">
                    </div>


                    </a>

                </div>

            </section>


            <section class="registration">

                <h2 class="login-title">create Account</h2>
                <img class="login-shield" src="./img/escudo.png" alt="">
                <div class="login-form-ctn">
                    <form class="form-ctn"  method="post" action="response.php">

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Nombre: </p>
                            <input name="firstName" class="fr-input_log" type="text" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Apellidos: </p>
                            <input name="lastName" class="fr-input_log" type="text" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Identificacion: </p>
                            <input name="id" class="fr-input_log" type="text" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Usuario: </p>
                            <input name="user" class="fr-input_log" type="text" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Contraseña: </p>
                            <input name="password" class="fr-input_log" type="password" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Teléfono: </p>
                            <input name="phone" class="fr-input_log" type="text" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Correo: </p>
                            <input name="email" class="fr-input_log" type="text" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <div class="register">
                            <div class="register-align">
                            <p class="register-text">Fecha de nacimiento: </p>
                            <input name="birthday" class="fr-input_log" type="date" class=""></input>
                            </div>
                            
                            <hr class="register-bar">
                        </div>

                        <input class="createAcountbtn" type="submit" value="Crear Cuenta">

                    </form>

            </section>

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