<?php

//Nizovi

// Obicni nizovi koji imaju samo value
// Sintaksa
$primer = ['element1', 'element2', 'element3'];

// Value moze da se vadi tako sto se ukuca ime liste pa u kockastim zagradama index
echo $primer[1]; # ovo ce ispisati element2 

// Ovako se u listi dodaju elementi
$primer[] = 'element4'; #ovo ce dodati element4 na kraju liste
$primer[] = 'Tokyo'; #ovo ce dodati Tokyo na kraju liste

// Asocijativni nizovi koji imaju key-value pairs
// Sintaksa
$asocijativniNiz = ['name' => 'Dusan', 'age' => 16, 'adult' => false];
// Values se vadi tako sto se ukuca ime liste pa u kockastim zagradama key
echo $asocijativniNiz['name']; # ovo ce ispisati Dusan

// Ovako se u asoc nizovima dodaju elementi
$asocijativniNiz['ocupation'] = 'GoPlayer'; # ovo ce dodati key-value gde je ocupation key a GoPlayer value

// SVE LISTE SE STAMPAJU FUNKCIJOM print_r(ime liste)
print_r($primer);
print_r($asocijativniNiz);

// **********************************************************************************************//

// Zadaci

// Zadatak 1
// Data je jedna lista odstampati listu
$elements = [2, 'hello', true, 'word'];

// Zadatak 2
// Data je jedna lista
// Odstampati Welcome Dusan
$names = ['Dusan', 'Nemanja', 'Ivan'];

// Zadatak 3
// Data je jedna liste
// Dodati broj 10 na kraju liste zatim odstampati listu
$numbers = [1,2,3,4,5,6,7,8,9];

// Zadatak 4
// Dat je asocijativni niz
// Odstampati poruku: Dusan is 40 years old
$info = [
    'name' => 'Dusan',
    'age' => 40,
];

// Zadatak 5
// Data je asocijativni niz
// Dotati key-value: France Paris
$countries = [
    'Japan' => 'Kyoto',
    'Serbia' => 'Nis'
];

// Zadatak 6
// Dat je asocijatini niz gde je svaki key lista
// Odstampati: Dusan is a GoPlayer from Serbia and is 29 years old.

$details = [
    'person' => [
        'name' => 'Dusan',
        'age' => 29,
        'country' => 'Serbia',
    ],
    'ocupation' => 'GoPlayer',
    ];