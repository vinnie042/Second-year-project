<?php 
include "header1.php";
// session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body style="margin-top: 100px;">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
</body>
</html>