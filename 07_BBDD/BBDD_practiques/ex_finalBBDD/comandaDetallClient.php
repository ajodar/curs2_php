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
        if(isset($_GET["order"]) && isset($_GET["client"])){
            $orderId = $_GET["order"];
            $clientId = $_GET["client"];
            
            
            $sql = "SELECT order_details.*, products.ProductName FROM `order_details` INNER JOIN products ON order_details.ProductID = products.ProductID WHERE order_details.OrderID = '".$orderId."'"; 
            $productes = $conn->query($sql);

            //Agafa dades dels empleats
            $sql = "SELECT orders.OrderID, employees.FirstName, employees.LastName, employees.HomePhone FROM `orders` INNER JOIN employees on orders.EmployeeID = employees.EmployeeID WHERE OrderID = '".$orderId."'"; 
            $empleats = $conn->query($sql);
            $empleat = $empleats->fetch_assoc();

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
        .empleat{
            text-align: right;
        }
        .total{
            text-align: right;
        }
        tfoot{
            font-size: 20px;
        }
        
    </style>

</head>
<body>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="mostraClients.php">Clients</a></li>
                <li class="breadcrumb-item"><a href="comandesClient.php?client=<?php echo $clientId ?>">Comandes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detall de la comanda</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <!-- Títol -->
        <div class="row">
            <div class="col">
                <h1>Detall de la comanda</h1>
                
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

            <div class="col empleat">
                <ul>
                    <li>Atès per: </li> 
                    <li><?php echo $empleat["FirstName"]; ?> <?php echo $empleat["LastName"]; ?></li>
                    <li><?php echo $empleat["HomePhone"]; ?></li>  
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
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Discount</th>
                            <th>Total</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Crida clients -->
                        <?php
                            $preuTotal = 0;
                            if($productes->num_rows>0){
                                while($producte=$productes->fetch_assoc()){ ?>
                                
                                    <tr>
                                       
                                        <td>
                                            <?php echo $producte["ProductName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $producte["Quantity"]; ?>
                                        </td>
                                        <td>
                                            <?php echo round($producte["UnitPrice"], 2) ; ?>€
                                        </td>
                                        <td>
                                            <?php echo $producte["Discount"]*100; ?>%
                                        </td>
                                        <td>
                                            <?php echo $preuProd = ($producte["Quantity"]*$producte["UnitPrice"])*(1-$producte["Discount"]) ?>€
                                            <?php  $preuTotal = $preuTotal + $preuProd; ?>
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
                    <tfoot>
                        <tr>
                            <th colspan="4" class="total">IMPORT TOTAL </th>
                            <th>
                                <?php echo $preuTotal; ?>€
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </div>
</body>
</html>

