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

        }
    </style>



</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1>ALTA D'ESPORTISTES</h1>
                
                <form action="avancat_resultat.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-1">
                            <label for="nom">Nom</label>
                        </div>
                        <div class="col">
                            <input type="text" name="nom" id="nom">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="cognoms">Cognoms</label>
                        </div>
                        <div class="col">
                            <input type="text" name="cognoms" id="cognoms"> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="adreca">Adreça</label>
                        </div>
                        <div class="col">
                            <input type="text" name="adreca" id="adreca"> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="telefon">Telèfon</label>
                        </div>
                        <div class="col">
                            <input type="text" name="telefon" id="telefon"> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="email">Email</label>
                        </div>
                        <div class="col">
                            <input type="text" name="email" id="email"> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="edat">Edat</label>
                        </div>
                        <div class="col">
                            <input type="text" name="edat" id="edat"> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="disciplina">Disciplina</label>
                        </div>
                        <div class="col">
                            <select name="disciplina" id="disciplina">
                                <option value="3x3">3x3</option>
                                <option value="5x5">5x5</option>
                            </select> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <label for="foto">Fotografia</label>
                        </div>
                        <div class="col">
                            <input type="file" name="foto" id="foto"> <br>
                        </div>
                    </div>


                    <input type="submit" value="ENVIAR">

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>