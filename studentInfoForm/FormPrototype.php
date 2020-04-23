<!doctype html>
<html>




	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- head does not display-->
		<title>Form prototype</title>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <?php 

	session_start();
	$student_first_name = "";
	$student_last_name = "";
	$student_major = "";
	$student_portfolio = "";
	$student_linkedin = "";
	$student_secondary = "";
	$student_hometown = "";
	$student_career_goals = "";
	$student_hobbies = "";
	$student_state = "";
	$student_minor = "";
	$student_password = "";
	$student_username = "";
	
	$student_first_name_error = "";
	$student_last_name_error = "";
	$student_major_error = "";
	$student_portfolio_error = "";
	$student_linkedin_error = "";
	$student_secondary_error = "";
	$student_hometown_error = "";
	$student_career_goals_error = "";
	$student_hobbies_error = "";
	$student_state_error = "";
	$student_minor_error = "";
	$student_password_error = "";
	$student_username_error = "";
	$valid = false;
	
	if(isset($_POST["submit"])){
		//echo '<script>alert("clear")</script>';
		
		$student_first_name = $_POST['student_first_name'];
		$student_last_name = $_POST['student_last_name'];
		$student_major = $_POST['student_major'];
		$student_portfolio = $_POST['student_portfolio'];
		$student_linkedin = $_POST['student_linkedin'];
		$student_secondary = $_POST['student_secondary'];
		$student_hometown = $_POST['student_hometown'];
		$student_career_goals = $_POST['student_career_goals'];
		$student_hobbies = $_POST['student_hobbies'];
		$student_state = $_POST['student_state'];
		$student_minor = $_POST['student_minor'];
		$student_password = $_POST['student_password'];
		$student_username = $_POST['student_username'];
		
		function student_first_name_validator($first_name){
			
			global $valid, $student_first_name_error;
			
			if(preg_match('/^[a-zA-Z0-9,.!? ]*$/', $first_name)){
	
			}	
			else{
				$valid = false;
				$student_first_name_error = "No numbers or special characters allowed.";
			}
		}
		function student_last_name_validator($last_name){
			
			global $valid, $student_last_name_error;
			
			if(preg_match('/^[a-zA-Z0-9,.!? ]*$/', $last_name)){
	
			}	
			else{
			
				$valid = false;
				$student_last_name_error = "No numbers or special characters allowed.";
			}
		}
		function student_major_validator($major){
			
			global $valid, $student_major_error;
			
			if($major == "default"){
				
				$valid = false;
				$student_major_error = "Please select an option.";
			}
		}
		function student_username_validator($username){
			
			global $valid, $student_username_error;
			
			if(!filter_var($username, FILTER_VALIDATE_EMAIL)){
				
				$valid = false;
				$student_username_error = "Please enter a valid email.";
			}
		}
		function student_portfolio_validator($portfolio){
			
			global $valid, $student_portfolio_error;
			
			if (filter_var($portfolio, FILTER_VALIDATE_URL)){
				
				$valid = false;
				$student_portfolio_error = "Please enter a valid Web Link";
			}
		
		}
		function student_linkedin_validator($linkedin){
			
			global $valid, $student_linkedin_error;
			
			if (filter_var($linkedin, FILTER_VALIDATE_URL)){
				
				$valid = false;
				$student_linkedin_error = "Please enter a valid Web Link";
			}
		
		}
		function student_secondary_validator($secondary){
			
			global $valid, $student_secondary_error;
			
			if (filter_var($secondary, FILTER_VALIDATE_URL)){
				
				$valid = false;
				$student_secondary_error = "Please enter a valid Web Link";
			}
		
		}
		function student_hometown_validator($home){
			
			global $valid, $student_hometown_error;
			
			if ($home == ""){
				
				$valid = false;
				$student_hometown_error = "Please enter a valid Web Link";
			}
		
		}
		function student_career_goals_validator($goals){
			
			global $valid, $student_career_goals_error;
			
			if($goals == ""){
				$valid = false;
				$student_career_goals_error = "Please enter something small";
			}
		}
		function student_hobbies_validator($hobbies){
			
			global $valid, $student_hobbies_error;
			
			if($hobbies == ""){
				$valid = false;
				$student_hobbies_error = "Please enter something small";
			}
		}
		function student_state_validator($state){
			
			global $valid, $student_state_error;
			
			if($state == ""){
				$valid = false;
				$student_state_error = "Please enter something small";
			}
		}
		function student_password_validator($password){
			
			global $valid, $student_password_error;
			
			if(ctype_space($password)){
				$valid = false;
				$student_password_error = "Please don't use any spaces.";
			}
			if($password == ""){
				$valid = false;
				$student_password_error = "Please enter something.";
			}
		}
		
		$valid = true;
		
		$student_first_name_validator($student_first_name);
		$student_last_name_validator($student_last_name);
		$student_major_validator($student_major);
		$student_username_validator($student_username);
		$student_portfolio_validator($student_portfolio);
		$student_linkedin_validator($student_linkedin);
		$student_secondary_validator($student_secondary);
		$student_hometown_validator($student_hometown);
		$student_career_goals_validator($student_career_goals);
		$student_hobbies_validator($student_hobbies);
		$student_state_validator($student_state);
		$student_password_validator($student_password);
		
		if($valid == true){

		}
	}
