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
        #img_sabor{
            width: 200px;
        }
        #img_tipus{
            width: 300px;
            position: relative; 
            right: 250px;
        }
    </style>

</head>
<body>
    <?php 
        if(isset($_POST["tipusGelat"])){
            $tipus = $_POST["tipusGelat"];
        }
        else{
            $tipus = "Selecciona un gelat";
        }
    ?>

    <div class="container">
        <!-- Títol -->
        <div class="row">
            <div class="col">
                <h1>El teu gelat personalitzat </h1>
            </div>
        </div>
        <!-- Característiques + imatge -->
        <div class="row">
            <div class="col">
                <p>El teu gelat:</p>
                <ul>
                    <li> <?php echo $tipus ?> </li>
                    <li>Vainilla</li>
                    <li>Gran</li>
                </ul>
            </div>
            <div class="col imatge">
                <img src="imatges/vainilla" alt="" id="img_sabor">
                <img src="imatges/<?php echo $tipus ?>" id="img_tipus">
            </div>
        </div>
    </div>

</body>
</html>