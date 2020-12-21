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
        // Agafa countries
        $sql= "SELECT DISTINCT(Country) FROM customers ORDER BY Country";
        $countries = $conn->query($sql); 

        // Agafa customers ordenats per nom + que siguin del pais que toca
        if(isset($_GET["inputState"])){
            $pais = $_GET["inputState"];

            if($pais != "0"){
                $sql= "SELECT * FROM customers WHERE Country='".$pais."' ORDER BY ContactName";
                $clients = $conn->query($sql);
            }else{
                $sql= "SELECT * FROM customers ORDER BY ContactName";
                $clients = $conn->query($sql);
            }
            
        }else{
            $sql= "SELECT * FROM customers ORDER BY ContactName";
            $clients = $conn->query($sql);
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
        .breadcrumb{
            padding: 20px;
        }
    </style>

</head>
<body>
    
    
    <div class="container">
        <!-- Títol -->
        <div class="row">
            <div class="col">
                <h1>Customers</h1>
                <!-- Filta per pais -->
                <div class="filter_country">  
                    <?php if($countries->num_rows>0){ ?>
                        <form id="formState" action="mostraClients.php" method="GET">
                            <label for="inputState">Filter by country</label>
                            <select id="inputState" name="inputState" class="form-control-sm">
                                <option value="0">All countries</option>
                                
                                <?php while($country = $countries->fetch_assoc()){ ?>
                                    <option value="<?php echo $country["Country"] ?>" <?php if(isset($pais)){ if($country["Country"] == $pais){echo "selected";}} ?> ><?php echo $country["Country"] ?></option>
                                <?php } ?>
                                
                            </select>
                            <input type="submit" value="FILTRAR">
                        </form>
                    <?php } ?>
                </div>         
            </div>
        </div>
        <!-- Fila resultats -->
        <div class="row">
            <div class="col">
                <!-- TAULA CLIENTS -->
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Crida clients -->
                        <?php
                            if($clients->num_rows>0){
                                while($client=$clients->fetch_assoc()){ ?>
                                    <tr>
                                        <td>
                                            <a href="editaClient.php?client=<?php echo $client["CustomerID"]; ?> "> 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="eliminaPregClient.php?client=<?php echo $client["CustomerID"]; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $client["ContactName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $client["CompanyName"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $client["Address"] ?>
                                        </td>
                                        <td>
                                            <?php echo $client["City"] ?>
                                        </td>
                                        <td>
                                            <?php echo $client["Country"] ?>
                                        </td>
                                        <td>
                                            <?php echo $client["Phone"] ?>
                                        </td>
                                        <td>
                                            <a href="comandesClient.php?client=<?php echo $client["CustomerID"]; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                </svg>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                <?php } ?>

                            <?php } ?>
                            


                            
                       
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>