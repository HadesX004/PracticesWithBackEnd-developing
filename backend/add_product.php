<?php

    $err = (int) 0;

    if(!empty($_POST["sku"])){
        $sku = $_POST["sku"];

    }else {
        echo("<script>alert('please fill in the SKU field')</script>");
        $err += 1;
        //header("Location: http://127.0.0.1/index.php");

    }

    if(!empty($_POST["name"])){
        $name = $_POST["name"];

    }else {
        echo("<script>alert('please fill in the NAME field')</script>");
        //header("Location: http://127.0.0.1/index.php");
        $err += 1;

    }
    
    if(!empty($_POST["price"])){
        $price = $_POST["price"];

    }else {
        echo("<script>alert('please fill in the PRICE field')</script>");
        //header("Location: http://127.0.0.1/index.php");

    }

    echo($sku."\n");
    echo($name."\n");
    echo($price."\n");


    /*
    if(isset($_POST["typeSelected"])){
        $typeSelected = $_POST["typeSelected"];

        if(isset($_POST["size"])){
            if(!empty($_POST["size"])) {
                $size = $_POST["size"];

            }else {
                echo("<script>alert('please fill in the size field')</script>");
                header("Location: http://127.0.0.1/index.php");

            }

        }else if(isset($_POST["weight"]) ){
            if(!empty($_POST["weight"])) {
                $weight = $_POST["weight"];

            }else {
                echo("<script>alert('please fill in the size field')</script>");
                header("Location: http://127.0.0.1/index.php");

            }

        }else {
            if(isset($_POST["height"]) and isset($_POST["width"]) and isset($_POST["length"])){
                $height = $_POST["height"];
                $width = $_POST["width"];
                $length = $_POST["length"];

            }else {
                echo("please confirm that all three fields are filled out");
                header("Location: http://127.0.0.1/index.php");

            }
        
        }

    }else {
        header("Location: http://127.0.0.1/index.php");

    }
    */

?>