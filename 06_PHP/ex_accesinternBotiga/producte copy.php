<?php
    session_start()
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
        #navbar, #titol{
            text-align: center;
        }
    </style>


</head>
<body>


    <!--Comprova el valor d'usuari/contrasenya i accedeix a l'enllaç -->
    <?php if(isset( $_SESSION["usuari"])){
            echo "HOLA USER";
    } else{?>

        <?php if(isset( $_POST["usuari"])&&(isset($_POST["contrasenya"]))){ 
            $usuari = $_POST["usuari"];
            $contrasenya = $_POST["contrasenya"]; ?>

            <!-- Comprova valors de usuari i mostra pàg web segons si estàs registrat o si no -->
            <?php if( (($usuari == "Joan") && ($contrasenya == "abc")) || (($usuari == "Pere") && ($contrasenya == "abc")) || (($usuari == "Maria") && ($contrasenya == "as28"))){ ?>

                <!-- Crea variables de sessió -->
                <?php 
                    $_SESSION["usuari"] = $usuari;
                ?>

                <!-- Crea la pàgina web -->
                <div class="container">
                    <!-- Navbar -->
                    <div class="row" id="navbar">
                        <div class="col">
                            <a href="producte.php">Productes</a>
                        </div>
                        <div class="col">
                            <a href="clients.php">Clients</a>
                        </div>
                        <div class="col">
                            <a href="comandes.php">Comandes</a>
                        </div>
                        <div class="col">
                            <p>Hola <?php echo $_SESSION["usuari"] ?> </p>
                        </div>
                        <div class="col">
                            <a href="login.php">Logout</a>
                        </div>
                    </div>
                    <!-- Titol contingut -->
                    <div class="row" id="titol">
                        <div class="col">
                            <h1>Productes</h1>
                        </div>
                    </div>
                    <!-- Contingut -->
                    <div class="row" id="titol">
                        <div class="col">
                            <div>Capa amb els productes</div>
                        </div>
                    </div>
                </div>


            <?php } else{ ?>
                <p>No estàs registrat, dirigeix-te a la pàgina principal: </p>
                <a href="login.php">Pàgina principal</a>
            <?php } ?>

        <?php } else{ ?>
            <p>No estàs registrat, dirigeix-te a la pàgina principal: </p>
            <a href="login.php">Pàgina principal</a>
        <?php } ?>
    <?php } ?>
        
    
    
    
    
    


    


</body>
</html>