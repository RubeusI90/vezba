<?php
// Zadatak 7
// Napraviti kalkulator
// Dva input taga type="number"
// Jedan select tag sa 4 opcije
// Opcije su: saberi, oduzmi, pomnozi, podeli
// Kad korisnik unese brojeve i izabere operaciju
// ispisati rezultat u zavisnosi od operacije
?>

<form name="form1" method="POST" action="">
    <input type="text" name="num1"><br>
    <input type="text" name="num2"><br>
    <label for="calculator">Select operation</label>
    <select name="calculator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br>
    <input type="submit" name="button" value="Send">

</form>

<?php

if (isset($_POST["button"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["calculator"];
    $sum = $num1 . $operation . $num2;
    echo $sum;
}
