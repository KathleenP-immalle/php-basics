<?php

// Maak een Array met 3 namen van medeleerlingen.

$namearray = ["Thom", "Bert", "Liam"];

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.

for ($x = 0; $x < $namearray.length; $x++){
    echo $namearray[$x];
    echo "<br/>";
}

// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.

foreach ( $namearray as &$value ) {
    echo $value;
    echo "<br/>";
}

$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.

foreach ( $naam as &$value ) {
    echo $value;
    echo "<br/>";
}

?>
