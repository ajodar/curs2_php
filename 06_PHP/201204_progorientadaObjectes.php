<?php

    class Cotxe{
        public $marca;
        public $model;
        public $color; 
        public $places = 5; 
        public $km = 0; 
        public $preu; 

        function __construct($marca, $model, $color, $places = 5){
            $this->marca = $marca;
            $this->model = $model;
            $this->color = $color;
            $this->places = $places;
        }

        public function fer_viatge($kms_fets){
            $this->km = $this ->km + $kms_fets;
        }

        public function calcular_valor($desgast_km = 0.5){
            $this->valor = $this->preu - ($this->km/$desgast_km); 
            return $this->valor;

        }
    }

    $cotxe_miquel = new Cotxe("Dacia", "Lodgi", "Blanc");
    $cotxe_alba = new Cotxe("Ford", "Focus", "Negre");
    $cotxe_miquel->preu = 10000;
    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Objectes</h1>

    <?php echo $cotxe_miquel->marca;?>
    <?php echo $cotxe_miquel->places;?>
    <?php echo $cotxe_alba->places;?>
    <?php echo $cotxe_miquel->km;?>

    <?php
    $valor_actual = $cotxe_miquel->calcular_valor();
    echo $valor_actual;
    ?>
</body>
</html>