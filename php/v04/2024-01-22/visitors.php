<?php
    // steg 1: läsa från fil
    $myfile = fopen("visitors.txt", "r");
    $nbrvisitors = (int)fgets($myfile); // observera omtypning till heltal
    echo "Denna sida har laddats $nbrvisitors gånger.";
    // steg 2: öka variabelvärdet med ett
    $nbrvisitors++;
    // steg 3: skriva till fil
    $myfile = fopen("visitors.txt", "w");
    fwrite($myfile, $nbrvisitors);
?>