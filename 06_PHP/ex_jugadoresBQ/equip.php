<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Equip LF2 - GEIEG UNI GIRONA</h1>
        <form action="equip.php" method="get">
            <input type="text" name="jugadora">
            <input type="submit" value="AFEGEIX">
        </form>
    </div>
    <div class="container">
        <h2>Equip actual</h2>
        <p>
            <?php
                if(isset($_GET["jugadora"])){
                    $jugadora = $_GET["jugadora"];

                    //Crea doc (si cal) i inclou jugadores al doc
                    file_put_contents( "jugadores.txt" , $jugadora."<a href='equip.php'>DELATE</a><br>", FILE_APPEND);

                    // Llegeix arxiu jugadores
                    $arxiu = fopen("jugadores.txt", "r"); 
                    while(!feof($arxiu)){
                        echo fgets($arxiu);
                    }
                    fclose($arxiu); 
                }
                

            ?>

                
        </p>
    </div>

    
</body>
</html>