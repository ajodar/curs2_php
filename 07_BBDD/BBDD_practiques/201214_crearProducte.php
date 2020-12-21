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


</head>
<body>

    <!-- Títol -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Insertar productes</h1>
                <p>Emplena el formulari per insertar els productes a la BBDDs</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="201214_insertarProducte.php" method="post">

                
                    <!-- CAMPS DEL FORMULARI -->
                    <h2>Formulari: </h2>
                    <!-- Nom del producte -->
                    <div class="row">
                        <div class="col">
                            <label for="name">Nom del producte: </label>

                        </div>
                        <div class="col">
                            <input type="text" name="nom" id="nom"> <br>
                        </div>
                    
                    </div>
                    

                    <!-- Proveïdor -->
                        <label for="supplier">Proveïdor:</label>
                        <?php
                        $sql = "SELECT * FROM suppliers ORDER BY CompanyName"; 
                        $suppliers = $conn->query($sql); 

                        if($suppliers->num_rows>0){ ?>

                            <select name="supplier" id="supplier">
                                <option value="0">Tria un proveïdor</option>

                                <?php while($supplier = $suppliers->fetch_assoc()){ ?>
                                    <option value="<?php echo $supplier["SupplierID"]?>"><?php echo $supplier["CompanyName"]?></option>
                                <?php } ?> 

                            </select> <br>

                        <?php }else{ ?>
                            <input type="hidden" name="supplier" value="0">
                        <?php } ?> 

                    <!-- Select amb les categories -->
                        <label for="categoria">Categoria:</label>

                        <?php
                        $sql = "SELECT * FROM categories ORDER BY CategoryName"; 
                        $categories = $conn->query($sql); 

                        if($categories->num_rows>0){ ?>

                            <select name="categoria" id="categoria">
                                <option value="0">Tria una categoria</option>

                                <?php while($categoria = $categories->fetch_assoc()){ ?>
                                    <option value="<?php echo $categoria["CategoryID"]?>"><?php echo $categoria["CategoryName"]?></option>
                                <?php } ?> 

                            </select> <br>

                        <?php }else{ ?>
                            <input type="hidden" name="categoria" value="0">
                        <?php } ?>  

                    <!-- Preu en € -->
                    <label for="preu">Preu: </label>
                    <input type="number" name="preu" id="preu" step="0.1" min="0"> € <br>

                    <!-- Unitats en stock -->
                    
                    <!-- Disponibilitat -->
                    <label for="disponibilitat">Disponibilitat</label>
                    <select name="disponibilitat" id="disponibilitat">
                        <option value="0">En stock</option>
                        <option value="1">Fora de stock</option>
                    </select> <br>
                    
                    <input type="submit" value="AFEGEIX PRODUCTE">

                </form>

            </div>
        </div>
    </div>

    

</body>
</html>