<?php 
    $arxiu = fopen("dades.txt", "r"); 
    while(!feof($arxiu)){
        echo fgets($arxiu)."<br>";
    }
    fclose($arxiu); 

?>