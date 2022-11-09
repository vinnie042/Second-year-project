<?php 
include "header.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Online Rentals</title>
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/script.js"></script> 
   </head>
<body>
  <nav>
    <div class="navbar">
      <i class='bx bx-menu'></i>
      <div class="logo"><a href="#">OnlineHousing</a></div>
      <div class="nav-links">
        <div class="sidebar-logo">
          <span class="logo-name">OnlineHousing</span>
          <i class='bx bx-x' ></i>
        </div>
        <ul class="links">
          <li><a href="index.php">HOME</a></li>
          <li>
            <a href="#"><?php echo  strtoupper($_SESSION['username']) ?></a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="register.php">Update</a></li>
              <li><a href="logout.php">Logout</a></li>
               <li><a href="resetpass.php">Reset Password</a></li>
            </ul>
          </li>
          <li>
            <a href="#">ADVERTISE</a>
            <i class='bx bxs-chevron-down htmlcss-arrow arrow '></i>
            <ul class="htmlCss-sub-menu sub-menu">
              <li><a href="#">Houses</a></li>
              <li><a href="#">Apartments</a></li>
              <li><a href="#">Rooms</a></li>
              <li><a href="#">Office Space</a></li>
            </ul>
          </li>
          <li><a href="#">REGISTER PROPERTY</a></li>
          <li><a href="aboutus.php">VIEW PROPERTY</a></li>
          <li><a href="contact.php">UPDATE</a></li>
        </ul>
      </div>
      <!-- <div class="search-box">
        <i class='bx bx-search'></i>
        <div class="input-box">
          <input type="text" placeholder="Search...">
        </div>
      </div> -->
    </div>
  </nav>
  <!-- <div class="bgimage">
  </div> -->
  

</body>
</html>
