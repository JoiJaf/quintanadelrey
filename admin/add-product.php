<?php

require_once '../database.php';

$categories=$database->select("tb_categorias","*");
$cantpaxs=$database->select("tb_cant_personas","*");

$message="";
    
    if($_POST){
        if(isset($_FILES["platillo_img"])){
            $errors=[];
            $file_name=$_FILES["platillo_img"]["name"];
            $file_size=$_FILES["platillo_img"]["size"];
            $file_tmp=$_FILES["platillo_img"]["tmp_name"];
            $file_type=$_FILES["platillo_img"]["type"];
            $file_ext_arr=explode(".",$_FILES["platillo_img"]["name"]);

            $file_ext=end($file_ext_arr);
            $img_ext=["jpeg", "png", "jpg", "webp"];

            if(!in_array($file_ext,$img_ext)){
                $errors[]="File type is not supported";
                $message="File type is not supported";
            }

            if(empty($errors)){
                //no subir archivos de mas de 2Mg
                $filename = strtolower($_POST["platillo_nombre"]);
                $filename = str_replace(',', '', $filename);
                $filename = str_replace('.', '', $filename);
                $filename = str_replace(' ', '-', $filename);
                $img=$_POST["platillo_catego"]."-".$filename.".".$file_ext;
                move_uploaded_file( $file_tmp, "../img/".$img);

            $database->insert("tb_info_platillo",[
             "platillo_nombre"=>$_POST["platillo_nombre"],
             "platillo_img"=>$img,
             "platillo_catego"=>$_POST["platillo_catego"],
             "platillo_descrip"=>$_POST["platillo_descrip"],
             "platillo_precio"=>$_POST["platillo_precio"],
             "platillo_cant_per_porci"=>$_POST["platillo_cant_per_porci"],
             "destacado"=>$_POST["destacado"]
            ]);
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
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<h2>New product</h2>
    
    <form action="#" method="post">
    <div>
        <label for="platillo_nombre">Name:</label>
        <input id="platillo_nombre" name="platillo_nombre" type="text">
    </div>

    <div>
    <label for="platillo_descrip">Descripcion:</label>
    <textarea id="platillo_descrip" name="platillo_descrip" id="" cols="30" rows="10"></textarea>
    </div>

    <div>
        <label for="platillo_catego">Category:</label>
        <select name="platillo_catego" id="platillo_catego">
            <?php 
                foreach($categories as $category){

                        echo"<option value='".$category["id_categorias"]."'>".$category["categ_nombre"]."</option>";
                }
            ?>
        </select>
    </div>

    <div>
        <label for="cant_pers_descrip">Portions:</label>
        <select name="cant_pers_descrip" id="cant_pers_descrip">
            <?php 
                foreach($cantpaxs as $cantpax){

                    echo"<option value='".$cantpax["id_categorias"]."'>".$cantpax["cant_pers_descrip"]."</option>";
                }
            ?>
        </select>
    </div>

    <div>
        <label for="platillo_precio">Price: €</label>
        <input id="platillo_precio" name="platillo_precio" type="text">
    </div>
    <div>
        <label for="destacado">Outstanding:</label>
        <input id="destacado" name="platillo_precio" type="checkbox" value=1>
    </div>

    <div>
                <label for="platillo_img">Image</label>
                <img id="preview" src="./imgs/<?php echo $items[0]["platillo_img"]?>" alt="Preview">
                <input id="platillo_img" type="file" name="platillo_img" onchange="readURL(this)">
            </div>

            <div>
                <input class="submit-btn" type="submit" value="Add New Product">
            </div>
    </form>
    
    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        
    </script>

        
</body>
</html>