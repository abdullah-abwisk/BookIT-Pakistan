<?php
	require_once('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/stylea.css">
		<title>Book-it SignIn</title>

	</head>
	
	<body>
	
		<div>
			<?php	
			
				if(isset($_POST['create']))
				{
					if(empty($_POST['email'] || $_POST['password']))
					{
						$message = "Please fill in all credentials";
					}
					else
					{	
						$email = $_POST['email'];
						$password = $_POST['password'];
						
						$sql = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password' ";
						$statement = $db->prepare($sql);	
						$statement->execute(
											array(
													'Email' => $email,
													'password' => $password
												 )
											);

						$count = $statement->rowCount();
						if($count>0)
						{
							header("location:home.html");
						}
						else
						{
							echo "<div class='box2'>" . "<b>Incorrect email or password!<br>". "Please try again.</b>" . "</div>";
						}
					}
				}
			?>
		</div>
			<div class="box">
				<form action="login.php" method="post">
					<div class="container">
						<div class="inputs">
							<h1>Login Form</h1>
							<p>Fill all the boxes</p>
										
							<p>
							<label for="email"><b>E-mail Address</b></label>
							<input type="e-mail" name="email" placeholder="Input e-mail" required>
							</p>
											
							<p>
							<label for="password"><b>Password</b></label>
							<input type="password" name="password" placeholder="Input Password" required>
							</p>

							
							<input type="submit" name="create" value="Login">
						</div>
					</div>
				</form>
			</div>
	
	</body>
	
</html>