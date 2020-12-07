<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_POST["nom"])){?>
        <p>Hola <?php echo $_POST["nom"] ?> </p>
    <?php } else{ ?>
   
        <form action="201201_autocrida.php" method="post">
            <label for="nom">NOM</label>
            <input type="text" name="nom" id="nom">
            <input type="submit" value="ENVIA">
        </form>

    <?php } ?>
</body>
</html>