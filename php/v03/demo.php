<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // PHP-kod skriv här (Detta är en kommentar)
        echo "Använd 'echo' för att skriva till webbsidan";
        echo "<h1>Rubrik</h1><p>Det går bra att skriva ut HTML med echo.</p>";
        
        // variabler
        $x = 2;
        $x = $x+1;
        echo $x;    // 3
        
        // if-sats
        if ($x > 2) {
            echo "<p>Variabeln x är större än 2.</p>";
        }
        else {
            echo "<p>Variabeln x är inte större än 2.</p>";
        }

        // for-loop
        for ($y = 0; $y <= 10; $y++) {
            echo "The number is: $y <br>";
        }
    ?>
</body>
</html>