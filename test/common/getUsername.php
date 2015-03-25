<?php 
require_once 'dbConnect.php';
require_once 'functions.php';
require_once 'dbFunctions.php';


function output_name($user_input){
$user = $user_input;
}

$username = array();
$SQL = "SELECT
	firstname,
	lastname
	FROM
	user
	WHERE
	username = '$user';";
	$STH = @$DBH->query($SQL);
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	while ($row = $STH->fetch()){
	$username[] = $row;	
	}
	echo json_encode($username);
	
	

	
	
	?>