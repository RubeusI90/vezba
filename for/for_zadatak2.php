<?php

// Zadatak 2

// Izracunati sumu prva 4 broja (1+2+3+4)
/*
Output:
    10
*/

$sum = 0;
$num1 = 1;
$num4 = 4;
for ($i = $num1; $i <= $num4; $i++) {
    $sum += $i;
}

echo $sum;
