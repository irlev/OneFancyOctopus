<?php 
require_once 'dbConnect.php';



/*function output_name($user_input){
$user = $user_input;
}*/

$username = array();
$SQL = "SELECT
	firstname,
	lastname
	FROM
	user
	WHERE
	username = 'yuiop';";
	$STH = @$DBH->query($SQL);
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	while ($row = $STH->fetch()){
	$username[] = $row;	
	}
	echo json_encode($username);
	
	

	
	
	?>