?>

		<script>
		
			$(document).ready(function(){
				$("#").click(function(){
					
					var valid = true;
					
					var student_first_name = $("#student_first_name").val();
					var student_last_name = $("#student_last_name").val();
					var student_major = $("#student_major").val();
					var student_username = $("#student_username").val();
					var student_portfolio = $("#student_portfolio").val();
					var student_linkedin = $("#student_linkedin").val();
					var student_secondary = $("#student_secondary").val();
					var student_hometown = $("#student_hometown").val();
					var student_career_goals = $("#student_career_goals").val();
					var student_hobbies = $("#student_hobbies").val();
					var student_state = $("#student_state").val();
					var student_password = $("#student_password").val();
					
					
					
					if( /^[^-\s][a-zA-Z_\s-]+$/.test($("#student_first_name").val())){
						
						$('#error_student_first_name').html("");
					}else{
						valid = false;
						$('#error_student_first_name').html("Please no specail characters.");
					}
					
					
					
					if( /^[^-\s][a-zA-Z_\s-]+$/.test($("#student_last_name").val())){
						
						$('#error_student_last_name').html("");
					}else{
						valid = false;
						$('#error_student_last_name').html("Please no specail characters.");
					}
					
					
					
					if( $('#student_major').val() != "default"){
						$('#error_student_major').html("");
					}else{
						valid = false;
						$('#error_student_major').html("Please select an option.");
					}
					
					
					
					if( /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test($('#student_username').val())){
						$('#error_student_username').html("");
					}else{
						valid = false;
						$('#error_student_username').html("Please enter your Dmacc email.");
					}
					
					
					if(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/.test($("#student_portfolio").val())){
						valid = false;
						$('#error_student_portfolio').html("");
					}else{
						$('#error_student_portfolio').html("This is not a valid web address.");
					}
					
					
					if(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/.test($("#student_portfolio").val())){
						valid = false;
						$('#error_student_linkedin').html("");
					}else{
						$('#error_student_linkedin').html("This is not a valid web address.");
					}
					
					
					if(/[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)/.test($("#student_portfolio").val())){
						valid = false;
						$('#error_student_secondary').html("");
					}else{
						$('#error_student_secondary').html("This is not a valid web address.");
					}
					
					
					
					if( /^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/.test($('#student_hometown').val())){
						valid = false;
						$('#error_student_hometown').html("");
					}else{
						$('#error_student_hometown').html("This is not a hometown.");
					}
					
					
					
					if($('#student_career_goals').val() == ""){
						valid = false;
						$('#error_student_career_goals').html("Please enter something.");
					}else{
						$('#error_student_career_goals').html("");
					}
					
					
					
					if($('#student_hobbies').val() == ""){
						valid = false;
						$('#error_student_hobbies').html("Please enter something.");
					}else{
						$('#error_student_hobbies').html("");
					}
					
					
					if($('#student_state').val() == "none"){
						valid = false;
						$('#error_student_state').html("Please select a state.");
					}else{
						$('#error_student_state').html("");
					}
					
					
					if($('#student_password').val() == ""){
						valid = false;
						$('#error_student_password').html("Please enter a password.");
					}else{
						$('#error_student_password').html("");
					}
					
					if(valid == true){
						
						document.getElementById("submit").click();	
					}
					
				});
				
			});
		
		</script>

	</head>

	<style>

	*{
		margin: auto;
		padding: 0;
	}

	header{
		background-color: black;
		color: white;
		padding-top: 0.5em;
		padding-bottom: 1em;
	}

	body{
		background-image: url("fractal-1224853_1280.jpg");
		text-align: center;
	}

	#main{
		float: right;
		width: 90%;
		padding-top: 2em;
	}

	#wrapper{
		background-color: white;
		width: 90%;
		padding-bottom: 75%;
	}

	#footer{
		background-color: white;
		color: black;
		margin: auto;
		width: 75%;
		padding: 0;
		float: right;
		padding-top: 2em;
	}
	.error	{
	color:red;
	font-style:italic;	
}
	.button3{
		visibility: hidden;
		
	}
	.submit{
		visibility: hidden;
		
	}

	</style>

	<body>
		<div id = "wrapper">
			<header>
				<u><h1>Kmoonpage.com<?php echo 'something'; ?> </h1></u>
			</header>

			<content id = "main">

			<form id="form1" name="form1" method="post" action="FormPrototype.php">
				<h3>Info submission Form</h3>
				<table width="800" border="0">
				<tr>
					<td>User Name (your Dmacc Email): </td>
					<td><input type="text" name="student_username" id="student_username" size="15" value = "<?php echo htmlspecialchars($student_username); ?>" /></td>
					<td class="error"><?php echo $student_username_error; ?> <span id = "error_student_username"></span></td>
				</tr>
				<tr>
					<td>Password: </td>
					<td><input type="text" name="student_password" id="student_password" size="15" value = "<?php echo htmlspecialchars($student_password); ?>" /></td>
					<td class="error"><?php echo $student_password_error; ?><span id = "error_student_password"></span></td>
				</tr>
				<tr>
					<td>First name: </td>
					<td width="246"><input type="text" name="student_first_name" id="student_first_name" size="15" value = "<?php echo htmlspecialchars($student_first_name); ?>" /></td>
					<td width="210" class="error"><?php echo $student_first_name_error; ?><span id = "error_student_first_name"></span></td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td><input type="text" name="student_last_name" id="student_last_name" size="15" value = "<?php echo htmlspecialchars($student_last_name); ?>" /></td>
					<td class="error"><?php echo $student_last_name_error; ?><span id = "error_student_last_name"></span></td>
				</tr>
				<tr>
					<td >Major:<br> <select id="student_major" name="student_major">
						<option value="default">---Select Your Program---</option>
						<option value="animation" >Animation</option>
						<option value="graphicDesign" >Graphic Design</option>
						<option value="photography" >Photography</option>
						<option value="videoProduction" >Video Production</option>
						<option value="webDevelopment" >Web Development</option>
						</select><br><span class="student_major_error" id="student_major_error"></span>
					</td>
					<td class="error"><?php echo $student_major_error; ?><span id = "error_student_major"></span></td>
				</tr>
				<tr>
					<td >Minor:<br> <select id="student_minor" name="student_minor">
						<option value="none" >---No Secondary Program---</option>
						<option value="animation" >Animation</option>
						<option value="graphicDesign" >Graphic Design</option>
						<option value="photography" >Photography</option>
						<option value="videoProduction" >Video Production</option>
						<option value="webDevelopment" >Web Development</option>
						</select><br><span class="student_minor_error" id="student_minor_error"></span>
					</td>
					<td class="error"><?php echo $student_minor_error; ?><span id = "error_student_minor"></span></td>
				</tr>
				<tr>
					<td>Portfolio: </td>
					<td><input type="text" name="student_portfolio" id="student_portfolio" size="15" value = "<?php echo htmlspecialchars($student_portfolio); ?>" /></td>
					<td class="error"><?php echo $student_portfolio_error; ?><span id = "error_student_portfolio"></span></td>
				</tr>
				<tr>
					<td>LinkedIn:</td>
					<td><input type="text" name="student_linkedin" id="student_linkedin" size="15" value = "<?php echo htmlspecialchars($student_linkedin); ?>" /></td>
					<td class="error"><?php echo $student_linkedin_error; ?><span id = "error_student_linkedin"></span></td>
				</tr>
				<tr>
					<td>Secondary Website:</td>
					<td><input type="text" name="student_secondary" id="student_secondary" size="15" value = "<?php echo htmlspecialchars($student_secondary); ?>" /></td>
					<td class="error"><?php echo $student_secondary_error; ?><span id = "error_student_secondary"></span></td>
				</tr>
				<tr>
					<td>Hometown: </td>
					<td><input type="text" name="student_hometown" id="student_hometown" size="15" value = "<?php echo htmlspecialchars($student_hometown); ?>" /></td>
					<td class="error"><?php echo $student_hometown_error; ?><span id = "error_student_hometown"></span></td>
				</tr>
				<tr>
					<td>Career Goals: </td>
					<td><input type="text" name="student_career_goals" id="student_career_goals" size="15" value = "<?php echo htmlspecialchars($student_career_goals); ?>" /></td>
					<td class="error"><?php echo $student_career_goals_error; ?><span id = "error_student_career_goals"></span></td>
				</tr>
				<tr>
					<td>Hobbies: </td>
					<td><input type="text" name="student_hobbies" id="student_hobbies" size="15" value = "<?php echo htmlspecialchars($student_hobbies); ?>" /></td>
					<td class="error"><?php echo $student_hobbies_error; ?><span id = "error_student_hobbies"></span></td>
				</tr>
				<tr>
					<td >State:<br> <select id="student_state" name="student_state">
						<option value="none" >---No Secondary Program---</option>
						<option value="AL" >AL</option>
						<option value="AK" >AK</option>
						<option value="AZ" >AZ</option>
						<option value="AR" >AR</option>
						<option value="CA" >CA</option>
						<option value="CO" >CO</option>
						<option value="CT" >CT</option>
						<option value="DE" >DE</option>
						<option value="FL" >FL</option>
						<option value="GA" >GA</option>
						<option value="HI" >HI</option>
						<option value="ID" >ID</option>
						<option value="IL" >IL</option>
						<option value="IN" >IN</option>
						<option value="IA" >IA</option>
						<option value="KS" >KS</option>
						<option value="KY" >KY</option>
						<option value="LA" >LA</option>
						<option value="ME" >ME</option>
						<option value="MD" >MD</option>
						<option value="MA" >MA</option>
						<option value="MI" >MI</option>
						<option value="MN" >MN</option>
						<option value="MS" >MS</option>
						<option value="MO" >MO</option>
						<option value="MT" >MT</option>
						<option value="NE" >NE</option>
						<option value="NV" >NV</option>
						<option value="NH" >NH</option>
						<option value="NJ" >NJ</option>
						<option value="NM" >NM</option>
						<option value="NY" >NY</option>
						<option value="NC" >NC</option>
						<option value="ND" >ND</option>
						<option value="OH" >OH</option>
						<option value="OK" >OK</option>
						<option value="OR" >OR</option>
						<option value="PA" >PA</option>
						<option value="RI" >RI</option>
						<option value="SC" >SC</option>
						<option value="SD" >SD</option>
						<option value="TN" >TN</option>
						<option value="TX" >TX</option>
						<option value="UT" >UT</option>
						<option value="VT" >VT</option>
						<option value="VA" >VA</option>
						<option value="WA" >WA</option>
						<option value="WV" >WV</option>
						<option value="WI" >WI</option>
						<option value="WY" >WY</option>
						</select><br><span class="student_state_error" id="student_state_error"></span>
					</td>
					<td class="error"><?php echo $student_state_error; ?><span id = "error_student_state"></span></td>
				</tr>
				</table>
				<p>
					<input type="button" name="button" id="button" value="Register" />
					<input type="button" name="button2" id="button2" value="Clear Form" />
					
					<input type="submit" name="submit" id="submit" value="submit" />

				</p>
			</form>	
		
		</content>
<!--
		<content id = "sidebar">


			<a href = "kmoonpage.com">Home</a>

		</content> -->

	<content id ="footer">

	</content>
</div>
</body>

</html>
