
	<div id='m_month'>
		<?php 

		
		$month_names = array( '1' => 'January', 'February', 'March','April','May','June', 'July','August','September','October','November','December');
		$month_st=$_POST['month'];
		$key = array_search($month_st, $month_names); 
		$month = intval($key);
		$year = intval($_POST['year']);	
		$day=$_POST['day'];
			 /*
			if(!empty($_POST['submit'])){
				$month_st=$_POST['month_option'];
				$key = array_search($month_st, $month_names); 

				$month = intval($key);
				$year = intval($_POST['year_option']);
				
			}else{
				$month=intval(date('n'));
				$year=intval(date('Y'));
			}
			*/
		
			?>
 
		

	</div><!--end:month-->


<?php 

$chosen_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
//calendar - month layout
for ($z = 1; $z <= $chosen_month; $z++) {
	$weekday = date("D", mktime(0, 0, 0, $month, $z, $year)); 
	if ($z==$day){
		echo "<div class='task task_month' id='$z' style='border:1.5px solid red'  data-reveal-id='myModal' data-reveal-ajax='content/event.php?y=$year&$m=$month&d=$z'>$z, $weekday<p>text</p></div>";
	}else{
		echo "<div class='task task_month' id='$z' data-reveal-id='myModal' data-reveal-ajax='content/event.php?y=$year&m=$month&d=$z'>$z, $weekday<p>text</p></div>";
	}
 

} 


?>