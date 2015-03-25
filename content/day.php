<div id='d_date'>
<?php 
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];	
 ?>
		<p><?php echo $month.' '.$day.', '.$year;?></p>


</div>

<?php 
//calender - month layout
for ($time = 0; $time <= 23; $time++) {
 echo "<div class='task' id='d_day'><p id='d_time'>$time:00</p></div>";
 } 
?>