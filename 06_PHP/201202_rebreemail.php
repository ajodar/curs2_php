
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_REQUEST["email"])){
            $email = $_REQUEST["email"];
            echo "Hem rebut correctament el teu email: ".$email; 
        } 
        else{
            echo "Introdueix un email";
        }
        
    ?>
</body>
</html>