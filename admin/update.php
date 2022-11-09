<?php
include "header.php";
include "../owners/config.php";

// session_start();
// error_reporting(0);
// if($_SESSION['username']!='admin'){

//     echo
//       "
//       <script>
//         alert('Not logged in as admin');
//         document.location.href = '../owners/logout.php';
//       </script>
//       ";
// }
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = '$id' ";

$data = mysqli_query($conn,$query);
// $total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
    $role = $_POST['role'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

    $query = "UPDATE users set role='$role' WHERE id = $id";

    $data = mysqli_query($conn,$query);
    if($data)
    {  echo
         "
         <script>
           alert('Data updated successfully');
           document.location.href = 'agent1.php';
         </script>
         ";
    }
    else{
        echo "Update  failed";
    }      }
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../contact.css">
	<title>Registration</title>
</head>
<body>
<center>
    <section class="Contact"  >
    <div class="container">
      
    <form action="" method="POST"  enctype="multipart/form-data" id="signup"  class="login-email">
      <fieldset>
      <div class="input-group">
		    <input type="text" value="<?php echo $result['username'];?>" placeholder="role"  name="role"  >
		</div>
        <div class="input-group">
		    <input type="text" value="<?php echo $result['role'];?>" placeholder="role"  name="role"  >
		</div>
        <div class="input-group">
		    <input type="text" value="<?php echo $result['email'];?>" placeholder="role"  name="email"  >
		</div>
        <div class="input-group">

		  	<div class="input-group">
				   <button name="submit" class="btn">Update</button>
			  </div> 
       </fieldset>
    </form>
    </div>
    </section>
</center>

	<script src="../script.js
</body>
</html>