<!DOCTYPE html>


<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="stylesheets/mystyle.css">
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
 <script src="js/foundation.min.js"></script>
<script type="text/javascript" src='js/myFunctions.js'></script>
<title>CALENDAR</title>
 <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>

<body>
<?php 
session_start();
require_once('common/dbConnect.php');
require_once('common/dbFunctions.php');
require_once('common/functions.php');
require_once('common/getUsername.php');
 

// if login form has been sent
if(!empty($_POST['email'])){
	
// check email and password using check_user()
// if correct create a session variable:
	if(check_user($_POST['email'], $_POST['pwd'], $DBH)){
		$_SESSION['logged'] = 'forSure';
	} else {
		// else display error message with javascript: alert("Login Failure");
		echo '<script>alert("Login Failure");</script>';
	}
}


// if action parameter is 'logout'
if($_GET['action'] == 'logout'){
	// destroy session
	session_destroy();
	// redirect to this page to reset the page
	redirect($_SERVER['PHP_SELF']);
}

?>

<!--header-->
<?php date_default_timezone_set('Europe/Helsinki');?>
	<ul id='header' >
		
	<?php 
	
	if($_SESSION['logged'] == 'forSure'){
				output_name($_POST['email']);
				//echo "<li id='user'>".$_POST['email']."</li>";
				echo "<li id='user'></li>";
				
				}	
	?>
		<li><a href="day" id="day">Day</a></li>
		<li><a href="week" id="week">Week</a></li>
		<li><a href="month" id="month">Month</a></li>
		<li>
          <?php
		  // if logged in, show logout-link, which sends parameter action=logout in the query string
		  // else show login-link (below)
		  if($_SESSION['logged'] == 'forSure'):
		  ?>
		  <li><a href="?action=logout">Logout</a></li>
		  <?php
		  else:
		  ?>
          <li><a href="#" data-reveal-id="login">Login</a></li>
          <?php
		  endif;
          ?>
          </li>
	</ul><!--end:header-->

	<div id='sidebar'><!--sidebar-->
	<div id="calendar" style='height:200px'>
	<div id='ch_date'><b>Today is:</b> <?php echo date('l\, F jS\, Y');?></div>
	<form method="post" action='<?php echo $_SERVER['PHP_SELF'];?>'>
		<p>Choose the date:</p>
		<select name='day_option' class='date_choise' id='day_select'>
			<?php 
				for ($d=1;$d<=31; $d++){
			?>
 				<option value="<?php echo $d; ?>" <?php if ($y== intval(date('j'))) echo 'selected'?>><?php echo $d; ?></option>
  			<?php }?>
		</select>

		<select name='month_option' class='date_choise' id='month_select'>
			<?php 
			$month_names = array( '1' => 'January', 'February', 'March','April','May','June', 'July','August','September','October','November','December');
			foreach ($month_names as $x) {
	
			?>
 			<option value="<?php echo $x; ?>" <?php if ($x== date('F'))echo 'selected'?>><?php echo $x; ?></option>
  			<?php }?>	
		</select>

		<select name='year_option' class='date_choise' id='year_select'>
			<?php 
				for ($y=1991;$y<=2030; $y++){
			?>
 			<option value="<?php echo $y; ?>" <?php if ($y== intval(date('Y'))) echo 'selected'?>><?php echo $y; ?></option>
  			<?php }?>
		</select>
		
	<?php /* <
			if(!empty($_POST['submit'])){
				$month_st=$_POST['month_option'];
				$key = array_search($month_st, $month_names); 

				$month = intval($key);
				$year = intval($_POST['year_option']);
				
			}else{
				$month=intval(date('n'));
				$year=intval(date('Y'));
			}*/
			?>
 
		</form>
		 
	</div>
<!--Events -->
	<h2>My Event</h2>
	<ul><li></li></ul>
		
		<!--
		
		  /*if($_SESSION['logged'] == 'forSure'){
		
		  EventList();
			
		 
		  }*/
		 -->
		  
		
		
	
</div><!--end:sidebar-->


<!--Main Content:Calendar Block -->
	<div id='content'>
		
	</div>
<!--end:Main Content:Calendar Block -->

<div id="myModal" class="reveal-modal" data-reveal>
  
</div>

<div id="login" class="reveal-modal" data-reveal>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="email" placeholder="insert user name" />
    <input type="password" name="pwd" placeholder="insert password" />
    <input type="submit" name="login" value="Login" class="button" />
  </form>
<a class="close-reveal-modal">&#215;</a> </div>



</body>

</html>