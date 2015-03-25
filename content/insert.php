<?

require_once '../common/dbConnect.php';

if( $_POST ){
	$venue_id = array();
	$event = array();
	
  $event_name = $_POST['event_name'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $stime = $_POST['task_stime'];
  $etime = $_POST['task_etime'];
  $venue = $_POST['venue'];
   

   $sql = "INSERT INTO venue( 	
			description 
			)
			VALUES(
			'$venue'
			);";

 
  $STH = $DBH->query($sql);
  
  //test
	$sql="SELECT v.venue_id FROM venue v WHERE v.description = 'here'; ";
	$STH = $DBH->query($sql);
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	while ($row = $STH->fetch()){
		$venue_id[] = $row;	
	}
	$data = $venue_id[0];
	$venue_n = $data['venue_id'];
	
  
  //test
  
  
  $sql="INSERT INTO event( 	
		event_creator,
		event_name,
		venue,
		C_Vst,
		C_Vet,
		S_time,
		E_time
	)
	VALUES(
		'yuiop',
		'$event_name',
		'$venue_n',
		'$start_date',
		'$end_date',
		'$stime',
		'$etime'		
	);";
	
	$STH = $DBH->query($sql);
	
	
	$sql="SELECT e.event_id FROM event e WHERE 	e.event_name = '$event_name';";
		
	$STH = $DBH->query($sql);

	$STH->setFetchMode(PDO::FETCH_ASSOC);

	while ($id = $STH->fetch()){
		$event[] = $id;	
	}
	$data = $event[0];
	$event_n = $data['event_id'];
	
	
	
	
	$sql= "INSERT INTO j_attends( 	
			event,
			user
		)
		VALUES(
			'$event_n',
			'yuiop'
		);";
	
	$STH = $DBH->query($sql);
	
	header("Location: http://users.metropolia.fi/~veronip/CMS/Test/skelet.php");
  
}
?>


 




 