<?php 

require_once '../common/dbConnect.php';

$events = array();

$sql = "SELECT e.event_name, e.C_Vst FROM event e";

$STH = $DBH->query($sql);

$STH->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $STH->fetch()){
	$events[] = $row;	
}

echo json_encode($events);

?>