<?php

// USER INPUT

// User input se dobija iz forme

// forma ima dva atributa action i method

// action je koj ce fajl da obradi formu,
// ako se ostavi prazan obradice je fajl u kome se nalazi

// method je nacin na koj hoces da posaljes podatke iz forme
// ima dve vrednosti: post i get
// post je sigurnija

// Sve sto stigne iz forme cuva se u promenljivama:
// $_POST ili $_GET u zavisnosti od method atributa
// $_POST i $_GET su obicni asocijativni nizovi

// Svaka forma ima input tagove
// Input tag ima atribut name
// Vrednos za atribut name je proizvoljna i
// bice key u $_POST ili $_GET

// PRIMER

?>

<!-- stavili smo method post a action je ostao prazan -->
<form action="" method="post">
<!-- za primer stavljam dva input taga -->
<input type="text" name="firstName">
<input type="text" name="lastName">
<!-- mora da ima i jedan input type submit -->
<!-- njemu isto moze da se da name atribut ako hocemo -->
<!-- moze i da se da value atribut sto ce biti vrednost -->
<input type="submit" name="button" value="SEND">
</form>

<?php

// Da bi radili nesto sa podacima iz forme treba na $_POST
// Ako idemo print_r($_POST) dobicemo praznu listu
// Tek kad unesemo nesto ta lista se popunjava
// Ako unesemo Dusan Mitic i idemo print_r($_POST)
// Dobicemo:
// ['firstName' => 'Dusan, 'lastName' => 'Mitic', 'button' => 'SEND']
// Posto je ovo asocijativni niz kao i svaki drugi mozemo da izvadimo bilo koj pojedinacni podatak

// echo $_POST['firstName'] dalo bi Dusan itd.

// ****************************************************************

// ZADACI

// Zadatak 1
// Napraviti formu sa dva input taga
// username i email
// Kada idemo submit odstampati celu $_POST listu

// Zadatak 2
// Napraviti formu sa dva input taga
// username i email
// Kada idemo submit odstampati: Welcome username

// Zadatak 3
// Napraviti formu sa dva input taga
// username i email
// Kada idemo submit odstampati: Welcome username
// Napraviti da ne izadje greska unindentified index
// kada prvi put dodjemo na stranicu

// ZA SVE NAREDNE ZADATKE IZBEGAVATI TU GRESKU

// Zadatak 4
// Napraviti formu koja ima dva input taga type="number"
// Kada user unese brojeve sabrati ih i napisati rezultat

// Zadatak 5
// Napraviti formu koja ima dva input taga type="number"
// Ako je prvi broj veci od drugog napisati : Prvi broj je veci
// U suprotnom napisati: Drugi broj je veci

// Zadatak 6
// Napraviti formu koja ce imati jedan input tag za username
// i select tag koj ima 3 opcije
// opcije su 3 zemlje(proizvoljno)
// Kada user ide submit napisati:
// User is from country

// Zadatak 7
// Napraviti kalkulator
// Dva input taga type="number"
// Jedan select tag sa 4 opcije
// Opcije su: saberi, oduzmi, pomnozi, podeli
// Kad korisnik unese brojeve i izabere operaciju
// ispisati rezultat u zavisnosi od operacije