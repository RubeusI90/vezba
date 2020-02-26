<?php
// Zadatak 4

// Definisati funkciju favouriteColors
// Funkcija prima jedan parametar, proizvoljno ime
// Dat je jedan asocijativni niz

$colors = [
    'favourite' => 'blue'
];

// Sada treba pozvati funkciju i uneti $colors kao parametar
// Funkcija treba da odstampa 'blue'


function favouriteColors($c)
{
    return $c["favourite"];
}

$favourite_color = favouriteColors($colors);
echo $favourite_color;
