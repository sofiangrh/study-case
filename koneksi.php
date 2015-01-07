<?php
	$username = "root";
	$password = "sl4cker";
	$database = "dbStudyCase";
	$server = "127.0.0.1";
	$connect = mysql_connect ($server, $username, $password);
	
	if (!connect) {
		die ('Ga Konek' . mysql_error());
	}

	$db = mysql_select_db ($database);
	if ($db) {
		echo "";
	}
	else {
		echo "database ga konek";
	}
?>
