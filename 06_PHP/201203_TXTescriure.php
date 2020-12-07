<?php

    $arxiu = fopen("dades.txt", "w") or die("Error en pantalla");
    fwrite($arxiu, "Joan \n");
    fwrite($arxiu, "Pere \n");
    fwrite($arxiu, "Anna \n");
    fclose($arxiu);

    echo "dades guardades correctament"


?> 