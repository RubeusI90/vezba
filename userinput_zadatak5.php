<?php
// Zadatak 5
// Napraviti formu koja ima dva input taga type="number"
// Ako je prvi broj veci od drugog napisati : Prvi broj je veci
// U suprotnom napisati: Drugi broj je veci
?>

<form name="form1" method="POST" action="">
    Number 1: <br>
    <input type="number" name="num1"><br>
    Number 2: <br>
    <input type="number" name="num2"><br><br>
    <input type="submit" name="button" value="Send">
</form>

<?php

if (isset($_POST["button"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    if ($num1 > $num2) {
        echo "Prvi broj je veci.";
    } elseif ($num1 < $num2) {
        echo "Drugi broj je veci.";
    } else {
        echo "Izabrali ste iste brojeve.";
    }
}

?>