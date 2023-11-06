<?php
    require_once '../database.php';
    
    include('simple_html_dom.php');

    //link
    $link = "https://www.allrecipes.com/recipes/17846/world-cuisine/european/spanish/main-dishes/";

    $items = file_get_html($link); //$locations

    $foods = [];
    $filenames = [];
    $descriptions = [];

    //save destination locations and filenames for the images
    foreach ($items->find('.card__title-text') as $item){
        $food = trim(str_get_html($item)->plaintext);
        $foods[] = $food;
        //
        $filename = strtolower($food);
        $filename = str_replace(',', '', $filename);
        $filename = str_replace('.', '', $filename);
        $filename = str_replace(' ', '-', $filename);
        $filenames[] = $filename;
    }

    //save destination descriptions
    $pos = -1;
    foreach ($locations->find('.mntl-sc-block-html') as $description){
       $pos++;
       if($pos > 2){
            $descriptions[] = trim($description->plaintext);
       }
    }

    //get and download destination images
    $index = 0;
    /*foreach ($locations->find('.universal-image__image') as $image){
        if($image->src != ""){
            if($index < count($filenames)){
                file_put_contents("../camping/imgs/location-".$filenames[$index].".jpg", file_get_contents($image->src));
                $index++;
            }
        }
    }*/

    for($i=0; $i<24; $i++){
        // Reference: https://medoo.in/api/insert
        $database->insert("tb_destinations",[
            "destination_lname"=> $destinations[$i],
            "destination_sname"=> "name",
            "destination_description"=> $descriptions[$i],
            "destination_image"=> "location-".$filenames[$i].".jpg",
            "destination_price"=> 36.50
        ]);
    }
    

?>