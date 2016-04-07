<?php
//sala.php
session_start();
$tunnus = $_SESSION["tunnus"];
// käyttäjä ei ole kirjautunut sisään
if ($tunnus == "") {
    header("Location: Demo.php");
    die();
}
header("Location: Demo.php");
?>
