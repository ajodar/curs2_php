<!-- Connexió a la BBDD -->
<?php
    //Variables de connexió
    $server = "localhost";
    $username = "root"; 
    $password = ""; 
    $databasename = "introduccio_bbdd";

    //Connexió 
    $conn  = new mysqli($server, $username, $password, $databasename);
    if($conn->connect_error){
        echo "Connexió erronia".$conn->connect_error;
    }else{
        $sql = "UPDATE categories SET CategoryName='".$_POST["nom"]."' WHERE CategoryID = '".$_POST["categoryID"]."'";
        if($conn->query($sql)){
            echo "categoria canviada correctament";
        }else{
            echo "cat no canviada";
        }
        
    }

?>

