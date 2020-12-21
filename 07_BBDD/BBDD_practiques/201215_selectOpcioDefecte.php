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
        $sql = "SELECT * FROM categories ORDER BY CategoryName";
        $categories = $conn->query($sql);
        $sql = "SELECT * FROM products WHERE ProductID = 5";
        $productes = $conn->query($sql); 
        $producte = $productes->fetch_assoc(); 
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="cat" id="cat">
        <option value="0">Tria una categoria</option>
        
        <?php while($categoria = $categories->fetch_assoc()){ ?>
            <option value="<?php echo $categoria["CategoryID"] ?>" <?php if($categoria["CategoryID"] == $producte["CategoryID"]){echo "selected";} ?>><?php echo $categoria["CategoryName"] ?></option>
        <?php } ?>
        
    </select>
</body>
</html>