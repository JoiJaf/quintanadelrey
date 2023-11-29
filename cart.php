<?php
require_once 'database.php';
$order=[];
$items= json_decode($_COOKIE['cart'], true);
$totalpay=0;

foreach($items as $item){
$totalpay+=$item["total"];
}

if ($_POST) {
    $cart=[];
    
    if (isset($_COOKIE['cart'])) {
        $data = json_decode($_COOKIE['cart'], true);
        $cart = $data;
    }

    $order["id_platillo"]=$_POST["id"];
    $order["platillo_nombre"]=$_POST["name"];
    $order["platillo_img"]=$_POST["img"];
    $order["qty"]=$_POST["quantity"];
    $order["price"]=$_POST["price"];
    $order["total"]=$_POST["price"]*$_POST["quantity"];

    $cart[]=$order;

    setcookie('cart', json_encode($cart), time()+72000);
    header("location: ./cart.php");
}

if($_GET){

     if (isset($_GET["id"])&&$_GET["action"]!=0){
         $data = json_decode($_COOKIE['cart'], true);
         array_splice($data, $_GET["id"], 1);
         $cart = $data;

        setcookie('cart', json_encode($cart), time()+72000);
        header("location: ./cart.php");

     }else{
        $cart=[];
        setcookie('cart', json_encode($cart), time()+72000);
        header("location: ./cart.php");
     }

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
            if (isset($_COOKIE['cart'])){

                foreach($items as $index=>$r_order){
                    //<input class='cart-check' type='checkbox'>
                    echo"<div class='cart-element'>"
                    ."<div><a  class='edit-delete-cart-btn edit-delete-cart-div' href='./cart.php?id=".$index."&&action=0'>Edit</a> <a class='edit-delete-cart-btn edit-delete-cart-div' href='./cart.php?id=".$index."&&action=1'>Delete</a></div>"
                    ."<img class='cart-img' src='./img/".$r_order['platillo_img']."' alt=''>"
                    ."<p class='cart-text'>".$r_order['platillo_nombre']."</p>"
                    ."<input disabled class='cart-num' type='number' min='0' value='".$r_order['qty']."'>"
                    ."<p class='cart-price'> €".$r_order['total']."</p>"
                    ."</div>"
                    ."<hr>";
                }


            }else{

                echo "No selected dishes.";

            }
            ?>

        </div>

        <div class="cart-button-ctn">
            <input id="cleancart" type="submit" class="fr-button cart-button" value="Clean cart">
            <p class="btn-price">Bill: €<?php echo $totalpay ?></p>
            <input type="submit" class="fr-button" value="Pay">
        </div>



    </main>



    <?php
    include("./parts/footer.php");
    ?>

    <script src="./js/funtions.js">

    </script>


</body>

</html>