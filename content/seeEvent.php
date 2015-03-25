<?php 

 
$sd = $_GET['sd'];




require_once '../common/dbConnect.php';

$event_info = array();

$sql = "SELECT e.event_name,
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
        u.username = 'yuiop' AND 
        u.password = 'yuiop' AND 
        u.username = a.user AND 
        e.C_Vst='$sd' AND 
        e.event_id = a.event AND 
        v.venue_id = e.venue;";

$STH = $DBH->query($sql);

$STH->setFetchMode(PDO::FETCH_ASSOC);

while ($row = $STH->fetch()){
	$event_info[] = $row;	
}

foreach ($event_info as $key => $value) {
	$names[] = $event_info[$key]['firstname'];
	$names[] = $event_info[$key]['lastname'];
	
}

	$edate = $event_info[0]['C_Vet'];
	$stime = $event_info[0]['S_time'];
	$etime = $event_info[0]['E_time'];
	$venue = $event_info[0]['description'];


?>

<p><b>Event:</b> <?php echo $ename; ?></p>

<p><b>Start Date:</b>  <?php echo $esdate; ?> <b>End Date:</b>  <?php echo $edate; ?></p>

<p><b>From:</b> <?php echo $stime; ?> <b>To:</b> <?php echo $etime; ?></p>

<p> <b>Location:</b> <?php echo $venue; ?></p>
<p><b>Joined the event:</b> <?php 
	for ($i=0; $i < count($names); $i=$i+2) { 
	
			if($i == count($names)-2){
				echo $names[$i].' '.$names[$i+1];
			}else{
				echo $names[$i].' '.$names[$i+1].', ';
			}
			 
			
}


?></p>

