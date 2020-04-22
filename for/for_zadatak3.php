<?php
// Zadatak 3
// Data je niz $numbers
$numbers = [1, 4, 5, 5];

// Izracunati sumu svih brojeva u nizu
/*
Output:
    15
*/

$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

echo $sum;
