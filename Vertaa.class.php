<?php

class Tarkistus($Ratkaisu, $Vastaus){
	if ($Vastaus == $Ratkaisu){
        header("Location: oikea.php");
}
else{
        header("Location: vaara.php");
}
}
?>