<?php 
include("insert.php");
date_default_timezone_set('Europe/Helsinki');
$year = $_GET['y'];
$month = $_GET['m'];
$day = $_GET['d'];




?>

<form action='content/insert.php' method="POST" target="_blank">

Event:<input type="text" name="event_name">
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