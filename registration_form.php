<?php
require_once('php/alumni_includes.php');

alumni_header();
alumni_menu();
?>
	 <!-- Main body -->

     <div class="icon-menu">
        <i class="fa fa-bars"></i>
        Menu
	</div>

	<!-- Registration form -->
      <form action="php/register.php" method="post">
       
        <h1>Alumni DB Registration</h1>
		
		<fieldset>
		
			<legend><span class="number">1</span>Personal data</legend>
        	
				<label for="fname">Family Name:</label>
				<input type="text" id="fname" name="fname" maxlength="100">
				
				<label for="gname">Given Name:</label>
				<input type="text" id="gname" name="gname" maxlength="100">
				
				<label for="gender">Gender:</label>
				<select id="gender" name="gender">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				
				<label for="dob">Date of Birth:</label>
				<input type="date" id="dob" name="dob">
				
				Place of Birth:
				<label for="pob_city">City:</label>
				<input type="text" id="pob_city" name="pob_city" maxlength="50">
				
				<label for="pob_country">Country:</label>
				<select id="pob_country" name="pob_country">
						<?php include 'countries.php';?> 
				</select>		
				
				<label for="citizenship">Citizenship</label>
				<select id="citizenship" name="citizenship">
						<?php include 'nationalities.php';?>  
				</select>
			
		</fieldset>	
		
		<fieldset>
		
			<legend><span class="number">2</span>User data</legend>
			
			<label for="email">Email address:</label>
			<input type='text' id="email" name='email' maxlength="100">
			
			<label for="username">Preferred username*:</label>
			<input type='text' id="username" name='username' maxlength="16">
			
			<label for="passwd">Password**:</label>
			<input type='password' id="passwd" name='passwd' maxlength="16">
			
			<label for="passwd2">Confirm password:</label>
			<input type='password' id="passwd2" name='passwd2' maxlength="16">
			
			<p>*max 16 chars</p>
			<p>**between 6 and 16 chars</p>
		
		</fieldset>
			
        <button type="submit">Register</button>
        
      </form>
      <a href="survey.html" target="_blank">Survey</a>
	  
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="script/script.js"></script>  
    </body>
</html>









