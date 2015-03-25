<!DOCTYPE html>


<html>
<head>
<link rel="stylesheet" type="text/css" href="../stylesheets/mystyle.css">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src='js/myFunctions.js'></script>

  <title>DAY</title>
</head>

<body>
<div id='time_week'>
<?php 
for ($time = 0; $time <= 23; $time++) {

echo "<p>$time:00</p>";

 } 


 ?>
 
 </div>
<div id="calendar"> 
<div class='weekdays'>
<p>Mo.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
</div>
 
 <div class='weekdays'>
<p>Tu.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
</div>

<div class='weekdays'> 
<p>We.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
 </div>

 <div class='weekdays'> 
<p>Th.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
 </div>
 
 <div class='weekdays'> 
<p>Fr.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
</div>
 
 <div class='weekdays'> 
<p>Sa.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
</div>

<div class='weekdays'>  
<p>Su.</p>
<?php
	for ($week_day=0; $week_day<=23;$week_day++){
	echo "<button id='task_week' onClick='getEvent();'></button>";
}
?>
 
</div>
</div>

 

</body>

</html>