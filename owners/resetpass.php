<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../styles/register.css">
   <script src="script.js"></script>
    <title>Register</title>
    <!-- <script>
    function validate(){
  var a = document.getElementById("password").value;
  var b = document.getElementById("confirm_password").value;
  var error = document.getElementById("error")
  if (a!=b) {
      error.innerHTML = "<span style='color:red;font-size:x-large'>"+
              "Passwords don`t match</span>"
      // document.location.reload(true)
     return false;
  }
}
    </script> -->
</head>
<body>
<center >
<div class="container" style="margin-top: 30px;">
    <div class="form_card">
        <div >
            <h2> REGISTER</h2>

         <form name="form" onsubmit="return checkInputs()" action="registration.php" method="post">  
                <input type="text" name="username"class="form_input" required placeholder="Username"><br>
                <input type="text" name="firstname"class="form_input" required placeholder="Firstname"><br>
                <span id="error"></span>
                <input type="email" name="email"class="form_input" required placeholder="Email"><br>
            <div class="butt1">
                <button type="submit"  id="button">Submit</button>
                <button type="reset"  id="button">Clear</button>
            </div>
        </form>
        </div>
    </div>
</div>
</center>

</body>
</html>
