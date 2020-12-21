<!-- Connexió a la BBDD -->
<?php
    if((isset($_POST["nom"]) && isset($_POST["supplier"]) && isset($_POST["categoria"]) && isset($_POST["preu"]) && isset($_POST["disponibilitat"])) && (($_POST["nom"] != "" ) && ($_POST["supplier"] != 0) && ($_POST["categoria"] != 0) && ($_POST["preu"] != 0))  ){
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
            $sql = "SELECT * FROM products WHERE ProductName = '".$_POST["nom"]."'";
            $results = $conn->query($sql);

            if($results->num_rows > 0){
                echo "Ja existeix un producte amb aquest nom";
            }else{
                $sql = "INSERT INTO products(ProductName, SupplierID, CategoryID, UnitPrice, Discontinued) VALUES('".$_POST["nom"]."','".$_POST["supplier"]."','".$_POST["categoria"]."','".$_POST["preu"]."','".$_POST["disponibilitat"]."')";

                if($conn -> query($sql)){
                    echo "El producte s'ha creat correctament";
                }else{
                    echo "ERROR";
                }
            }
            
            
        }

    }else{
        echo "Completa el formulari correctament per afegir nous productes";
    }

?>