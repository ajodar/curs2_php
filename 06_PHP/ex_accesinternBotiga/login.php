<?php
    session_start();
?>

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
            text-align:center
        }
    </style>


</head>
<body>
    <?php if(isset($_SESSION["usuari"])){
        unset($_SESSION["usuari"]);
        echo "Usuari borrat";
    } else{
        echo "usuari no borrat"; 
    }?>
    


    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Accès per empleats</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="producte.php" method="post">
                    <label for="usuari">Usuari </label> <br>
                    <input type="text" name="usuari" id="usuari">
                    <br><br>

                    <label for="contrasenya">Contrasenya</label> <br>
                    <input type="password" name="contrasenya" id="contrasenya">
                    <br><br>

                    <input type="submit" value="LOGIN">
                </form>
            </div>
        </div>
    </div>
</body>
</html>