<?php
// Zadatak 3
// Napraviti formu sa dva input taga
// username i email
// Kada idemo submit odstampati: Welcome username
// Napraviti da ne izadje greska unindentified index
// kada prvi put dodjemo na stranicu
?>

<form name="form1" method="POST" action="">
    User name: <br>
    <input type="text" name="username"><br>
    Email: <br>
    <input type="text" name="email"><br>
    <input type="submit" name="button" value="Send"><br>
</form>

<?php

if (isset($_POST["button"])) {
    $welcome = $_POST["username"];
    echo "Welcome " . $welcome;
