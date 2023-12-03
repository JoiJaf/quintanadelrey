<?php
    require_once 'database.php';
    // Reference: https://medoo.in/api/insert
    if($_GET){
        $newUser = $database->select("tb_usuarios","*",[
            "id_usuario"=>$_GET["id"]
        ]);
    }
?>
<!-- hay que dar formato a esto -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response</title>
</head>
<body>
    <h1>Thanks for register on our website</h1>
    <?php
    echo $newUser[0]["nombre"]."<br>";
    ?>
    <div>
    <a href="register.php?="<?php echo $newUser[0]["id_usuario"];?>>Login</a>
    </div>
    <a href="index.php">Return to main page</a>
    <p></p>
</body>
</html>