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


    </header>


    <main>


        <section class="ctn-us">
            <img class="img-us" src="./img/perfil.webp" alt="">
            <h2 class="us-name">Cuenta de usuario</h2>
        </section>

        <div class="container-profile">

            <aside class="sidebar">
                <ul class="list-pr">
                    <a href="acount.php">
                        <li class="sb-ctn-link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                                <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                            </svg>
                            <p class="sb-text clr">my profile</p>
                        </li>
                    </a>

                    <hr>

                    <a href="orders.php">
                        <li class="sb-ctn-link">

                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#9e9e9e"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M17 17h-11v-14h-2" />
                                <path d="M6 5l14 1l-1 7h-13" />
                            </svg>
                            <p class="sb-text">my orders</p>
                        </li>
                    </a>


                </ul>

            </aside>

            <div>
                <div>
                    <h3 class="subtitle">Information</h3>
                    <hr>
                    <form action="">
                        <div class="fr-space">
                            <label class="fr-text" for="">Name:</label>
                            <div class="size-fr">
                                <input class="fr-input-us" type="text" value="name">
                                <input class="fr-input-us" type="text" value="surname">
                            </div>

                        </div>

                        <div class="fr-space">
                            <label class="fr-text" for="">Phone:</label>
                            <input class="fr-input-us" type="text" value="" placeholder="">
                        </div>

                        <div class="fr-space">
                            <label class="fr-text" for="">E-mail:</label>
                            <input class="fr-input-us" type="text" value="" placeholder="venezuela@gmail">
                        </div>

                        <div class="fr-space">
                            <label class="fr-text" for="">birthdate:</label>
                            <input class="fr-input-us" type="date">
                        </div>

                        <input class="fr-button" type="submit">

                    </form>
                </div>

                <div class="passw">
                    <h3 class="subtitle">password</h3>
                    <hr>
                    <form action="">
                        <div class="fr-space">
                            <label class="fr-text" for="">New password</label>
                            <input class="fr-input-us" type="password">
                        </div>

                        <input class="fr-button" type="submit" name="" id="">
                    </form>
                </div>

            </div>


        </div>


    </main>



    <?php
    include("./parts/footer.php");
    ?>

    <script src="./js/funtions.js"></script>


</body>

</html>