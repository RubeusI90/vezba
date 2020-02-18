<?php
// Zadatak 6
// Napraviti formu koja ce imati jedan input tag za username
// i select tag koj ima 3 opcije
// opcije su 3 zemlje(proizvoljno)
// Kada user ide submit napisati:
// User is from country
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form name="form1" method="$_POST" action="">
        User<br>
        <input type="text" name="user"><br>
        <input type="submit" name="button" value="Send"><br><br>

        <label for="country">Select country: </label>
        <select name="country">
            <option value="serbia">Serbia</option>
            <option value="japan">Japan</option>
            <option value="russia">Russia</option>

    </form>

    </select>

    <?php

    if (isset($_POST["button"])) {
        echo $_POST;
    }

    ?>

</body>

</html>