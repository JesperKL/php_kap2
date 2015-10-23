<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php

        /* Arimetiska operationer */
        $tal1 = 30;
        $tal2 = 13;

        $summa = $tal1 + $tal2;
        $produkt = $tal1 * $tal2;
        $sub = $tal1 - $tal2;
        $division = $tal1 / $tal2;

        $losenord = 1234;

        /* Modulus */
        $modulus = $tal1 % $tal2;
        echo "<p>Modulus = $modulus </p>";

        /* Logiska Operationer */
        $harFemFingrar = true;
        $harSexTar = false;

        $sats = $harFemFingrar and $harSexTar;
        echo "<p>Sats är $sats</p>";

        if ($losenord == 1234) {
            echo "<p>Du är inloggad!</p>";
        }
        if ($losenord == 1234) {
            echo "<p>Du är inloggad!</p>";
        } else {
            echo "<p>Fell! Försök igen</p>";
        }
        if ($losenord == 1234) {
            echo "<p>Du är inloggad!</p>";
        } elseif ($losenord == 5678) {
            echo "<p>Du är inloggad!</p>";
        }

        if ($tal1 != 0) {
            echo "<p> Talet är inte 0</p>";
        } elseif ($tal < 0) {
            echo "<p>Talet ör mindre är 0</p>";
        } elseif ($tal1 > 0) {
            echo "<p>Talet är störe än  0</p>";
        }

        if ($tal1 > 20 && $tal1 < 50) {
            echo "<p>Talet är mellen 20 och 50</p>";
        }

        if ($harFemFingrar && $harSexTar) {
            echo "<p>Svaret är sant</p>";
        } else {
            echo "<p>Svaret är falskt</p>";
        }

        /*Loopar */
        for ($i = 1; $i <= 10; $i = $i + 1) {
            echo "<p>i = $i</p>";
        }

        $i = 0;
        while ($i <= 10) {
            echo "<p>1 = $i</p>";
            $i++;
        }

        ?>
    </body>
</html>
