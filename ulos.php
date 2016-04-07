<?php
//ulos.php
session_start();
unset($_SESSION["tunnus"]);
header("Location: Frontpage.html");
?>
