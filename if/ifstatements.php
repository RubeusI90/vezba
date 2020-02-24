<?php

// If statements
// Ovde su svi operatori uporedjenja
// https://www.w3schools.com/php/php_operators.asp

// Sintaksa
// if (izraz koji je true ili false) {kod koj radi ako je izraz true}

// Primer
$name = 'Dusan';
if ($name == 'Dusan') {
    echo 'Ime je ispravno';
}

// Na if moze da se nadovezu koliko hoces elseif
// Svaki else if mora da ima uslov isto kao i if.

// Primer

$name = 'Dusan';
if ($name == 'Ivan') {
    echo 'Ime je Ivan';
} elseif ($name == 'Dusan') {
    echo 'Ime je Dusan';
}

// I na kraju moze else koj nema uslov i desava se samo ako je svaki elseif false

// Primer
$name = 'Nemanja';
if ($name == 'Ivan') {
    echo 'Ime je Ivan';
} elseif ($name == 'Dusan') {
    echo 'Ime je Dusan';
} else {
    echo 'Ime ne postoji';
}

// Zadaci

// Zadatak 1
// Imas broj i listu
// Ako je broj(number) veci nego broj elemenata u listi
// Napisi poruku: BROJ JE VELIKI
// Ako nije napisi poruku: BROJ JE MALI
// Moras da nadjes funckiju online koja ti kaze duzinu liste(broj elemenata u listi)
$number = 5;
$names = ['Dusan', 'Ivan', 'Nemanja', 'Nikola'];

// Zadatak 2
// Date su 4 promenljive
// Ako je user1 duzi od $secretWord napisi poruku: user1 veci
// Ako su i user1 i user3 duzi od $secretWord napisi poruku: user1 i user3 veci
// Ako su ili user1 ili user3 duzi od $secretWord napisi: jedan je veci
// Moras da nadjes funkciju za duzinu stringa
$user1 = 'shinobi90';
$user2 = 'SinnerHell';
$user3 = 'Lord';
$secretWord = 'SECRET';

// Zadatak 3
// Data je jedna promeljiva
// Ako postoji promenljiva word2 napisi poruku: postoji word2
// Ako nije data word2 napisi poruku gde je teks vrednost promenljive $word1 ali u h1 tagovima
$word1 = 'hello';

// Zadatak 4
// Date su 3 promenljive
// Napraviti if elseif za kalkulator u zavisnosti od vrednosi operanda
$num1 = 10;
$num2 = 5;
$operand = '+'; # operand je sada '+' ali treba napisati za sve moguce vrednosti.
// Ako je $operand = '+' treba izaci 15
// Ako je $operand = '-' treba izaci 5 itd.

// Zadatak 5
// Data je jedna promenljiva
// Treba napisati program za prodavanje karte u zavisnosti od godina
// Ako je ispor 3 godine treba napisati: karta je 100 dinara
// Ako je ispor 18 a vise od 2 godine treba napisati: karta je 400 dinara
// Ako je 18 ili vise godina treba napisati: karta je 600 dinara
$age = 17;

// *********************************************************************** //
