<?php

require_once '../database.php';

$categories=$database->select("tb_categorias","*");
$cantpaxs=$database->select("tb_cant_personas","*");

$message="";

if($_GET){
    $data=$database->select("tb_info_platillo","*",["id_platillo"=>$_GET["id"]]);
}


    
if($_POST){
    $item=$database->select("tb_info_platillo","*",["id_platillo"=>$_POST["id"]]);

    if(isset($_FILES["platillo_img"])&& $_FILES["platillo_img"]["name"] !=""){
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
            var_dump("error encontrado");
        }

            if(empty($errors)){
                //no subir archivos de mas de 2Mg
                $filename = strtolower($_POST["platillo_nombre"]);
                $filename = str_replace(',', '', $filename);
                $filename = str_replace('.', '', $filename);
                $filename = str_replace(' ', '-', $filename);
                $img=$_POST["categ_nombre"]."-".$filename.".".$file_ext;
                move_uploaded_file( $file_tmp, "../img/".$img);
            }
            } else{
            $img = $item[0]["platillo_img"];    
            }
              $database->update("tb_info_platillo",[
                "platillo_nombre"=>$_POST["platillo_nombre"],
                "platillo_img"=>$img,
                "platillo_catego"=>$_POST["categ_nombre"],
                "platillo_descrip"=>$_POST["platillo_descrip"],
                "platillo_precio"=>$_POST["platillo_precio"],
                "platillo_cant_per_porci"=>$_POST["cant_pers"],
                "destacado"=>$_POST["valor"]
              ],["id_platillo"=>$_POST["id"]
            
             ]);
            header("location: ../products-list.php");
            
        
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabin:wght@500;700&family=Marcellus&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/admin-main.css">
</head>
<body>
<h2>Update product</h2>
    <?php
    echo $message;

    ?>
    <form action="edit-product.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="platillo_nombre">Name:</label>
        <input id="platillo_nombre" name="platillo_nombre" type="text" value="<?php echo $data[0]["platillo_nombre"]?>">
    </div>
    
    <div>
    <label for="platillo_descrip">Descripcion:</label>
    <textarea id="platillo_descrip" name="platillo_descrip" id="" cols="30" rows="10"> <?php echo $data[0]["platillo_descrip"];?> </textarea>
    </div>

    <div>
        <label for="categ_nombre">Category:</label>
        <select name="categ_nombre" id="categ_nombre">
            <?php 
            foreach($categories as $category){
                if($data[0]["platillo_catego"]==$category["categ_nombre"]){
                    echo"<option value='".$category["categ_nombre"]."' selected>".$category["categ_nombre"]."</option>";
                }else{
                    echo"<option value='".$category["categ_nombre"]."'>".$category["categ_nombre"]."</option>";
                }
            }
            ?>
        </select>
    </div>

    <div>
        <label for="cant_pers">Portions:</label>
        <select name="cant_pers" id="cant_pers">
            <?php
            
            foreach($cantpaxs as $cantpax){
                if($data[0]["platillo_cant_per_porci"]==$cantpax["id_cant_pers"]){
                    echo"<option value='".$cantpax["id_cant_pers"]."' selected>".$cantpax["cant_pers"]."</option>";
                }else{
                    echo"<option value='".$cantpax["id_cant_pers"]."'>".$cantpax["cant_pers"]."</option>";
                }
            }
            ?>
        </select>
    </div>

    <div>
        <label for="platillo_precio">Price: €</label>
        <input id="platillo_precio" name="platillo_precio" type="text" value="<?php echo $data[0]["platillo_precio"]?>">
    </div>
    <div>
        <label for="destacado">Outstanding:</label>
        <input id="destacado" name="destacado" type="checkbox" onclick="toggleValue()">
        <input type="hidden" id="valor" name="valor" value="<?php echo $data[0]["destacado"]?>">
    </div>

            <div>
                <label for="platillo_img">Image</label>
                <img class="div-image" id="preview" src="../img/<?php echo $data[0]["platillo_img"];?>" alt="Preview">
                <input id="platillo_img" type="file" name="platillo_img" onchange="readURL(this)">
            </div>

            <input type="hidden" id="id" name="id" value="<?php echo $data[0]["id_platillo"]?>">

            <div>
            <input class="submit-btn" type="submit" value="Edit Product">
            </div>
    </form>
    
    <script>
        
        document.addEventListener("DOMContentLoaded", function() {
            var checkbox = document.getElementById("destacado");
            var valueField = document.getElementById("valor");

            if (parseInt(valueField.value) === 1) {
                checkbox.checked = true;
            }

            checkbox.addEventListener("click", function() {
                toggleValue();
            });
        });

        function toggleValue() {
            var checkbox = document.getElementById("destacado");
            var valueField = document.getElementById("valor");

            if (checkbox.checked) {
                valueField.value = 1;
            } else {
                valueField.value = 0;
            }
        }

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