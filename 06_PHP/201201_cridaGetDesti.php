<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET["producte"])){
            $producte = $_GET["producte"];

        }
        else{
            $producte = 0;
        }
        $productes = array("fotos/logo.png", "fotos/caracol.jpg", "fotos/marieta.jpg", "fotos/gallo.jpg")
    ?>

    <img src="<?php echo $productes[$producte]; ?>" alt="">

     
</body>
</html>