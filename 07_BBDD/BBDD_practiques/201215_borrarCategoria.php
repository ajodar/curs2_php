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
        $sql = "DELETE FROM categories WHERE CategoryID = 100";
        if($conn->query($sql)){
            echo "S'ha esborrat categoria"; 
        }else{
            echo "NO s'ha esborrat";
        }
        
    }
?>