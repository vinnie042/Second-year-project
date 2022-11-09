<?php
include "header.php";
// include "footer.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Online Rentals</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="jsa.js"></script>
   <script src="search.js"></script>
  </head>
<body>
  <div class="imgbac">
      <div class="bgimage">
        <div class="overlay">
       <center>
              <div class="text-display" style="margin-top: 80px;margin-left:20%;margin-right:20%;color:white;font-weight:100; position:absolute; margin-top:50px; font-size:x-large"> 
              <i><b>Looking for a house, office space or an apartment to buy or rent?</b> <br> We offer the best housing plans. <br><br><b></b> <a href="#Search" style="text-decoration: none;color:blue"> Search here</a> for the best housing plans.<br><br> <b>Are you a property owner interested in seeling,leasing or renting your property?</b><br><br> <a href="owners/register.php" style="text-decoration: none;color:blue">Register here</a> as a property owner to market your property<br> Lorem ipsum dolor sit amet consectetur adipisistinctio dignissimos fuga. Beatae reiciendis quia.</i>
              </div> 
        </center>
        </div>
      </div>
  </div>
  <center>
    <p id="about-us"></p>
  <section id="about-us" style="margin-top: 50px;">
        <div class="container">
            <h3 style="margin-bottom: 50px;">About Us</h3>
            <center>
            <p>
           
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus tempore architecto facilis ipsum distinctio iusto, odio consequuntur, illum harum ut, corrupti sunt soluta. Molestiae molestias aliquid unde ea repellat similique?
                met consectetur adipisicing elit. Minima iste dolores tempore debitis officiis praesentium placeat, magnam dolor. Accusamus reprehenderit qui consequatur aut distinctio dolorem veniam perferendis molestiae ullam quo!
            </p>
            </center>
        </div>
    </section>

    <h1 id="Search"></h1>

    <section class="Contact"  style="margin-bottom: 50px;border-radius:20px;" >
      <div class="container">
            <center><h3 style="margin-bottom: 20px;"> Search here</h3></center>
            <p style="margin-bottom: 20px;">
                Fill any of the fields below
            </p>
            <form autocomplete="off" action="filter2.php" method="POST" >
            <fieldset>
                <input type="text" id="type" name="protype" style="width: 50%;" list="stats" placeholder="Property type">
                  <datalist id="stats" >
                      <option value="House">House</option>           
                      <option value="Apartments">Apartments</option>
                      <option value="Room">Room</option>
                      <option value="Office space">Office space</option>
                    </datalist>
                  <input list="stats1"  name="status" placeholder="Property status" style="width: 50%;" >
                    <datalist id="stats1" >
                            <option value="Available for sale">Available for sale</option>           
                            <option value="Available for rent">Available for rent</option>
                            <option value="Available for sale/rent">Available for sale/rent</option>
                    </datalist><br>
                  <input type="text" name="city" style="width: 50%;" id="city" placeholder="city e.g., Nairobi" >
                  <input type="text" name="location" style="width: 50%;" id="location" placeholder="location e.g., Ngara" >
                 <input type="text" name="description" style="width: 50%;" id="description" placeholder="e.g., a 2-bedroom house" >
                 <input type="text" name="price" style="width: 50%;" id="price" placeholder="Price" >
                 <button style="width: 50%;" type="submit" name="submit" >General Search</button>
                <button style="margin-top: 20px;" type="submit" name="submit" formaction="specificsearch.php" >Specific Search</button>
            </fieldset>
            </form>
      </div>
    </section>
     
    <h1 id="Contact"></h1>
      <section class="Contact"  style="margin-bottom: 50px;" >
      <div class="container">
            <center><h3  style="margin-bottom: 20px;">Contact Us</h3></center>
            <p style="margin-bottom: 20px;">
                Please send any comments, feedback or queries in the form below
            </p>
            <form action="https://formspree.io/f/mlezbzwq" method="POST">
            <fieldset>
                <input type="text" name="name" style="width: 100%;" placeholder="Enter your name" id="">
                <input type="email" name="_replyto" style="width: 100%;"  placeholder="Enter your email" id="">
                <textarea name="message" id="" placeholder="Enter message" style="width: 100%;" cols="10" rows="10"></textarea>
                <button style="width: 100%;">Send</button>
                <input type="hidden" name="_confirmation" value="Thank you for contacting Us!">
            </fieldset>
            </form>
      </div>
    </section>

    <div class="footer">
      <div class="footer1">
          <p>Created by @user01jr twitter</p>
          &copy;2022 Second Year project
          <!-- <button><a href="header.php"></a></button> -->
      </div>
    </div>
  </center>
</body>
</html>
