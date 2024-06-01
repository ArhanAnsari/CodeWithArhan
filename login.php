<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>CodeWithArhan-Login Page</title>
	<link rel="stylesheet" type="text/css" href="login.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
	<div class="login-wrapper">
		<form class="login-form">
			<h2>Log In</h2>
			<div class="input-group">
	<?php 
        
          include("php/config.php");
          if(isset($_POST['submit'])){
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $password = mysqli_real_escape_string($con,$_POST['password']);

            $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
            $row = mysqli_fetch_assoc($result);
            
            if(is_array($row) && !empty($row)){
                $_SESSION['valid'] = $row['Email'];
                $_SESSION['useranme'] = $row['Username'];
                $_SESSION['age'] = $row['Age'];
                $_SESSION['id'] = $row['Id'];
            }else{
                echo "<div class='message'>
                  <p>Wrong Username or Password</p>
                    </div> <br>";
                echo "<a href='login.php'><button class='btn'>Go Back</button>";

            }
            if(isset($_SESSION['valid'])){
                header("Location: home.php");
            }
          }else{
        ?>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required>
			</div>
			<div class="input-group">
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required>
			</div>
			<button type="submit" class="cta">Log In</button>
		</form>
	</div>
	<?php } ?>
</body>

</html>