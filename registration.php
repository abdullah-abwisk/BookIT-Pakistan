<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>Book-it SignUp</title>

	</head>
	
	<body>
	
			<?php	
				if (isset($_POST['submit']))
				{
					$fname = $_POST['firstname1'];
					$lname = $_POST['lastname1'];
					$e = $_POST['email1'];
					$Pno = $_POST['Phoneno1'];
					$pwd= $_POST['password1'];
					
					$sql = "INSERT INTO users(FirstName,LastName,Email,PhoneNo,Password) VALUES ('$fname', '$lname','$e','$Pno','$pwd')";
					$db->exec($sql);	
					header("location:login.php");
				}
					
			?>
			<div class="box">
				<form action="registration.php" method="post">
					<div class="container">
						<div class="inputs">
							<h1>Registration Form</h1>
							<p>Fill all the boxes</p>
							
							<p>
							<label for="firstname1"><b>First Name</b></label>
							<input type="text" name="firstname1" placeholder="Input First Name" required>
							</p>
							
							<p>
							<label for="lastname1"><b>Last Name</b></label>
							<input type="text" name="lastname1" placeholder="Input Last Name" required>
							</p>
							
							<p>
							<label for="email1"><b>E-mail Address</b></label>
							<input type="e-mail" name="email1" placeholder="Input e-mail" required>
							</p>
							
							<p>
							<label for="Phoneno1"><b>Phone No.</b></label>
							<input type="text" name="Phoneno1" placeholder="Input Phone No." required>
							</p>
							
							<p>
							<label for="password1"><b>Password</b></label>
							<input type="password" name="password1" placeholder="Input Password" required>
							</p>
							
							<p>
							<label for="cpassword1"><b>Confirm Password</b></label>
							<input type="password" name="cpassword1" placeholder="Input Password" required>
							</p>
							
							<input type="submit" name="submit" value="SignUp" >
							
						</div>
					</div>
				</form>
			</div>
	
	</body>
	
</html>