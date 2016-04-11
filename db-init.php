<?php

	$db = new PDO('mysql:host=178.62.246.71;dbname=database-iizp2010-2;charset=UTF8',
              'teamh', 'iqo!Ib%nqr35a');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>