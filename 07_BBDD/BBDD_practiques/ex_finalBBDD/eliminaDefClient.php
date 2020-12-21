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
    }else{

        if(isset($_GET["client"])){
            $sql = "DELETE FROM customers WHERE CustomerID = '".$_GET["client"]."'";
            if($conn->query($sql)){
                $missatgeDelete = "Informació del client eliminada correctament"; 
            }else{
                $missatgeDelete = "El client no existeix a la BBDD";
            }


        }else{
            header("Location: mostraClients.php");
            exit;
        }
        
        
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
        .alert{
            margin: 30px auto;
            max-width: 600px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="alert alert-danger" role="alert">
                    <p> <?php echo $missatgeDelete ?></p> 
                    <a href="mostraClients.php" class="btn btn-primary">Torna a la llista de clients</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>