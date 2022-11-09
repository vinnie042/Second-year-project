<?php

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

include "../owners/config.php";
$id = $_GET['id'];

$query = "DELETE FROM users WHERE users.id = '$id' ";
$data = mysqli_query($conn,$query);

if($data){
    echo
    "
    <script>
      alert('Deleted successfully');
      document.location.href = 'agent1.php';
    </script>
    ";
     
}
else{
    echo "failed!";
}
?>