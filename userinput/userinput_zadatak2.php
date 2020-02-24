<?php
// Zadatak 2
// Napraviti formu sa dva input taga
// username i email
// Kada idemo submit odstampati: Welcome username
?>

<form name="form1" method="POST" action="">
    User name: <br>
    <input type="text" name="username"><br>
    Email: <br>
    <input type="text" name="email"><br><br>
    <input type="submit" name="button" value="Send"><br>
</form>

<?php

if (isset($_POST["button"])) {
    $username = $_POST["username"];
    echo "Wlcome " . $username;
}
?>