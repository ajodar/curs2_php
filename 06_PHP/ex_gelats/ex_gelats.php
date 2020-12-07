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
        .col{
            margin-bottom: 15px
        }
    </style>


</head>
<body>

    <form method="POST" action="resultatGelat.php">
        <div class="container">
            <!-- Títol -->
            <div class="row">
                <div class="col">
                    <h1>Gelato PHP</h1>
                    <h2>Personalitza el teu gelat</h2>
                </div>
            </div>
            <!-- Escollir -->
            <div class="row">
                <!-- Tipus de gelat -->
                    <div class="col">
                        <h3>TIPUS</h3>
                        <select name="tipusGelat" id="tipusGelat">
                            <option value="tarrina">Tarrina</option>
                            <option value="cucurutxo">Cucurutxo</option>
                            <option value="pal">De pal</option>
                        </select>
                    </div>
                    <!-- Gust -->
                    <div class="col">
                        <h3>GUST</h3>
                        <select name="gustGelat" id="gustGelat">
                            <option value="xocolata">Xocolata</option>
                            <option value="vainilla">Vainilla</option>
                            <option value="llimona">Llimona</option>
                        </select>
                    </div>
                    <!-- Mida -->
                    <div class="col">
                        <h3>GUST</h3>
                        <select name="midaGelat" id="midaGelat">
                            <option value="petit">Petit</option>
                            <option value="mitja">Mitjà</option>
                            <option value="gran">Gran</option>
                        </select>
                    </div>
            </div>
            <!-- Botó -->
            <div class="row">
                <div class="col">
                    <input type="submit" value="CREA">
                </div>
            </div>
        </div>
    </form>
</body>
</html>