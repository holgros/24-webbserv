<?php
// skapa strängvariabel och skriv ut
$myString = "Hejsan";
echo $myString;
echo "<br>";

// konkatenera två strängvariabler
$myOtherString = "Hoppsan";
echo $myString . $myOtherString;
echo "<br>";

// använda strängvariabel inuti en text
echo "Min strängvariabel har värdet $myString.<br>";
// notera skillnad mellan att använda dubbelfnutt och enkelfnutt
echo 'Min strängvariabel heter $myString.<br>';

// demo funktionen str_replace
$text = "Detta är en text som skrivs av Holger.";
echo str_replace("Holger", "Kalle Anka", $text);    // returnerar en ny sträng där vi ersätter Holger med Kalle Anka
echo "<br>";

// demo funktion substr
echo substr($text, 7, 5);   // returnerar en substräng som börjar med tecken nummer 7 och sträcker sig 5 tecken framöver
echo "<br>";

// notera att variabeln $text är oförändrad av ovanstående funktioner
echo $text;
echo "<br>";

// demo indexerad array (indexerat fält)
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[1] . "<br>";

// demo associativ array (associativt fält)
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["brand"] . "<br>";
echo $car["model"] . "<br>";
echo $car["year"] . "<br>";

// loopa igenom ett associativt fält med en foreach-loop
foreach ($car as $x => $y) {    // $x anger "nyckeln" (brand, model eller year) och $y anger respektive värde
    echo "$x: $y <br>";
  }

?>