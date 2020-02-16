<?php
// ZADATAK 8
// Dat je asocijativni niz.
// Ako je vredonst user prazna odstampati: User does not exist
$validUser = ['user' => ''];

if (empty($validUser["user"])) {
    echo "User does not exist.";
}
