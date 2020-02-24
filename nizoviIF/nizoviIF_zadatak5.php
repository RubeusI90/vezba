<?php

// ZADATAK 5
// Date su dve liste i jedan asocijativni niz
// Ako su ili duzina prve liste ili duzina druge liste isti kao duzina vrednosti kljuca user u asoc nizu
// Odstampati: Welcome
// Ako nisu Odstampati: You shall not pass!!!
$first = ['Names', 2, 3, true, 'Hello'];
$second = [1, 2, 3, 4, 5, 6, 7, 8];
$asocNiz = ['age' => 15, 'user' => 'world'];

echo sizeof($first);
echo "<br>";
echo sizeof($second);
echo "<br>";
echo strlen($asocNiz["user"]);
echo "<br>";

$duzina1 = sizeof($first);
$duzina2 = sizeof($second);
$duzina3 = strlen($asocNiz["user"]);

if ($duzina1 == $duzina3 || $duzina2 == $duzina3) {
    echo "Welcome";
} else {
    echo "You shall not pass!!!";
}
