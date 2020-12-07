
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>ARRAYS</h1>
    <?php
        $jugadors = array("Anna", "Maria", "Pilar", "Vane");
        echo $jugadors[0]."<br>"; 

        for($i = 0; $i < count($jugadors); $i++){
            echo $jugadors[$i]."<br>";
        }

    ?>
</body>
</html>