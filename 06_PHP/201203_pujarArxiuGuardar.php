<?php 

    if(!file_exists("fotosPujades")){
        mkdir("fotosPujades");
    }

    $nomarxiu = "fotosPujades/".basename($_FILES["foto"]["name"]);
    if(move_uploaded_file($_FILES["foto"]["tmp_name"], $nomarxiu)){
        echo "Càrrega correcte";
        echo "<img src='".$nomarxiu."'>";
        echo $nomarxiu;
    } else{
        "Càrrega incorrecte";
    }

?>