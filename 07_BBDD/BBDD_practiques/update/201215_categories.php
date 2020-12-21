<!-- Connexió a la BBDD -->
<?php
    //Variables de connexió
    $server = "localhost";
    $username = "root"; 
    $password = ""; 
    $databasename = "introduccio_bbdd";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <!-- Connexió  -->
        <?php $conn  = new mysqli($server, $username, $password, $databasename);
        if($conn->connect_error){
            echo "Connexió erronia".$conn->connect_error;
        }else{
            $sql = "SELECT * FROM categories"; 
            $categories = $conn->query($sql);

            while($categoria = $categories->fetch_assoc()){ ?>

                <a href="201214_dadesCategoria.php?categoria=<?php echo $categoria["CategoryID"] ?>"> <?php echo $categoria["CategoryName"] ?> </a> <br>

            <?php } ?>
        
        <?php } ?>


</body>
</html>