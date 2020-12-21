<!-- Connexió a la BBDD -->
<?php
    //Variables de connexió
    $server = "localhost";
    $username = "root"; 
    $password = ""; 
    $databasename = "introduccio_bbdd";

    //Connexió 
    $conn  = new mysqli($server, $username, $password, $databasename);
    if($conn->connect_error){
        echo "Connexió erronia".$conn->connect_error;
    }

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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Oswald', sans-serif;
        }
        h1{
            text-align: center;
            margin: 20px auto;
        }
        h2{
            font-size: 24px;
        }
        .filtre{
            text-align: center;
            margin-top: 15px;
        }
        .prod{
            border: 2px solid #e9ecef;
            border-radius: 2px;
            margin: 10px;
            text-align: center;
        }
        .titol{
            display: block;
            text-align: center;
            font-weight: 400;
            font-size: 20px;
        }

        .jumbotron{
            width: 100%;
            text-align: center;
        }
        .form-control, .btn{
            width: 100%;
        }
        form{
            margin: 16px auto;
        }
        
    </style>
</head>
<body>

    <div class="container">
        <!-- Fila títol -->
        <div class="row">
            <div class="col">
                <h1>Catàleg de productes</h1>
            </div>
        </div>
        <!-- Fila cercador -->
        <form method="GET" action="ex_cercador.php">
            <div class="row filtre">
                <div class="col">
                    <h2>Filtra els productes</h2>
                </div>
            </div>
            <div class="row filtre">
                <div class="col ">
                    <input class="form-control" type="text" name="text" id="text" placeholder="Tots els productes">
                </div>
                <div class="col">
                    <select class="form-control" name="categoria" id="categoria">
                        <option value="">Totes les categories</option>
                        
                        <?php
                        $sql= "SELECT * FROM categories";
                        $categories = $conn->query($sql);

                        if($categories->num_rows > 0){
                            while($categoria = $categories->fetch_assoc()){ ?>

                                <option value="<?php echo $categoria["CategoryID"]?>"> <?php echo $categoria["CategoryName"]?></option>
                                
                            <?php }
                                
                        }?>
                        
                    </select>
                </div>
                <div class="col">
                    <input class="btn btn-primary" type="submit" value="CERCA">
                </div>
            </div>
        </form>

        <!-- Títol resultat -->
        <div class="row">
            <div class="col filtre">
                <h2>Productes</h2>
            </div>
        </div>
        <!-- Fila resultat -->
        <div class="row">
            
            <?php
            if(isset($_GET["categoria"]) && isset($_GET["text"])){
                $categoria = $_GET["categoria"];
                $text = $_GET["text"];
                

                if(($categoria !="") || ($text !="")){
                    $sql = "SELECT * FROM products WHERE (categoryID='".$categoria."' AND (ProductName LIKE'%".$text."%'))";
                    $productes = $conn->query($sql); 

                    if($productes->num_rows > 0){
                        while($producte = $productes->fetch_assoc()){ ?>
                            <div class="col-4">
                                <!-- Títol -->
                                <div class="row">
                                    <div class="col prod ">
                                        <span class="titol"> <?php echo $producte["ProductName"]; ?> </span>
                                        <span class="preu"> <?php echo round($producte["UnitPrice"], 2); ?> </span>
                                    </div>
                                </div>
                            </div>
                            
                        <?php } ?>
                    <?php } ?>
                <?php } else{
                    $sql = "SELECT * FROM products";
                    $productes = $conn->query($sql); 

                    if($productes->num_rows > 0){
                        while($producte = $productes->fetch_assoc()){ ?>
                            <div class="col-4">
                                <!-- Títol -->
                                <div class="row">
                                    <div class="col prod ">
                                        <span class="titol"> <?php echo $producte["ProductName"]; ?> </span>
                                        <span class="preu"> <?php echo round($producte["UnitPrice"], 2); ?> </span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
                

            <?php }else{ ?>
                <div class="jumbotron jumbotron-fluid">
                    <p class="lead">Realitza una cerca per consultar els productes disponibles</p>
                </div>
            <?php } ?>  
            
             
        </div>
    </div>


    <!-- Tanca connexió -->
    <?php
        $conn->close();
    ?>

</body>
</html>