<?php
    require_once 'database.php';
    // Reference: https://medoo.in/api/insert
    if($_POST){
        
    // $pass = password_hash($_POST["password"], PASSWORD_DEFAULT, ['cost' => 12]);//revisar
    // $database->insert("tb_usuarios",[
    //     "nombre"=> $_POST["firstName"],
    //     "apellido"=> $_POST["lastName"],
    //     "cedula"=> $_POST["id"],
    //     "telefono"=> $_POST["phone"],
    //     "correo"=> $_POST["email"],
    //     "fecha_nacimiento"=> $_POST["birthday"],
    //     "nombre_usuario"=> $_POST["user"],
    //     "contrasena"=> $pass
    // ]);
    //header("location: index.php");
    }
    if($_GET){
        $newUser = $database->select("tb_usuarios","*",[
            "id_usuario"=>$_GET["id"]
        ]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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