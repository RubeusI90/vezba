<?php

// While petalja se uglavnom koristi kad hoces da traje dok neki uslov nije ispunjen
// Link: https://www.w3schools.com/php/php_looping_while.asp

// Sintaksa: while(uslov) {blok koda}
// Najcesce se stavi neki brojac ispred petlje: $i = 0

// Ova petlja ce da radi beskonacno jer je i uvek manje od 10
$i = 0;
while ($i < 10) {
    echo $i;
}

// Da bi zaustavio while petlju uslov mora da postane netacan
// Ovakva petlja ce da se desi 10 puta jer se $i povecava za jedan unutar petlje pri svakom obrtaju
$i = 0;
while ($i < 10) {
    echo $i;
    $i++;
}

// Koristi se i za rad sa nizovima
$names = ['Dusan', 'Nemanja', 'Nikola', 'Ivan'];

$i = 0; // brojac ispred petlje
// sizeof() - vraca duzinu liste, znaci 4 u ovom slucaju
while ($i < sizeof($names)) {
    echo $names[$i];
    $i++;
}

// Ova petlja ce se desiti 4 puta jer je sizeof($names) 4, a $i povecavamo za 1
// Kad $i postane 4, uslov postaje netacan i petlja staje da radi

/*
echo $names[$i] - ovo je stampati sva imena jer je $i brojka
tako da uzimamo vrednost iz niza gde je $i index

Desice se ovo:

echo $names[0] -> Dusan
$i++ -> $i postaje 1
----------------------
echo $names[1] -> Nemanja
$i++ -> $i postaje 2
----------------------
echo $names[2] -> Nikola
$i++ -> $i postaje 3
----------------------
echo $names[3] -> Ivan
$i++ -> $i postaje 4
----------------------
posto je uslov $i < sizeof($names), sto je isto kao $i < 4
$i je sada 4 i ovaj uslov postaje netacan, petlja prestaje.

Output:
    DusanNemanjaNikolaIvan
*/
