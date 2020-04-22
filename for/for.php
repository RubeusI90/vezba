<?php
// for petlja

// for petlja se najvise koristi kada znas koliko obrtaja hoces nesto da se desi
// nije namenjena samo za nizove ali moze da sluzi i za nizove
// Link: https://www.w3schools.com/php/php_looping_for.asp

// sintaksa
// for(pocetna vrednost brojaca; uslov; uvecanje brojaca) {bkok koda}

// PRIMER
for ($i = 0; $i < 5; $i++) {
    echo 'Welcome';
}

/*
1. pocetna vrednost brojaca: brojac je postavljen na 0 ($i = 0)
2. uslov: dok je brojac manji od 5 ($i < 5)
3. uvecanje brojaca: svakim prolazom kroz petlju brojaca se uvecava za 1 ($i++)
4. blok koda: u viticastim zagradama - {echo 'Welcome'}
Ova petlja ce se okrenuti 5 puta i svaki put ispisati 'Welcome'
Output:
    WelcomeWelcomeWelcomeWelcomeWelcome
*/

// Moze da se koristi i za rad sa nizovima
$names = ['Dusan', 'Nikola', 'Nemanja', 'Ivan'];

/*
Da bi ispisao sva imena iz niza $names prvo nam treba duzina niza
Za to se koristi funkcija count()
count($names) ce kao rezultat vratiti broj 4
*/

// ova petalj ce da radi sve dok je $i manje od count($names)
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i]; // Stampa svako ime
}

/*
Ova petalja ce se desiti 4 puta a $i ce se povecavati za 1, sto znaci da ce echo da radi sledece:
echo $names[0]
echo $names[1]
echo $names[2]
echo $names[3]

Output:
    DusanNikolaNemanjaIvan
*/

// ZADACI

// -----------------------------------------------------------------

// Zadatak 1
// Ispisati sve brojeve od jedan do 5 (svaki u novom redu)
/*
Output:
    1
    2
    3
    4
    5
*/

// -----------------------------------------------------------------
// Zadatak 2

// Izracunati sumu prva 4 broja (1+2+3+4)
/*
Output:
    10
*/

// -----------------------------------------------------------------
// Zadatak 3
// Data je niz $numbers
$numbers = [1, 4, 5, 5];

// Izracunati sumu svih brojeva u nizu
/*
Output:
    15
*/
