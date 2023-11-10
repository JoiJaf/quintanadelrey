<?php
require_once './database.php';

$products=$database->select("tb_info_platillo","*");
$drinks=[];
$maindishes=[];
$appetizers=[];
$desserts=[];

foreach($products as $product){
    if($product["platillo_catego"]=="Main dish"){
        $maindishes[]=$product;
        
    }else{
        if($product["platillo_catego"]=="Appetizers"){
            $appetizers[]=$product;

        }else{
            if($product["platillo_catego"]=="Drinks"){
                $drinks[]=$product;

            }else{
                $desserts[]=$product;

            }
        }  
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;700&family=Marcellus&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
<div class="add-product-div">
    <section>
    <h3>Main dishes</h3>
    <table>
        <?php
            foreach($maindishes as $maindishe){
                echo "<tr>";
                echo "<td>".$maindishe["platillo_nombre"]."</td>";
                echo "<td><a class='a-admin' href='#'>Edit</a> <a class='a-admin href='#'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    
    

    </section>
    <section>
    <h3>Appetizers</h3>
    <table>
        <?php
            foreach($appetizers as $appetizer){
                echo "<tr>";
                echo "<td>".$appetizer["platillo_nombre"]."</td>";
                echo "<td><a class='a-admin' href='#'>Edit</a> <a class='a-admin href='#'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

    </section>
    <section>
    <h3>Drinks</h3>
    <table>
        <?php
            foreach($drinks as $drink){
                echo "<tr>";
                echo "<td>".$drink["platillo_nombre"]."</td>";
                echo "<td><a class='a-admin' href='#'>Edit</a> <a class='a-admin href='#'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>

    </section>
    <section class="add-product-sect">
    <h3>Desserts</h3>
    <table>
        <?php
            foreach($desserts as $dessert){
                echo "<tr>";
                echo "<td>".$dessert["platillo_nombre"]."</td>";
                echo "<td><a class='a-admin' href='#'>Edit</a> <a class='a-admin href='#'>Delete</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    </section>
</div>

    
</body>
</html>