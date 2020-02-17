<?php
// Zadatak 4
// Napraviti formu koja ima dva input taga type="number"
// Kada user unese brojeve sabrati ih i napisati rezultat
?>

<form name="form1" method="POST" action="">
    Number 1: <br>
    <input type="text" name="num1"><br>
    Number 2: <br>
    <input type="text" name="num2"><br><br>
    <input type="submit" name="button" value="Sum"><br>
</form>

<?php

if (isset($_POST["button"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo $num1 + $num2;
}
?>