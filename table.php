<?php
require_once('alumni_includes.php');
?>
<!DOCTYPE html>
<html>
    <head>
	    <title>Table 1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="tablesorter/themes/blue/style.css">
		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="tablesorter/jquery.tablesorter.js"></script> 
		<script>
		$(document).ready(function() 
			{ 
				$("#myTable").tablesorter(); 
			} 
		); 
		</script>
		
    </head>
    <body>
	
	<?php
	$conn = db_connect();
	$graduates=$conn->query("SELECT * FROM graduate_officedata ORDER BY fname");
	$sor=mysqli_fetch_array($graduates);
	?>
	
	
	<table id="myTable" class="tablesorter"> 
		<thead> 
		<tr> 
			<th>Last Name</th> 
			<th>First Name</th> 
			<th>Email</th> 
			<th>Due</th> 
			<th>Web Site</th> 
		</tr> 
		</thead> 
		<tbody> 
		<tr> 
			<td><?php echo $sor['fname'];?></td> 
			<td><?php echo $sor['gname'];?></td> 
			<td>jsmith@gmail.com</td> 
			<td>$50.00</td> 
			<td>http://www.jsmith.com</td> 
		</tr> 
		<tr> 
			<td>Bach</td> 
			<td>Frank</td> 
			<td>fbach@yahoo.com</td> 
			<td>$50.00</td> 
			<td>http://www.frank.com</td> 
		</tr> 
		<tr> 
			<td>Doe</td> 
			<td>Jason</td> 
			<td>jdoe@hotmail.com</td> 
			<td>$100.00</td> 
			<td>http://www.jdoe.com</td> 
		</tr> 
		<tr> 
			<td>Conway</td> 
			<td>Tim</td> 
			<td>tconway@earthlink.net</td> 
			<td>$50.00</td> 
			<td>http://www.timconway.com</td> 
		</tr> 
		</tbody> 
		</table> 

    </body>
</html>
<?php
?>








