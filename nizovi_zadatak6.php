<?php

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

    print_r(($details["person"["name"] . " is a " . $details["ocupation"] . " from " . $details["country"] . " and is " . $details["age"] . " years old.";