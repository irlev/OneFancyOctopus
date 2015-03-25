<?php 
date_default_timezone_set('Europe/Helsinki');
$year = $_GET['y'];

$month = $_GET['m'];
/*$month_names = array( '1' => 'January', 'February', 'March','April','May','June', 'July','August','September','October','November','December');
$key = array_search($month_st, $month_names); 
$month = intval($key);*/

$day = $_GET['d'];

?>

<form action='task.php' method="POST" target="_blank">

Task:<input type="text" name="event_name">
</br>
</br>
Start Date:<input type="date" name="start_date" value='<?php echo date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));?>'> 
End Date:<input type="date" name="end_date" value='<?php echo date("Y-m-d", mktime(0, 0, 0, $month, $day, $year));?>'>
</br>
</br>
Start Time:<input type="time" name="task_stime" value='08:00'> End Time:<input type="time" name="task_etime" value='23:00'>
</br>
</br>
Venue:<input type="text" name="venue">


<input type='submit' value='Submit'>
</form>