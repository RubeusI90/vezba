<?php

//Zadaci
// OVDE SE SVE RADI BEZ LUPE

// ZADATAK1
// Date su dve liste
// Ako je duzina prve liste veca od poslednje reci u drugoj liste
// Odstampati: prva lista je veca

$prvaLista = [1, 2, 3, 4, 5, 6, 7, 8, 9, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$drugaLista = ['Word', 'Hello', 'WWWWWWWWWW'];

// *********************************************************************** //

// ZADATAK 2
// Data su dva asocijativna niza
// Ago su zemlje oba usera iste odstampati: Ben0 and Tanguy are from same country
$player1 = ['user' => 'Ben0', 'country' => 'France'];
$player2 = ['user' => 'Tanguy', 'country' => 'France'];

// *********************************************************************** //

// ZADATAK 3
// Date su dve liste
// Ako su i username i email isti otkucati: VALID u h1 tagu
// Ako nisu otkucati: Please Register u <a> tagu
$users1 = ['username' => 'shinobi90', 'email' => 'shinobi@test.com'];
$users2 = ['username' => 'nidza92', 'email' => 'nidza@test.com'];

// *********************************************************************** //

// ZADATAK 4
// Data je jedna liste
// Otkucati svako ime u novom redu ali koristiti samo jedan echo
$n = ['Dusan', 'Ivan', 'Nemanja'];

// *********************************************************************** //

// ZADATAK 5
// Date su dve liste i jedan asocijativni niz
// Ako su ili duzina prve liste ili duzina druge liste isti kao duzina vrednosti kljuca user u asoc nizu
// Odstampati: Welcome
// Ako nisu Odstampati: You shall not pass!!!
$first = ['Names', 2, 3, true, 'Hello'];
$second = [1, 2, 3, 4, 5, 6, 7, 8];
$asocNiz = ['age' => 15, 'user' => 'world'];

// *********************************************************************** //

// ZADATAK 6
// Data je lista i jedna promenljiva
// Ako se nijedan user iz liste ne poklapa sa promenljivom
// Dotati key-value pair: gde je key: user3 a value: vrednost promenljive $mainuser
// A zatim odstampati listu
$mainuser = 'MAINUSER';
$allUsers = [
    'user1' => 'shinobi',
    'user2' => 'nidza'
];

// *********************************************************************** //

// ZADATAK 7
// Data je lista boja
// Napisati program koji ce da odstampa boje
// tako da postoji unordered list <ul>
// i gde ce svaka boja biti u <li> tagu
$colors = ['red', 'green', 'blue'];

// *********************************************************************** //

// ZADATAK 8
// Dat je asocijativni niz.
// Ako je vredonst user prazna odstampati: User does not exist
$validUser = ['user' => ''];

// *********************************************************************** //

// ZADATAK 9
// Data su dva aocijativna niza
// Ako je vrednost user iz prvog niza prazna ili je vrednost user drugog niza shinobi
// Odstampati: At least one exists
$isEmpty1 = ['user' => ''];
$isEmpty2 = ['user' => 'SinnerHell'];

// *********************************************************************** //

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
