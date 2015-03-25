<?php

function check_user($user, $pwd, $DBH) {
	//$hashpwd = hash('md5', $pwd);
	$sql = "SELECT username, password FROM user WHERE username = '$user' AND password='$pwd'";
	$STH = @$DBH->query($sql);
	if($STH->rowCount() > 0){
		return true;
	} else {
		return false;
	}
}

function EventList(){
	
	$events = array();
	$sql = "SELECT e.event_name, e.C_Vst FROM event e";
	$STH = @$DBH->query($sql);
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	while ($row = $STH->fetch()){
	$events[] = $row;	
	}
	return json_encode($events);
	}
	





?>