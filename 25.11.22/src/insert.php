<?php
$wartoscZZapytania = $_POST['wartosc'];

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "phpdb";

$polaczenie = new mysqli(
    $hostname,
    $username,
    $password,
    $databasename
);

$kwerendaDOZapisuDanych = "INSERT INTO wartosci(wartosc) VALUE('".$wartoscZZapytania."')";
$resultat = $polaczenie -> query($kwerendaDOZapisuDanych);

echo $resultat;
header("Location: " . $_SERVER['HTTP_REFERER']);
?>