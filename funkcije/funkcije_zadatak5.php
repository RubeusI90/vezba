<?php
// Zadatak 5

// Definisati funkciju 'calculator'
// Funkcija prima 3 parametra: $num1, $num2, $operation
// $operation parametar ce prihvatati +, -, /, *
// Treba napisati unutar funkcije if elif tako da...
//       u zavisnosti od $operation funkcija vraca rezultat
// Dat je $num1 i $num2

$num1 = 12;
$num2 = 3;

// Pozvati funkciju 4 puta
// Uvek uneti date $num1 i $num2 kada se zove funkcija
// Za $operation uneti sve vrednosti po jednom
// Primer: function($num1, $num2, '+')
// Odstampati svaki rezultat

function calculator($num1, $num2, $operation)
{
    if ($operation == "+") {
        return $num1 + $num2;
    } elseif ($operation == "-") {
        return $num1 - $num2;
    } elseif ($operation == "/") {
        return $num1 / $num2;
    } elseif ($operation == "*") {
        return $num1 * $num2;
    }
}

$operation1 = calculator($num1 = 12, $num2 = 3, "+");
echo $operation1;
echo "<br>";
$operation2 = calculator($num1 = 12, $num2 = 3, "-");
echo $operation2;
echo "<br>";
$operation3 = calculator($num1 = 12, $num2 = 3, "/");
echo $operation3;
echo "<br>";
$operation4 = calculator($num1 = 12, $num2 = 3, "*");
echo $operation4;
