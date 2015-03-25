<?php
$host = 'mysql.metropolia.fi';  // localhost
$dbname = 'veronip';
$user = 'veronip';
$pass = 'data2305';

try {
	$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$DBH->query("SET NAMES utf8;");
}
catch(PDOException $e) {
	echo "Could not connect to database.";
	// remember to set the permissions of 'logs' to 0777
	// file_put_contents('../../logs/PDOErrors.txt', $e->getMessage()."\n", FILE_APPEND);
}

?>