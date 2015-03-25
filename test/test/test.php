<html>
<head>
<link rel="stylesheet" type="text/css" href="testCss.css">
</head>
<body>


<?php
$year = array( {'1' => 'January', }, 'February', 'March','April','May','June', 'July','August','September','October','November','December');

for($x = 0; $x <=count($year); $x++) {
   if ($x==2){
   		$num_day=28;
   }elseif($x%2==0){
   		$num_day=30;

   }else{
   		$num_day=31;
   }
}

 

 ?>
	<script type="text/javascript" src='jquery-2.1.1.min'></script>
	<script type="text/javascript" src='test.js'></script>
</body>
</html>
