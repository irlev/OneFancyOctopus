
	<!--Chosen Date-->
<div id='wd_date'>
		
<?php 
		date_default_timezone_set('Europe/Helsinki');
		//setting the chosen date values
		$year = intval($_POST['year']);	
		$day=$_POST['day'];
		$month_st =$_POST['month'];
		
		//change the month name to a number;
		$month_names = array( '1' => 'January', 'February', 'March','April','May','June', 'July','August','September','October','November','December');
		$month_st=$_POST['month'];
		$key = array_search($month_st, $month_names); 
		$month = intval($key);

?>
<p> <?php echo $month_st.', '.$year;?> Week : # <?php echo date("W", mktime(0, 0, 0, $month, $day, $year));?></p>
</div>

<!--Days of the week-->

<?php 

 	$week_array = array();
 	$mondays=array();
 	$sundays=array();
 	
		for ($i=1; $i <= cal_days_in_month(CAL_GREGORIAN, $month, $year); $i++) { 
	
		$weekday = date("l", mktime(0, 0, 0, $month, $i, $year)); 
		$week_array[$i] = $weekday;
 		}


	print_r($week_array);

	foreach ($week_array as $key => $value) {
		if ($value=='Monday'){
			$s = $key;
			array_push($mondays,$s);
			
		}


		if ($value == 'Sunday'){
			$e = $key;
			array_push($sundays,$e);
			
		}

	}
	if($mondays[1]<$sundays[1]){
		 $sundays[4] = 0;

	}else{

		array_unshift($mondays,0);
		array_push($sundays, 0);
	}


	for ($i=0;$i<5;$i++){	
	if ($day>=$mondays[$i] && $day <=$sundays[$i]){$ld = $sundays[$i];}
	}		
	  	
			
	
?>
<div id='wd_names'>
<ul>
	<li>Mo.<?php if(!($ld<1)){echo $ld = $ld-6;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
	<li>Tu.<?php if(!($ld<1)){echo ++$ld;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
	<li>We.<?php if(!($ld<1)){echo ++$ld;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
	<li>Th.<?php if(!($ld<1)){echo ++$ld;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
	<li>Fr.<?php if(!($ld<1)){echo ++$ld;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
	<li>Sa.<?php if(!($ld<1)){echo ++$ld;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
	<li>Su.<?php if(!($ld<1)){echo ++$ld;}else{echo $ld=cal_days_in_month(CAL_GREGORIAN, $month-1, $year);}?></li>
</ul>
</div>
	


<!--Printed times-->
	<div id='wd_times'>
<ul>
<?php 
for ($time = 0; $time <= 23; $time++) {

echo "<li>$time:00</li>";

 } 


 ?>
</ul>
	</div>


<!--divs for events-->

	<div id='wd_days'>
		<?php
			for ($week_day=1; $week_day<=168;$week_day++){
			echo "<div class ='task' id='task_week'></div>";
}
?>
	</div>
