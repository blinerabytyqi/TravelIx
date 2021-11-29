

<!doctype html>
<?php require('functions.php');?>
<html>
<head>
    <meta charset="UTF-8">

   
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Agency</title>
    
     <style>

/*
     body{
  background-color:rgba(76,121,162,255);
        
        }
*/
         body {
    background: linear-gradient(rgba(0,0,50,0.2),rgba(0,0,50,0.2)),url(backgr.jpg);
    background-size:cover;
    background-position:center;
    
}

     #thoughts{
        padding:30px;
        width:50%;
        color:white;
        word-spacing: 2px;
        letter-spacing: 1px;
        text-align: center;
         margin-left:320px;
         font-size:20px;
         
         }
         
  
         #hi {
             margin-top:60px;
             color:white;
             text-align:center;
             letter-spacing: 1px;
             word-spacing: 2px;
         }

         #shtoForma{
             margin-left:680px;
             margin-top:60px;
             font-size:20px;
             word-spacing:1px;
             letter-spacing: 1px;
             color:white;
             
             
             
         }
         
         #shtoForma input[type="text"]{
             padding:8px;
             width:40%;
             margin-left:-90px;
             margin-bottom:10px;
            
         }
         
         #shtoForma input[type="submit"]{
            
    margin-top:20px;
    margin-left:40px;
    padding: 10px 30px;
    color: #fff;
    background-color: rgba(138,167,197,255);
    border: none;
}
  #shtoForma input[type="submit"]:hover{
    background-color: white;
    color:rgba(76,121,162,255);
    cursor: pointer;
  
}
         #emri{
             margin-left:10px;
         }     
         
         #country {
             margin-left:-23px;
             
         }
        
         #country2{
             margin-left:-40px;
         }
         
         #comment{
             margin-left:20px;
             
         }
         
       
         
      
    </style>
    </head>
    
    <body>
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
        


           <?php
                if(isset($_POST['shtoKlient'])){
                    shto_Klient($_POST['fullname'], $_POST['citylive'], $_POST['citygo'], $_POST['comment']);
                }
            ?>
        
            
        
         <h1 id="hi">ADD YOUR COMMENT</h1>         
            <form method="post" id="shtoForma">
                <label for="emri" id="emri">Full Name</label><br>
                <input type="text" name="fullname" value=""><br>
                <label for="country" id="country">City/Country you live</label><br>
                <input type="text" name="citylive" value=""><br>
                <label for="country2" id="country2">City/Country you traveled to</label><br>
                <input type="text" name="citygo" value=""><br>
                <label for="comment" id="comment">Comment</label><br>
                <input type="text" name="comment" value=""><br>
                            
                              
                    <input type="submit" name="shtoKlient" value="ADD">
            </form>
            <div style="clear: both;"></div>
        
    
        <br><br><br><br><br><br><br><br><br><br><br>            
    </body></html>