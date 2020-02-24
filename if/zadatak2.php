<?php

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

echo strlen($user1);
echo "<br>";
echo strlen($user2);
echo "<br>";
echo strlen($user3);
echo "<br>";
echo strlen($secretWord);
echo "<br>";

$user1_1 = strlen($user1);
$user2_2 = strlen($user2);
$user3_3 = strlen($user3);
$secret_word = strlen($secretWord);

if ($user1_1 > $secret_word) {
    echo "user1 je veci.";
} elseif ($user1_1 > $secret_word and $user2_2 > $secret_word) {
    echo "user1 i user3 su veci.";
} elseif ($user1_1 > $secret_word or $user3_3 > $secret_word) {
    echo "jedan je veci";
}
