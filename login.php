<?php 

include 'config.php';
include "header.php";

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/register.css">
   <!-- <script src="script.js"></script> -->
    <title>Login</title>
</head>
<body>
<center >
<div class="container" style="margin-top: 30px;">
    <div class="form_card1">
        <div >
        <h2 style=" color: #111;font-weight: 200;font-size: xx-large;"> LOGIN</h2>
         <form name="form" action="" method="post">  
                <input type="text" name="username"class="form_input1" required placeholder="Username"><br>
                <input type="password" name="password"class="form_input" required id="password" placeholder="Password"><br>
                <span id="error"></span>
            <div class="butt1">
                <button type="submit"  id="button">Login</button>
                <button type="reset"  id="button">Clear</button>
                <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
            </div>
        </form>
        </div>
    </div>
</div>
</center>

</body>
</html> 
