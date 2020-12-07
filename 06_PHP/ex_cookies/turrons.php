<?php include("control_idioma.php") ?>

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
        .descripcio img{
            width: 500px;
        }
        .navbar, .titol{
            text-align: center;
            padding: 10px;
        }
    </style>

</head>
<body>
    <div class="container">
        <!-- Navbar -->
        <div class="row navbar">
            <div class="col">
                <a href="turrons.php">Turrons</a>
            </div>
            <div class="col">
                <a href="polvorons.php">Polvorons</a>
            </div>
            <div class="col">
                <a href="xocolatines.php">Xocolatines</a>
            </div>
            <div class="col">
                <a href="turrons.php?lang=es" id="lang_ES" <?php if($lang == "es"){echo "style='backgroud-color: red'";} ?> >ES</a> / 
                <a href="turrons.php?lang=ca" id="lang_CA" >CA</a> / 
                <a href="turrons.php?lang=en" id="lang_EN">EN</a>
            </div>
            <div class="col">
                <a href="" >A</a> / <a href="" >A</a> / <a href="">A</a>
            </div>
        </div>

        <!-- Contingut de la pàg -->
        <div class="row">
            <div class="col titol">
                <h1>
                    <?php if($lang=="es"){
                        echo "turrones";
                    }elseif($lang=="ca"){
                        echo "turrons";
                    }else{
                        echo "english turr";
                    }
                    ?>
                </h1>
            </div>
            
        </div>

        <?php 
            $text = array("Text en espanyol", "Text en català", "Text en anglès")
        ?>
        <div class="row descripcio">
            <div class="col">
                <img src="turro.jpg" alt="">
            </div>
            <div class="col">
                <p>
                    <?php if($lang == "es"){
                        echo $text[0]; 
                    } elseif($lang == "ca"){
                        echo $text[1];
                    } else{
                        echo $text[2];
                    }
                    ?>
                </p>
            </div>
            
        </div>
    </div>
</body>
</html>