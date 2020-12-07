<?php
    class Producte{
        public $nom;
        public $preu;
        public $quantitat;

        function __construct($nom, $preu, $quantitat = 100){
            $this->nom = $nom;
            $this->preu = $preu;
            $this->quantitat = $quantitat;
        }
    }

    // Classe nova que té tot el que te la classe producte
    class Roba extends Producte{
        public $talla;
    }

    class Gelat extends Producte{
        public $gust;
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $samarreta = new Producte("Samarreta noi Snoopy", 10.5, 10);
        $samarreta->talla = "XL";

        $tarrina_maduixa = new Gelat("Tarrina gelat maduixa", 3.50);
        $tarrina_maduixa->gust = "Maduixa";

    ?>

    <?php
        echo "Tenim ".$samarreta->quantitat." unitatis del producte".$samarreta->nom
    ?>
</body>
</html>