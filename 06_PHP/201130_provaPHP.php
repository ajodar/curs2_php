
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php	
        $titol = "HOLA";
    ?>
    <title><?php echo $titol;?></title>
</head>
<body>
    <h1>Prova PHP</h1>
    <?php
        $missatge = "<p>Hola que tal estàs???????</p>";
        
        echo "<h2>HOLA, BENVOLGUT A LA MEVA PLANA </h2>";
        echo "<p> Bona tarda <p>";
        echo $missatge."<br>";
        echo "Fins aviat";
        echo "<h3>".$missatge."</h3>"; 
    ?>

    <hr>

    <?php
        $nom = "Miquel";
        $color = "red";
    ?>

    <p style="color:<?php echo $color; ?>"> Benvolgut senyor <?php echo $nom; ?> estem encantats que visiti la nostra web</p>
</body>
</html>