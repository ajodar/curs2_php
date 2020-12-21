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
        $sql = "SELECT * FROM categories WHERE CategoryID ='".$_GET["categoria"]."'"; 
        $categories = $conn->query($sql);
        $categoria = $categories->fetch_assoc();
        
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="201214_actualitzarCategoria.php" method="post">
        Nom categoria: <input type="text" name="nom" value ="<?php echo $categoria["CategoryName"] ?>">
        <input type="hidden" name="categoryID" value=" <?php echo $_GET["categoria"] ?> ">
        <input type="submit" value="MODIFICAR" >

    </form>
</body>
</html>