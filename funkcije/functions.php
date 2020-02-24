<?php

// FUNKCIJE

//******************************************** */

// Kako se funkcije definisu

// Prvo ide kljucna rec 'function' 
// Pa onda ime funkcije
// Pa obicne zagrade ()
// Pa velike zagrade {}

// Primer
function deleteUser()
{
    echo 'Deleting user';
}

// Unutar velikih zagrada je teko funkcije i tu kucas sta god hoces da funkcija uradi

//******************************************** */

// RETURN

// Funckije najcesce koriste kljucnu rec 'return'
// Posle 'return' se stavlja sta hocesmo da funkcija vrati

// Primer
function updateUser()
{
    return 'Updating user';
}

//******************************************** */

// POZIVANJE FUNKCIJA

// Funkcije se pozivaju tako sto se ukuca njihovo ime sa sve obicnim zagradama

// Primer
updateUser();
deleteUser();

//******************************************** */

// RETURN VREDNOST

// Kada pozovemo funkciju ona ce da vrati vrednost koju smo stavili posle 'return'
// Onda mozemo to da snimimo u promenljivu

// Primer
function greeting()
{
    return 'Welcome!';
}

$msg = greeting(); // Sada je u $msg snimljeno 'Welcome!'

//******************************************** */

// PARAMETRI

// Funkcije mogu da primaju paremetre koje ce da koriste
// Parametri se stavljaju u zagradama i nazim im je proizvoljan
// Parametri su ustvari privremene promenljive koje vaze samo unutar funkcije

// Primer
function greet($name)
{
    return 'Welcome ' . $name;
}

// Ako funkcija ima paremetar kada je pozovemo moramo da damo vrednost parametru
// Kao vrednost mozemo da damo bilo koj data type: stringovi, integeri, nizovi itd.

$msg = greet('Dusan');
echo $msg;

// Funkcija moze da prima vise parametra

function userInfo($fname, $lname, $country, $age)
{
    $fullname = $fname + $lname; // Ovde pravimo promenljivu u kojoj cuvamo puno ime
    $details = $fullname . ' is from ' . $country . ' and is ' . $age . ' years old ';
    return $details; // I na kraju obavezno idemo return details
}

// Sada mozemo da pozovemo funkciju
// Moramo da unesemo sva 4 parametra
$user = userInfo('Dusan', 'Mitic', 'Serbia', 29);
echo $user;

//******************************************** */

// DEFAULT PARAMETRI

// Funkcija moze da ima i default parametre
// Njima se vrednost daje odma u definiciji funkcije
// Ako parametar ima default vrednost ne moramo mu dati novu vrednost kad zovemo funkciju

// Primer
function getCountry($country = 'Serbia')
{
    return $country;
}

// Sada mozemo da pozovemo funkciju a da ne damo vrednost za $country
$c = getCountry(); // po default vraca 'Serbia'

// Ako hocemo mozemo da damo vrednost za default parametar
// Onda ta vrednost presnimava default vrednost
$c1 = getCountry('Japan');


//******************************************** *///******************************************** */


// ZADACI


// Zadatal 1

// Definisati funkciju 'getMsg' koja nece imati ni jedan parametar
// Funkcija treba da vrati string 'Hello from msg function'

//******************************************** */

// Zadatak 2

// Definisati funkciju 'add' sa dva parametra
// Funkcija treba da vrati zbir dva broja koja unosimo
// Zatim pozvati funkciju sa datim vrednostima $number1, $number2

$number1 = 10;
$number2 = 4;

//******************************************** */

// Zadatak 3

// Definisati funkciju user koja ima dva parametra
// Prvi je parametar $fname
// Drugi je default parametar $status = 'admin'
// Funckija treba da vrati poruku fname is $status
// Pozvati funkciju dva puta i odstamprati rezultat
// Prvi put bez unosa vrednosti za $status
// Drugi put ce vrednost za $status biti 'normal'

//******************************************** */

// Zadatak 4

// Definisati funkciju favouriteColors
// Funkcija prima jedan parametar, proizvoljno ime
// Dat je jedan asocijativni niz

$colors = [
    'favourite' => 'blue'
];

// Sada treba pozvati funkciju i uneti $colors kao parametar
// Funkcija treba da odstampa 'blue'

//******************************************** */

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

//******************************************** */

// Zadatak 6
// Iskoristiti formu iz zadatka 7 iz userinputs
// Ta forma daje vrednosti za dve brojke i operaciju
// Ukombinovati to sa funkcijom iz predhodnog zadatka
// Kada user unese vrednosti i klikne submit
//     pozivamo funkciju koja vraca rezultat, i zatim stampamo taj rezultat.
