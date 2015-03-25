<?php
require_once '../common/dbConnect.php';

$events = array();
$event = array();


$sql = "SELECT
	e.event_name,
	e.C_Vst,
	e.C_Vet,
	e.S_time,
	e.E_time,
	v.description
FROM
event e,
user u,
j_attends a,
venue v
WHERE
u.username = 'qwert' AND
u.password = 'qwert' AND
u.username = a.user AND
e.event_id = a.event  AND
v.venue_id = e.venue;
";

$STH = $DBH->query($sql);

$STH->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $STH->fetch()){
	$events[] = $row;	
}

echo json_encode($events);


//test
	$sql="SELECT e.event_id FROM event e WHERE 	e.event_name = 'test';";
		
	$STH = $DBH->query($sql);

	$STH->setFetchMode(PDO::FETCH_ASSOC);

	while ($id = $STH->fetch()){
		$event[] = $id;	
	}

	
	$data = $event[0];
	$event_n = $data['event_id'];
	echo $event_n;
  //test

?>