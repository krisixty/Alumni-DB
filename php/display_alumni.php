<?php
function alumni_header() {
 // print an HTML header
?>
<!DOCTYPE html>
<html>
	<head>
    <title>AlumniDB_TestSession1</title>
        <link rel="stylesheet" href="style/normalize.css">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
		<link href='style/style.css' rel='stylesheet'>
        <link href="style/alumni_style.css" rel="stylesheet" >
  </head>
<body>
<?php
}
?>

<?php function alumni_menu() {
?>
    <div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
        <img src="img/close.png">
      </div>

      <!-- Menu -->
      <ul>
	    <li><a href="news.html">News</a></li>
        <li><a href="index.html">About</a></li>
        <li><a href="registration_form.php">Register</a></li>
        <li><a href="#">Login</a></li>
		<!--
        <li><a href="#">Contact</a></li>
		<li><a href="#">Your Classmates</a></li>
		<li><a href="#">Other Graduates</a></li>
		<li><a href="#">Memories</a></li>
		-->
		<li><a href="#">Anniversary</a></li>
		
      </ul>
    </div>
<?php
}
?>

<?php function alumni_body() {
?>
    <!-- Main body -->
   <div class="jumbotron">
      <div class="icon-menu">
        <i class="fa fa-bars"></i>
        Menu
      </div>
	</div> 
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script/script.js"></script>
  </body>
</html>	
<?php
}
?>
