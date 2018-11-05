<!DOCTYPE HTML> 
<html>
	<head>
		<style>
			.error {color: #FF0000;}
		</style>
	</head>
	
	<body>
		<?php
			// define variables and set to empty values
			$unameErr = $fnameErr  = $emailErr = $genderErr = $passErr = "";
			$uname = $fname = $email = $gender = $pass = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["uname"])) {
				$unameErr = "Name is required";
			  } else {
				$uname = test_input($_POST["uname"]);
				// check if name only contains letters and whitespace
				if (!preg_match("/^[a-zA-Z][a-zA-Z0-9]*$/",$uname)) {
				  $unameErr = "Only letters and white space allowed";
				}
			  }
			  
			  if (empty($_POST["fname"])) {
				$fnameErr = "Email is required";
			  } else {
				$fname = test_input($_POST["fname"]);
				// check if e-mail address is well-formed
				if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
				  $fnameErr = "Only letters and white space allowed";
				}
			  }
			  
			  if (empty($_POST["email"])) {
				$emailErr = "Email is required";
			  } else {
				$email = test_input($_POST["email"]);
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				  $emailErr = "Invalid email format";
				}
			  }

			  if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
			  } else {
				$gender = test_input($_POST["gender"]);
			  }
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
		?>
	
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			Username: <input type="text" name="uname" value="<?php echo $uname;?>">
					  <span class="error">* <?php echo $unameErr;?></span><br>
					  
			Full Name: <input type="text" name="fname" value="<?php echo $fname;?>">
					   <span class="error">* <?php echo $fnameErr;?></span><br>
					   
			Email: <input type="email" name="email" value="<?php echo $email;?>">
				   <span class="error">* <?php echo $emailErr;?></span><br>
				   
			Phone: <input type="text" name="ph"><br>
			
			Password: <input type="password" name="pass" value="<?php echo $pass;?>">
					  <span class="error">* <?php echo $passErr;?></span><br>
					  
			Confirm Password: <input type="password" name="cpw"><br>
			
			ender:
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
				  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other 
				  
				  <span class="error">* <?php echo $genderErr;?></span>
				  
			Education: <input type="checkbox" name="edu[]" value="SSC">SSC
					   <input type="checkbox" name="edu[]" value="HSC">HSC
					   <input type="checkbox" name="edu[]" value="BSc">BSc
					   <input type="checkbox" name="edu[]" value="MSc">MSc <br/>
					   
					   <input type="submit" value="Submit">
		</form>
	</body>

</html>