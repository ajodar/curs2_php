<?php
    //Variables de connexió
    $server = "localhost";
    $username = "root"; 
    $password = ""; 
    $databasename = "introduccio_bbdd";

    //Connexió 
    $conn  = mysqli_connect($server, $username, $password, $databasename);
    if(!$conn){
        echo "Connexió erronia".mysqli_connect_error();
    }
    else{
        echo "Connexió amb èxit";
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BBDD</h1>

    <h2>Agafar una dada</h2>
    <?php
    //Consulta
    $sql = "SELECT * FROM customers";
    $customers = mysqli_query($conn, $sql);

    if(mysqli_num_rows($customers) > 0){
        //Agafar una dada: 
        //Primer llista
        $customer = mysqli_fetch_assoc($customers);
        echo $customer["ContactName"]." ". $customer["Phone"]."<br>";
        //Segon
        $customer = mysqli_fetch_assoc($customers);
        echo $customer["ContactName"]." ". $customer["Phone"]."<br>";
        //Tercer
        $customer = mysqli_fetch_assoc($customers);
        echo $customer["ContactName"]." ". $customer["Phone"]."<br>";

    }
    ?>

    <h2>Agafar totes les dades</h2>
    <?php

    if(mysqli_num_rows($customers) > 0){
        //Agafar totes les dades: 
        while($customer = mysqli_fetch_assoc($customers)){
            echo $customer["ContactName"]." - ".$customer["Phone"]."<br>";
        }
    }

    mysqli_close($conn)
    ?>

</body>
</html>