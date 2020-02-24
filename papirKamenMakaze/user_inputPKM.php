<?php

$p_k_m = ["papir", "kamen", "makaze"];
$cpu = $p_k_m[array_rand($p_k_m)];

if (isset($_POST["button"])) {
    if (isset($_POST["pkm"])) {
        $human = $_POST["pkm"];
        echo "Human choose " . $human . "<br>";
        echo "Computer choose " . $cpu . "<br>";
        if ($human == "papir" & $cpu == "papir") {
            echo "Draw";
        } elseif ($human == "papir" & $cpu == "kamen") {
            echo "Human wins!";
        } elseif ($human == "papir" & $cpu == "makaze") {
            echo "CPU wins!";
        } elseif ($human == "kamen" & $cpu == "papir") {
            echo "CPU wins!";
        } elseif ($human == "kamen" & $cpu == "kamen") {
            echo "Draw!";
        } elseif ($human == "kamen" & $cpu == "makaze") {
            echo "Human wins!";
        } elseif ($human == "makaze" & $cpu == "papir") {
            echo "Human wins!";
        } elseif ($human == "makaze" & $cpu == "kamen") {
            echo "CPU wins!";
        } elseif ($human == "makaze" & $cpu == "makaze") {
            echo "Draw!";
        }
    } else {
        echo "You have to pick something bitch!";
    }
}
?>

<form name="form1" method="POST" action="">
    <input type="radio" id="papir" name="pkm" value="papir">
    <label for="papir">Papir</label><br>
    <input type="radio" id="kamen" name="pkm" value="kamen">
    <label for="kamen">Kamen</label><br>
    <input type="radio" id="makaze" name="pkm" value="makaze">
    <label for="makaze">Makaze</label><br><br>
    <input type="submit" name="button" value="GO!">
</form>