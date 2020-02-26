<?php
// Zadatak 3

// Definisati funkciju user koja ima dva parametra
// Prvi je parametar $fname
// Drugi je default parametar $status = 'admin'
// Funckija treba da vrati poruku fname is $status
// Pozvati funkciju dva puta i odstamprati rezultat
// Prvi put bez unosa vrednosti za $status
// Drugi put ce vrednost za $status biti 'normal'

function nameInfo($fname, $status = "admin")
{
    return $fname . " is " . $status . ".";
}

$name1 = nameInfo("Nemanja");
echo $name1;
echo "<br>";

$name2 = nameInfo("Nemanja", "normal");
echo $name2;
