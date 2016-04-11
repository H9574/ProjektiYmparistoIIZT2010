<?php
	$db_host = '178.62.246.71';
	$db_name = "database-iizp2010-2";
	$db_user = "teamh";
	$db_pass = 'iqo!Ib%nqr35a';
	
	$db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>