<?php

// Zadatak 1
// Napraviti formu sa dva input taga
// username i email
// Kada idemo submit odstampati celu $_POST listu

?>

<form name="form1" method="POST" action="">
    User name:
    <br>
    <input type="text" name="username">
    <br>
    Email:
    <br>
    <input type="text" name="email">
    <br>
    <br>
    <input type="submit" value="SEND" name="button">
</form>

<?php

if (isset($_POST["button"])) {
    print_r($_POST);
}
?>