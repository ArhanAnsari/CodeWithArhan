<!DOCTYPE html>
<html>
<head>
   <title>CodeWithArhan-Signup Page</title>
   <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
  <div class="login-wrapper">
    <form class="login-form">
        <h2>Sign Up</h2>
        <div class="input-group">
		 <?php 
    
    include("php/config.php");
    if (isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        //verifying unique emails

        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

        if (mysqli_num_rows($verify_query) != 0) {
            echo "<div class='message'>
                        <p>This email is used,Try another One Please</p>
                        </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }
        else{

            mysqli_query($con, "INSERT INTO users(Username, Email, Age, Password) VALUES('$username','$email','$age','$password')") or die("Error Occured");
            echo "<div class='message'>
            <p>Registeration Successful</p>
            </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
        }
    }else{
    ?>
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
	<div class="input-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="input-group">
          <label for="password">Enter Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="input-group">
          <label for="password">Confirm Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="cta">Register</button>
    </form>
  </div>
  <?php } ?>
</body>
</html>
