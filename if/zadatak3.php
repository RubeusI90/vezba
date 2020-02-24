<?php

// Zadatak 3
// Data je jedna promeljiva
// Ako postoji promenljiva word2 napisi poruku: postoji word2
// Ako nije data word2 napisi poruku gde je teks vrednost promenljive $word1 ali u h1 tagovima
$word1 = 'hello';

if (isset($word2)) {
    echo "Postoji word2.";
} else {
    echo "<h1>$word1</h1>";
}
