<?php

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

$user1 = $allUsers["user1"];
$user2 = $allUsers["user2"];

if ($user1 == $mainuser || $user2 == $mainuser) {
    echo "Already exist. Try again";
} else {
    $user3 = $mainuser;
    $allUsers["user3"] = $mainuser;
}

print_r($allUsers);
