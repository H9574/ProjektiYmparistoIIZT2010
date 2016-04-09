<?php
/*require_once 'Laskuja.class.php';
$Vastaus = new Laskuja();
$Oppilas = $_POST["ruisku"];

$Maksimi = 4;
$Minimi = 6;
$Ruisku = 50;
$Aika = 24;
$InfuusioNopeus = 5;

$Ratkaisu = $Vastaus->LaskeRuiskujenMaara($Aika, $Ruisku, $InfuusioNopeus);

if ($Oppilas == $Ratkaisu){
        header("Location: oikea.php");
}
else{
        header("Location: vaara.php");
}*/
$Vastaus = $_POST["vastaus"];
class Tarkistus($Ratkaisu){
	if ($Vastaus == $Ratkaisu){
        header("Location: oikea.php");
}
else{
        header("Location: vaara.php");
}
}
?>
