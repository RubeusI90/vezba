<?php

// ZADATAK 3
// Date su dve liste
// Ako su i username i email isti otkucati: VALID u h1 tagu
// Ako nisu otkucati: Please Register u <a> tagu
$users1 = ['username' => 'shinobi90', 'email' => 'shinobi@test.com'];
$users2 = ['username' => 'nidza92', 'email' => 'nidza@test.com'];

$user_name1 = $users1["username"];
$user_name2 = $users2["username"];
$email1 = $users1["email"];
$email2 = $users2["email"];

if ($user_name1 == $user_name2 & $email1 == $email2) {
    echo "<h1>VALID</h1>";
} else {
    echo "<a>Please register</a>?";
}
