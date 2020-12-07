<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <style>
        
        table{
            width: 100px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <?php 
        if(isset($_POST["numero"])){
            $num = $_POST["numero"]; 
        }
        else{
            $num = 5;
        }
    ?>

    <h1>Taula del <?php echo $num ?> </h1>
    <table border="1">
        
        <?php for($i=0; $i<10; $i++){ ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $num; ?></td>
                <td><?php echo ($num * $i); ?></td>
            </tr>
                
        <?php } ?>
            
            
    </table>
</body>
</html>