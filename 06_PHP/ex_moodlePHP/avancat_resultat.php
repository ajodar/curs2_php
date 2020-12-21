<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Raleway&family=Ubuntu&display=swap" rel="stylesheet">

    <style>
        body{
            text-align: center;
            font-family: 'Ubuntu', sans-serif;
            background-image: url("basket.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
            background-color: black;
        }
        .container{
            background-color: white;
            margin-top: 60px;
            border: 10px solid #FA8320;
            max-width: 600px;
            margin-right: 20px;
        }
        .titol{
            margin: 20px;
        }
        #foto{
            text-align: right;
            
        }
        #foto img{
            max-height: 280px;
            max-width: 330px;
            
        }
        .esportista{
            text-align: left;
            max-width: 800px;
            margin: 0 auto;
        }
        
    </style>

    <?php


    class Esportista{
        public $nom;
        public $cognoms;
        public $adreca; 
        public $telefon; 
        public $email; 
        public $edat;
        public $disciplina;
        public $foto;

        function __construct($nom, $cognoms, $adreca, $telefon, $email, $edat, $disciplina, $foto)
        {
            $this->nom = $nom;
            $this->cognoms = $cognoms;
            $this->adreca = $adreca;
            $this->telefon = $telefon;
            $this->email = $email;
            $this->edat = $edat;
            $this->disciplina = $disciplina;
            $this->foto = $foto; 


        }

        public function obtenirCategoria(){

            if($this->edat <= 7){
                $this->categoria = "Escoleta";
            }
            elseif(($this->edat > 7) && ($this->edat <= 10) ){
                $this->categoria = "Premini";
            }
            elseif(($this->edat > 10) && ($this->edat <= 12) ){
                $this->categoria = "Mini";
            }
            elseif(($this->edat > 12) && ($this->edat <= 14) ){
                $this->categoria = "Infantil";
            }
            elseif(($this->edat > 14) && ($this->edat <= 16) ){
                $this->categoria = "Cadet";
            }
            elseif(($this->edat > 16) && ($this->edat <= 18) ){
                $this->categoria = "Junior";
            }
            else{
                $this->categoria = "Sènior";
            }

            return $this->categoria;
 
        }
    }


    ?>

</head>
<body>

    <?php
    //Mirar si hi ha informació del formulari
    if(isset($_POST["nom"]) && isset($_POST["cognoms"]) && isset($_POST["adreca"]) && isset($_POST["telefon"]) && isset($_POST["email"]) && isset($_POST["edat"]) && isset($_POST["disciplina"])){

        
        //Agafar foto del formulari
        if(!file_exists("fotosPujades")){
            mkdir("fotosPujades");
        }

        $nomarxiu = "fotosPujades/".basename($_FILES["foto"]["name"]);
        if(move_uploaded_file($_FILES["foto"]["tmp_name"], $nomarxiu)){
            $nomarxiu;
        } else{
            "Càrrega de fotografia incorrecte";
        }
        
        //Crea esportista: 
        $esportista_nou = new Esportista($_POST["nom"], $_POST["cognoms"], $_POST["adreca"], $_POST["telefon"], $_POST["email"], $_POST["edat"], $_POST["disciplina"], $nomarxiu); 
        
        ?>

        <!-- Crea contingut de la pàgina -->
        <div class="container float-right">
            <div class="row">
                <div class="col titol">
                    <h1>FITXA DE L'ESPORTISTA</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="row esportista">
                        <div class="col-6" id="foto">
                            <img src= <?php echo "'".$esportista_nou->foto."'"; ?> > 
                        </div>
                        <div class="col-5">
                            <p> Nom i cognoms: <?php echo $esportista_nou->nom." ".$esportista_nou->cognoms ?></p>
                            <p> Adreça: <?php echo $esportista_nou->adreca; ?> </p>
                            <p> Telèfon: <?php echo $esportista_nou->telefon; ?> </p>
                            <p> Email: <?php echo $esportista_nou->email; ?> </p>
                            <p> Edat: <?php echo $esportista_nou->edat; ?> anys</p>
                            <p> Categoria: <?php echo $esportista_nou->obtenirCategoria(); ?> </p>
                            <p> Disciplina: <?php echo $esportista_nou->disciplina; ?> </p>
                        </div>                    
                    </div>
                        
                        
                </div>
            </div>
        </div>

        

    <?php } else{ ?>
        <p>Completa el formulari de l'esportista </p>
        <a href="avancatPHP.php">Pàgina principal</a>
    <?php } ?>
    
</body>
</html>