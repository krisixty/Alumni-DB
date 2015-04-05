<?php
function do_html_header() {
 // print an HTML header
	global $pg_content;
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
	
	<?php //Removes logo from index page
	if ($pg_content == 'index') {
				?>
				<style>
				body {background-image:none}
				</style>
				<?php
			}	
	?>

</head>
<body>
	<header class="main-header">
	<h1>UNIVERSITY OF SZEGED</h1>
	<p class="header">Faculty of Medicine, Faculty of Dentistry, Faculty of Pharmacy <span class="header-s">Foreign Language Programs</span></p>

<img class="pics-in-line" src="img/Reunion.png">
<img class="pics-in-line" src="img/szegedmed_students_02.jpg">
<img class="pics-in-line" src="img/szegedmed_students_03.jpg">
<img class="pics-in-line" src="img/szegedmed_students_04.jpg">
<img class="pics-in-line" src="img/szegedmed_students_05.jpg">

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
			<li><a href="registration.php" class="<?php echo $reg_sel; ?>">Registration for the Event</a></li>
			<li><a href="coming.php" class="<?php echo $com_sel; ?>">Who's Coming</a></li>
			<li><a href="faq.php" class="<?php echo $faq_sel; ?>">FAQ</a></li>
			<li><a href="contact.php" class="<?php echo $cont_sel; ?>">Contacts</a></li> 
		</ul>
<?php
}
?>

<?php
function display_secondary_nav() {
?>
		<ul class="secondary-nav">
			<a href="../index.php" target="_blank">Join our Alumni Community</a></li>
			<!--<li><li><a href="http://aas-szegedmed.hu/test/alumni/4/index.php" target="_blank">Join our Alumni Community</a></li></li>-->
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
			<img src="img/infoblokk_kedv_final_felso_cmyk_en_ESZA_low_res.jpg">		
			<?php display_secondary_nav();?><br>	
			<a href="http://sumaa.org" target="_blank"><img src="img/sumaa.png"></a><br><br>	
			<iframe width="100%" height="100%" src="//www.youtube.com/embed/Qe6hC_FaJ7U" frameborder="0" allowfullscreen></iframe>
			<br>
			<a href="https://www.facebook.com/szegedalumni?fref=nf" target="_blank"><img src="img/Facebook-Logo-Wallpaper-Full-HD_small.png"></a><br>	
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
		        <p>Reunion Weekend 2015 and 30th Anniversary &copy; 2014-2015 <a href="http://aas-szegedmed.hu/kristof" target="_blank">Kristof Szilagyi</a></p>
	</footer>
</body>
</html>
<?php
}
?>

