

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Saludar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <style>
        .container{
            text-align: center;
        }
        .imatge img{
            width: 600px;
            margin-bottom: 10px;
        }
    </style>

    
</head>
<body>
    
    <!-- Agafa data -->
    <?php
        $hora = date("H");
        echo $hora;
    ?>

    <div class="container">
        <div class="row">
            <div class="col titol">
                <?php if( ($hora >= 6) && ($hora < 13 ) ){ ?>
                    <h1>BON DIA</h1>
                <?php } elseif(($hora >=13) && ($hora < 20)){ ?>
                    <h1>BONA TARDA</h1>
                <?php } elseif(($hora >= 20) || ($hora <6)){ ?>
                    <h1>BONA NIT</h1>
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col imatge">
                <?php if( ($hora >= 6) && ($hora < 13 ) ){ ?>
                    <img src="bondia.jpg" alt="">
                <?php } elseif(($hora >=13) && ($hora < 20)){ ?>
                    <img src="bonatarda.jpg" alt="">
                <?php } elseif(($hora >= 20) || ($hora <6)){ ?>
                    <img src="bonanit.jpg" alt="">
                <?php } ?>
            </div>
        </div>

        <div class="row">
            <div class="col imatge">
                <?php if( ($hora >= 6) && ($hora < 13 ) ){ ?>
                    <p>“Write it on your heart that every day is the best day in the year.” – Ralph Waldo Emerson</p>
                <?php } elseif(($hora >=13) && ($hora < 20)){ ?>
                    <p>“Hope you have an afternoon as lovely as you are.”</p>
                <?php } elseif(($hora >= 20) || ($hora <6)){ ?>
                    <p>Each night you sleep is a signal that a new beginning awaits you.</p>
                <?php } ?>
                
            </div>
        </div>
       
    </div>

</body>
</html>