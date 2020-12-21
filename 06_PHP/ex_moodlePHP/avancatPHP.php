<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Raleway&family=Ubuntu&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Ubuntu', sans-serif;
            background-image: url("basket.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            background-color: black;
        }
        h1{
            text-align: center;
            font-size: 30px;
        }
        .esportista{
            background-color: #FA8320 ;
            max-width: 400px;
            font-weight: 600;
            margin-top: 25px ;
        }
        .foto{
            text-align: center;
        }
        #boto{
            margin: 20 auto;
            display: block;
        }
        .disciplina{
            max-width: 152px;
        }
        
    </style>



</head>
<body>
    <div class="container">
        <div class="row float-right">
            <div class="col esportista ">
            <h1>ALTA D'ESPORTISTES</h1>
                
                <form action="avancat_resultat.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <label for="nom">Nom</label>
                        </div>
                        <div class="col">
                            <input type="text" name="nom" id="nom" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="cognoms">Cognoms</label>
                        </div>
                        <div class="col">
                            <input type="text" name="cognoms" id="cognoms" required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="adreca">Adreça</label>
                        </div>
                        <div class="col">
                            <input type="text" name="adreca" id="adreca" required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="telefon">Telèfon</label>
                        </div>
                        <div class="col">
                            <input type="text" name="telefon" id="telefon" required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email">Email</label>
                        </div>
                        <div class="col">
                            <input type="text" name="email" id="email" required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="edat">Edat</label>
                        </div>
                        <div class="col">
                            <input type="text" name="edat" id="edat" required> <br>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col disciplina">
                            <label for="disciplina">Disciplina</label>
                        </div>
                        <div class="col ">
                            <select name="disciplina" id="disciplina">
                                <option value="5x5">5x5</option>
                                <option value="3x3">3x3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row foto">
                        <div class="col ">
                            <label for="foto">Fotografia</label>
                        </div>
                        <div class="col">
                            <input type="file" name="foto" id="foto" required> <br>
                        </div>
                    </div>


                    <input type="submit" value="ENVIAR" id="boto" class="btn btn-light">

                </form>
            </div>
        </div>
    </div>

    
</body>
</html>