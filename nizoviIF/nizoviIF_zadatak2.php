<?php

// ZADATAK 2
// Data su dva asocijativna niza
// Ago su zemlje oba usera iste odstampati: Ben0 and Tanguy are from same country
$player1 = ['user' => 'Ben0', 'country' => 'France'];
$player2 = ['user' => 'Tanguy', 'country' => 'France'];


$player_ben0 = $player1["country"];
$player_tanguy = $player2["country"];

if ($player_ben0 == $player_tanguy) {
    echo $player1["user"] . " and " . $player2["user"] . " are from same country.";
}
