
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOLA</h1>
    <?php 
        $pizza = array("massa" => "fina", "salsa" => "tomata");
        $pizza["ingredient1"] = "pinya";
        $pizza["ingredient2"] = "anxoves";
        // if(array_key_exists("salsa", $pizza)){
        //     echo $pizza["salsa"];
        // }
        if(isset($pizza["ingredient2"])){
            echo $pizza["ingredient2"];
        }

        $tauler = array(array("0.0","0.1","0.2"), array("1.0","1.1","1.2"),array("2.0","2.1","2.2"));
        echo $tauler[1][0];
    ?>
</body>
</html>