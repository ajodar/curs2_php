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
            // CRIDES A LA BBDD

            // Agafa countries
            $sql= "SELECT DISTINCT(Country) FROM customers ORDER BY Country";
            $countries = $conn->query($sql); 

            //Agafa info dels customers: 
            $sql = "SELECT * FROM `customers` WHERE CustomerID = '".$_GET["client"]."'"; 
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
        
    </style>

</head>
<body>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="mostraClients.php">Clients</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dades del client</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <!-- Títol -->
        <div class="row">
            <div class="col">
                <h1>Dades del client</h1>
            </div>
        </div>
        <!-- Formulari -->
        <form action="actualitzaClient.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ContactName">Contact Name</label>
                    <input type="text" class="form-control" id="ContactName" name="ContactName" placeholder="Contact Name" value="<?php echo $client["ContactName"]; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="CompanyName">Company Name</label>
                    <input type="text" class="form-control" id="CompanyName" name="CompanyName" placeholder="Company Name" value="<?php echo $client["CompanyName"]; ?>" >
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ContactTitle">Contact Title</label>
                    <input type="text" class="form-control" id="ContactTitle" name="ContactTitle" placeholder="Owner, assistant, etc." value="<?php echo $client["ContactTitle"]; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="Phone">Phone</label>
                    <input type="text" class="form-control" id="Phone" name="Phone" placeholder="Phone" value="<?php echo $client["Phone"]; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="Fax">Fax</label>
                    <input type="text" class="form-control" id="Fax" name="Fax" placeholder="Fax" value="<?php echo $client["Fax"]; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="Address" placeholder="1234 Main St" value="<?php echo $client["Address"]; ?>">
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="City" value="<?php echo $client["City"]; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputRegion">Region</label>
                    <input type="text" class="form-control" id="inputRegion" name="inputRegion" value="<?php echo $client["Region"]; ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip" name="inputZip" value="<?php echo $client["PostalCode"]; ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputState">Country</label>
                    <?php if($countries->num_rows>0){ ?>

                        <select id="inputState" name="inputState" class="form-control">
                            <option>Choose...</option>
                            
                            <?php while($country = $countries->fetch_assoc()){ ?>
                                <option value="<?php echo $country["Country"] ?>" <?php if($country["Country"] == $client["Country"]){echo "selected";} ?> ><?php echo $country["Country"] ?></option>
                            <?php } ?>
                            
                        </select>
                    <?php }else{ ?>
                        <input type="text" name="country" class="form-control" id="inputCountry">
                    <?php } ?>
                </div>
            </div>
            <input type="hidden" name="CustomerID" value="<?php echo $client["CustomerID"] ?>" >
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>

    </div>
</body>
</html>