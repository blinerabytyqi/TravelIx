<!DOCTYPE html>
<?php require('functions.php');?>

   
<html>
<head>
    <meta charset="UTF-8">

    <link href="3-theme.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Agency</title>
    

    </head>
    
   
    <header>
        <div class="container">
        
        <h4 class="h5">+43 232 2323 45894</h4>
        
            <div class="social-media">
            <div>
                <a href="#"><i class="fab fa-facebook" style='color:white;'></i></a>
            </div>
                <div>
                <a href="#"><i class="fab fa-instagram" style='color:white;'></i></a></div> 
            <div>
                <a href="#"><i class="fab fa-twitter" style='color:white;'></i></a>
            </div>
                <div>
                <a href="#"><i class="fab fa-youtube" style='color:white;'></i></a></div> 
             </div>
        
           
        </div>
        
        <p class="loginregister"><a href="login.php" style="color:white; text-decoration: none"><b>LogIn</b></a> </p>
        
       <section class="section1">
        
          <i class="fas fa-map-marker-alt" style='color:white; font-size:36px';>TRAVELIX</i> 
           <div class="navbar">
            <ul class="nav-items">
                    <li><a href="index.php">Home </a></li>
                    <li><a href="aboutus.php"> About Us </a></li>
                    <li><a href="#"> Offers </a></li>
                    <li><a href="#"> News </a></li>
                    <li><a href="#">Contact </a></li>
               
                </ul>
           </div>
          <i class="fas fa-search" style='color:white';></i>
        </section> 
       </header>
      
      
      
<!--  --------------------    -->
  
   <body>  
   <?php
                if(isset($_POST['shtoRezervim'])){
                    shto_Rezervim($_POST['name'], $_POST['email'], $_POST['tel'], $_POST['notes'], $_POST['data']);
                }
            ?>
        

   
    <h1 id="rezervimi">RESERVATION</h1>
    <form id="resForm" method="post" target="_self">
      <label for="res_name">Full Name</label>
      <input type="text" required name="name" />

      <label for="res_email">Email</label>
      <input type="email" required name="email" />

      <label for="res_tel">Telephone Number</label>
      <input type="text" required name="tel" />

      <label for="res_notes">Destination</label>
      <input type="text" name="notes" />

      <?php
 
     
      $mindate = date("Y-m-d");
      ?>
      <label>Reservation Date</label>
      <input type="date" required id="res_date" name="data"
             min="<?=$mindate?>">

      <label>Reservation Slot</label>
      <select name="slot">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
      </select>

      <input type="submit" value="Submit" name="shtoRezervim"/>
      </form>
       <?php if (count($_POST)>0) echo  '<div id="form-submit-alert" style="color:white; margin-left:630px; background-color:rgba(59,106,152,0.9); width:15%; padding-left:60px; padding-top:10px; padding-bottom:10px "> RESERVATION SAVED! </div>'?>
 <br><br><br><br>
    </body>
</html>
