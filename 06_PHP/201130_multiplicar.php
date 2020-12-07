
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

    <div class="container">

        <h1>Taula de multiplicar 5</h1>
        <table border="1">
            <!-- Bucle per crear taula del 5 -->
        
            <?php for($i=0; $i<10; $i++){ ?>

                <tr>
                    <td>5</td>
                    <td> <?php echo $i ?> </td>
                    <td> <?php echo ($i*5) ?> </td>
                </tr>

            <?php } ?>
        </table>

    </div>
</body>
</html>