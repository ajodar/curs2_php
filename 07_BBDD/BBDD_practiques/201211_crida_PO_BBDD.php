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
    $sql = "SELECT * FROM employees";
    $employees = $conn->query($sql);

    if($employees->num_rows > 0){
        //Agafar una dada: 
        $employee = $employees->fetch_assoc();
        echo $employee["FirstName"]." ".$employee["LastName"];
    }
    ?>

    <h2>Agafar totes les dades</h2>
    <?php

    if($employees->num_rows > 0){
        //Agafar totes les dades: 
        while($employee = $employees->fetch_assoc()){
            echo $employee["FirstName"]." ".$employee["LastName"]."<br>";
        }
    }
    ?>

    <!-- Tanca connexió -->
    <?php
        $conn->close();
    ?>
</body>
</html>