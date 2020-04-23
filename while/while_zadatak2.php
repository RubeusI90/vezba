<?php
// Zadatak 2 iz foldera loops;

// Data je promenljiva $number
// Napisati while loop koja ce povecavati $number za 10 dok ne dodje do 100

$number = 10;
$i = 10;

while ($number <= 100) {
    echo $number . "<br>";
    $number += $i;
}
