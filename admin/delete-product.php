<?php

require_once '../database.php';

$data=$database->select("tb_info_platillo","*",["id_platillo"=>$_GET["id"]]);

if($_POST){
    $database->delete("tb_info_platillo",[
        "id_platillo"=>$_POST["delete"]
    ]);

    header("location: ../products-list.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
    <form  action="delete-product.php" method="post">
        <h2>Delete Product</h2>
        <?php
        echo "You are going to delete: <strong>".$data[0]["platillo_nombre"]."</strong> from the Database";
        echo "<br>";
        echo "<br>";
        echo "<label for='delete'>Are you sure to proceed with this action? (<strong>This is not reversible</strong>)</label>";
        echo "<br>";
        ?>
        <input type="hidden" name="delete" id="delete" value="<?php echo $_GET["id"];?>">
        <input type="submit" value="delete">
    </form>
    <a class="a-admin" href="../products-list.php"> Go back</a>
</body>
</html>