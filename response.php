<?php
    require_once 'database.php';
    // Reference: https://medoo.in/api/insert
    if($_POST){
    $database->insert("tb_usuarios",[
        "nombre"=> $_POST["firstName"],
        "apellido"=> $_POST["lastName"],
        "cedula"=> $_POST["id"],
        "telefono"=> $_POST["phone"],
        "correo"=> $_POST["email"],
        "fecha_nacimiento"=> $_POST["birthday"],
        "nombre_usuario"=> $_POST["user"],
        "contrasena"=> $_POST["password"]
    ]);
    header("location: index.php");
    }
    if($_GET){

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
    <h1>Gracias por registrarte en nuestro sitio web</h1>
    <?php
    echo $_POST["firstName"];
    ?>
    <p></p>
</body>
</html>