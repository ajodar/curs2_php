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
        // Crides a la BBDD
        

        // Agafa orders del client
        if(isset($_GET["client"])){
            $clientId = $_GET["client"];

            //Agafa dades dels ORDERS i el nom de l'empleat encarregat
            $sql = "SELECT orders.*, employees.FirstName, employees.LastName FROM `orders` INNER JOIN employees on orders.EmployeeID = employees.EmployeeID WHERE CustomerID = '".$clientId."'"; 
            $orders = $conn->query($sql);

            //Agafa les dades del client: 
            $sql = "SELECT ContactName, CompanyName, ContactTitle, Phone FROM `customers` WHERE CustomerID = '".$clientId."'"; 
            $clients = $conn->query($sql); 
            $client = $clients->fetch_assoc();

            
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
        h1{
            text-align: center;
            margin: 20px 0;
        }
        .bi{
            display: block;
            margin: 0 auto;
        }        
        .bi-trash{
            color: red;
        }
        .bi-trash:hover{
            color: #AD0000;
        }
        .bi-eye-fill{
            color:black;
        }
        .bi-eye-fill:hover{
            color:#403F3D;
        }
        td{
            font-size:15px;
        }
        
        .filter_country{
            margin: 25px auto;
        }

        select.form-control{
            max-width: 200px;
            margin-left: 5px;
            display: inline-block;
        }

        ul{
            list-style:none;
            padding: 0;
        }
        .seeIcon{
            text-align:center;
        }
        .alert{
            text-align: center;
        }
        
    </style>

</head>
<body>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="mostraClients.php">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Comandes</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <!-- Títol -->
        <div class="row">
            <div class="col">
                <h1>Comandes</h1>
                
            </div>
        </div>
        <!-- Informació client -->
        <div class="row">
            <div class="col">
                <ul>
                    <li><?php echo $client["ContactName"]; ?></li> 
                    <li><?php echo $client["CompanyName"]; ?></li>
                    <li><?php echo $client["ContactTitle"]; ?></li>    
                    <li><?php echo $client["Phone"]; ?></li>  
                </ul>
                
            </div>

        </div>
        <!-- Fila resultats -->
        <div class="row">
            <div class="col">
                <!-- TAULA CLIENTS -->
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Order Date</th>
                            <th>Ship Name</th>
                            <th>Ship City</th>
                            <th>Ship Country</th>
                            <th>Employee</th>
                            <th class="seeIcon">See Order</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Crida clients -->
                        <?php
                            if($orders->num_rows>0){
                                while($order=$orders->fetch_assoc()){ ?>
                                    <tr>
                                        
                                        <td>
                                            <?php echo $order["OrderID"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $order["OrderDate"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $order["ShipName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $order["ShipCity"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $order["ShipCountry"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $order["FirstName"]; ?> <?php echo $order["LastName"]; ?>
                                        </td>
                                        <td>
                                            <a href="comandaDetallClient.php?client=<?php echo $order["CustomerID"]; ?>&order=<?php echo $order["OrderID"]; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                <?php } ?>
                        
                            <?php }else{ ?>
                                    <tr>
                                        <td colspan="7">
                                            <div class="alert alert-light" role="alert">
                                                <p> <b><?php echo $client["ContactName"]; ?></b> no ha realitzat cap comanda</p>
                                            </div>  
                                        </td>
                                        
                                    </tr>
                            <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>

