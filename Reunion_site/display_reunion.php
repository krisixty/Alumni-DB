<?php
function do_html_header() {
 // print an HTML header

?>
<!DOCTYPE html>
<html>
<head>
	<title>Reunion Weekend 2015</title>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/reunion_style.css">
</head>
<body>
	<header class="main-header">
	<h1>UNIVERSITY OF SZEGED</h1>
	<p class="header">Faculty of Medicine, Faculty of Dentistry, Faculty of Pharmacy
	Foreign Language Programs</p>

<img class="students" src="img/Reunion.jpg">
<img class="students" src="img/szegedmed_students_02.jpg">
<img class="students" src="img/szegedmed_students_03.jpg">
<img class="students" src="img/szegedmed_students_04.jpg">
<img class="students" src="img/szegedmed_students_05.jpg">

		<div class="grid-container">
			<?php display_links() ?>
		</div>
	</header>
<?php
}
?>

<?php
function main_banner() {
?>
	<div class="main-banner">
		<h1>Lorem</h1>
	</div>
<?php
}
?>

<?php
function display_links() {
 	global $ind_sel;
	global $prog_sel;
	global $acc_sel;
	global $reg_sel;
	global $com_sel;
	global $faq_sel;
	global $cont_sel;

?>
		<ul class="grid-12 main-nav">
			<li><a href="index.php" class="<?php echo $ind_sel; ?>">Home</a></li>
			<li><a href="program.php" class="<?php echo $prog_sel; ?>">Program</a></li> 
			<li><a href="accommodation.php" class="<?php echo $acc_sel; ?>">Accommodation</a></li> 
			<li><a href="registration.php" class="<?php echo $reg_sel; ?>">Registration to the Event</a></li>
			<li><a href="coming.php" class="<?php echo $com_sel; ?>">Who's coming</a></li>
			<li><a href="faq.php" class="<?php echo $faq_sel; ?>">FAQ</a></li>
			<li><a href="contact.php" class="<?php echo $cont_sel; ?>">Contact</a></li> 
		</ul>
<?php
}
?>

<?php
function display_secondary_nav() {
?>
		<ul class="secondary-nav">
			<li><a href="#" target="_blank">Trailer</a></li>
			<li><a href="../alumni/4/index.php" target="_blank">Join our Alumni Community</a></li>
			<li><a href="http://sumaa.org" target="_blank">SUMAA</a></li>
		</ul>

<?php
}
?>

<?php
function reunionMainContent() {
	global $pg_content;
?>
	<div class="grid-container">
		<div class="grid-9 main-content">
			<?php 
			if ($pg_content == 'accommodation') {
					contentAccommodation();
				}
			if ($pg_content == 'coming') {
					contentComing();
				}
			if ($pg_content == 'contact') {
					contentContact();
				}
			if ($pg_content == 'faq') {
					contentFAQ();
				}	
			if ($pg_content == 'index') {
					contentIndex();
				}	
			if ($pg_content == 'program') {
					contentProgram();
				}		
			if ($pg_content == 'registration') {
					contentRegistration();
				}						
			?>
		</div>
		
		<div class="grid-3">
		<h3><br></h3>
			<?php display_secondary_nav();?>	
		</div>
	</div>	
<?
}
?>

<?php
function do_html_footer()
 // print an HTML footer
{
?>

	<footer class="main-footer">
		        <p>Reunion Weekend 2015 and 30th Anniversary &copy; 2014 Kristof Szilagyi</p>
	</footer>
</body>
</html>
<?php
}
?>

