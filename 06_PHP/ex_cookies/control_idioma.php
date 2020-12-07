<?php
    if(isset($_GET["lang"])){
        $lang = $_GET["lang"];
        setcookie("lang", $lang, time()+(60*60));
        echo "Cookie creada".$lang;
    } else{
        if(isset($_COOKIE["lang"])){
            $lang = $_COOKIE["lang"];
            echo "Ja teniem cookie"; 
        } else{
            $lang = "es";
            echo "Per defecte espanyol";
        }
    }
?>