<?php
    if(isset($_POST["nom"]) && isset($_POST["descripcio"])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $databasename = "introduccio_bbdd";

        $conn = new mysqli($server,$username,$password,$databasename);

            if($conn->connect_error){
                echo "Connexió erronia";
            }else{
                $sql = "SELECT * FROM categories WHERE CategoryName = '".$_POST["nom"]."'";
                $results = $conn->query($sql);
                if($results->num_rows > 0){
                    echo "Ja existeix una categoria amb aquest nom";
                } else{
                    $sql = "INSERT INTO categories(CategoryName, Description) VALUES ('".$_POST["nom"]."', '".$_POST["descripcio"]."')";
                
                    if($conn -> query($sql)){
                        echo "La categoria s'ha creat correctament";
                    }else{
                        echo "ERROR";
                    }
                }

                
            }

    }


?>