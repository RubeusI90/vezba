<?php

// ZADATAK1
// Date su dve liste
// Ako je duzina prve liste veca od poslednje reci u drugoj liste
// Odstampati: prva lista je veca

$prvaLista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$drugaLista = ['Word', 'Hello', 'WWWWWWWWWW'];

echo sizeof($prvaLista);
echo "<br>";
echo strlen($drugaLista[2]);
echo "<br>";

$duzina_liste = sizeof($prvaLista);
$duzina_liste2 = strlen($drugaLista[2]);

if ($duzina_liste > $duzina_liste2) {
    echo "Prva lista je veca.";
}
