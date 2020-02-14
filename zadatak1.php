<?php

// Zadatak 1
// Imas broj i listu
// Ako je broj(number) veci nego broj elemenata u listi
// Napisi poruku: BROJ JE VELIKI
// Ako nije napisi poruku: BROJ JE MALI
// Moras da nadjes funckiju online koja ti kaze duzinu liste(broj elemenata u listi)
$number = 5;
$names = ['Dusan', 'Ivan', 'Nemanja', 'Nikola'];


$broj_u_listi = sizeof($names);
//echo $broj_u_listi;

if ($number >= $broj_u_listi) {
    echo "Broj je veliki.";
} elseif ($number <= $broj_u_listi) {
    echo "Broj je mali.";
}

echo "hello";
