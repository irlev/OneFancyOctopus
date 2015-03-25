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


	





?>