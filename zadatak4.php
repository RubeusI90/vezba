<?php

// Zadatak 4
// Date su 3 promenljive
// Napraviti if elseif za kalkulator u zavisnosti od vrednosi operanda
$num1 = 10;
$num2 = 5;
$operand = '+'; # operand je sada '+' ali treba napisati za sve moguce vrednosti.
// Ako je $operand = '+' treba izaci 15
// Ako je $operand = '-' treba izaci 5 itd.

if ($operand = "+") {
    echo $num1 + $num2;
} elseif ($operand = "-") {
    echo $num1 - $num2;
} elseif ($operand = "*") {
    echo $num1 * $num2;
} elseif ($operand = "/") {
    echo $num1 / $num2;
}
