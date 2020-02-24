<?php

// Zadatak 5
// Data je jedna promenljiva
// Treba napisati program za prodavanje karte u zavisnosti od godina
// Ako je ispor 3 godine treba napisati: karta je 100 dinara
// Ako je ispor 18 a vise od 2 godine treba napisati: karta je 400 dinara
// Ako je 18 ili vise godina treba napisati: karta je 600 dinara
$age = 18;

if ($age < 3) {
    echo "Karta je 100 dinara.";
} elseif ($age < 18 & $age > 2) {
    echo "Karta je 400 dinara.";
} elseif ($age >= 18) {
    echo "Karta je 600 dinara.";
}
