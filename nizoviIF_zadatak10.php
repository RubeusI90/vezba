<?php

// ZADATAK 10
// Data su dva niza i jedna promenljiva

// Prvo proveriti da li se setovana promenljiva $bruceLee.

// 1. SLUCAJ AKO JESTE SETOVANA
// ******** OVDE POCINJE KOD KOJ SE DESAVA SAMO AKO JE SETOVANA *******
// Odstampati: Name is Set!
// i proveriti da li su fanName iz prvog i drugog niza isti
// ---------------------
// SLUCAJ AKO JESU ISTI
// Odstampati: Same fan name
// ---------------------
// SLUCAJ AKO NISU ISTI
// Proveriti da li je u nizu fans1 kljuc rank prazan
// *******************
// SLUCAJ AKO JESTE PRAZAN
// Odstampati: Same fan name but empty rank
// *******************
// SLUCAJ AKO NIJE PRAZAN
// Odstampati : Same fan name and existing rank


// ******** OVDE POCINJE KOD KOJ SE DESAVA SAMO AKO NIJE SETOVANA *******
// 2. SLUCAJ AKO NIJE SETOVANA
// Proveriti Da li je age iz $fans2 jednaka 100
// ---------------------
// SLUCAJ AKO JESTE 100
// Odstampati: It is 100
// ---------------------
// SLUCAJ AKO NIJE 100:
// Odstampati: It is not 100

$bruceLee = 'Bruce Lee';

$fans1 = [
    'fanName' => 'SinnerHell',
    'rank' => '',
    'age' => 6,
    'country' => 'Serbia',
];

$fans2 = [
    'fanName' => 'shinobi',
    'rank' => '9999',
    'age' => 100,
    'country' => 'Serbia',
];

$bruceLee = 'Bruce Lee';

$fans1 = [
    'fanName' => 'SinnerHell',
    'rank' => '',
    'age' => 6,
    'country' => 'Serbia',
];

$fans2 = [
    'fanName' => 'shinobi',
    'rank' => '9999',
    'age' => 100,
    'country' => 'Serbia',
];

isset($bruceLee);

if (isset($bruceLee)) {
    echo "Name is set!";
    if ($fans1["fanName"] == $fans2["fanName"]) {
        echo "same fun name.";
    } else {
        if (empty($fans1["rank"])) {
            echo "Differant fan name but empty rank.";
        } else {
            echo "Same fan name and existing rank.";
        }
    }
} else {
    if ($fans2["age"] == 100) {
        echo "It is 100.";
    } else {
        echo "It is not 100.";
    }
}
