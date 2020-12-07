
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
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Raleway:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
        }
        .titol_web{
            background-image: url("fons.jpg");
            background-size: 100%;
            margin: 0 auto;
            background-position: center center;
        }

        h1{
            color: black;
            font-size: 80px;
            font-family: 'Dancing Script', cursive;
            text-align: center;
            margin: 40px auto;
        }

        .titol_info{
            text-align: center;
            margin: 15px auto;
        }

        .info_botiga{
            text-align: center;
        }

        .icon{
            text-align: center;
            font-size: 100px;
            margin: 25px;
        }

        .obert{
            color: green;
            font-weight: 800;
        }

        .tancat{
            color: red;
            font-weight: 800;

        }

        .temporitzador{
            font-size: 15px;
            font-weight: 600;
        }

        
    </style>

</head>
<body>
    <!-- Títol -->
    <div class="container-fluid">
        
        <div class="row">
            <div class="col titol_web">
                <h1>Pintures Girona</h1>
            </div>
        </div>
        

    </div>

    <div class="container">
        <div class="row titol_info">
            <div class="col">
                <h2>Informació pràctica</h2>
            </div>
        </div>
        <div class="row info_botiga">
            <div class="col">
                <div class="icon">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                </div>
                
                <h3>On trobar-nos?</h3>
                <p>Carrer Nou, 25 <br> 17001 - Girona </p>
                <p>Pots veure com arribar-hi a través de <a href="https://goo.gl/maps/b8pm4aWnKwsNBSX97">Google Maps</a></p>
            </div>
            <div class="col">
                <div class="icon">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-history" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                        <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </div>
                
                <h3>Horari</h3>
                <!-- Agafa dades -->
                <?php

                    //Hores del dia
                    $hora = date("H");
                    $minuts = date("i");
                    $minuts_restants = 60 - $minuts;
                    $estat_botiga = "";
                    $data = date("j/m");
                    $dia = date("N");
                    $text_min = "";
                    

                    //Dies festius
                    $festius = array("1/06", "29/10", "1/01", "6/01", "10/04", "13/04", "1/05", "24/06", "15/08", "11/09", "12/10", "8/12", "25/12", "26/12");
                   
                    if(in_array($data, $festius)){
                        //Si és festiu
                        $estat_botiga = "TANCAT (Festiu)";
                    } else{
                        //Si no és festiu: No dium o fora horari obertura
                        if( ($dia != 7) && ( ( ($hora >= 9) && ($hora < 13) ) || ( ($hora >= 16) && ($hora < 20 ) ) ) ){ 
                            $estat_botiga = "OBERT";

                            if(($hora == (9-1)) || ($hora == (16-1))){
                                $text_min = "Obrim en ".$minuts_restants." minuts";
                            } elseif(($hora == (13-1)) || ($hora == (20-1))){ 
                                $text_min = "Tanquem en ".$minuts_restants." minuts";
                            }


                        } else{
                            $estat_botiga = "TANCAT";
                        }
                    }
                    
                ?>

                <p> De Dilluns a dissabte <br> 9:00 a 13:00 i de 16:00 a 20:00</p>

                <p class="<?php echo $estat_botiga ?>"> <?php echo $estat_botiga ?> </p>
                
                <p class="temporitzador">
                     <?php echo $text_min ?>

                </p>
            </div>
        </div>

    </div>

</body>
</html>