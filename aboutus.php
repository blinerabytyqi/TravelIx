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

     body{
  background-color:rgba(76,121,162,255);
  }

         h3 {
        width:50%;
        color:white;
        word-spacing: 2px;
        letter-spacing: 2px;
        text-align: center;
         margin-left:345px;
        font-size:36px;
         margin-top:30px;
         
             
         }
     #thoughts{
        padding:30px;
        width:50%;
        color:white;
        word-spacing: 2px;
        letter-spacing: 2px;
        text-align: center;
         margin-left:320px;
         font-size:20px;
         margin-top:15px;
         
         }
         
  

   #klientet_table {
    margin-top:20px;
    margin-left:150px;
    width: 80%;
    color:white;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    text-align:center;
    
}
         
         #klientet_table th{
             background-color:white;
             color:rgba(138,167,197,255);
         }
#klientet_table td,
#klientet_table th {
  border: 1px solid white;
  padding: 8px;
    letter-spacing: 1px;
    word-spacing:1px;
}
        
       
         
         #shto_klient{
  margin-left:1243px;
  margin-top:20px;
  padding: 10px 30px;
  color: #fff;             
  background-color: rgba(138,167,197,255);
  border: none;
}
#shto_klient:hover{
  background-color: white;
    color:rgba(76,121,162,255);
  transform: scale(1.1);
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
                    <li><a href="#"> About Us </a></li>
                    <li><a href="#"> Offers </a></li>
                    <li><a href="#"> News </a></li>
                    <li><a href="#">Contact </a></li>
               
                </ul>
           </div>
          <i class="fas fa-search" style='color:white';></i>
        </section> 
       </header>
        <h3>Reviews from Travelers Like You</h3>
        
        <p id="thoughts"> Down below are some thoughts of the people that got help from our agency and had the most remarkable memories! 
         If you are part of our family, add your comment and thoughts!</p>
        
        
        <table id="klientet_table" cellspacing="10">
            <thead>
                <tr>
                    <th> Full Name </th>
                    <th> City/Country you live</th>
                    <th>City/Country you traveled to</th>
                    <th>Your comment about us</th>
                
                </tr>
            </thead>
            <tbody>
        <?php
                
            $klientet=merrKlientet();
                while($klient=mysqli_fetch_assoc($klientet)){
                    ?>
                
                <tr>
                <td><?php echo $klient['fullname'];?></td>
                <td><?php echo $klient['cityLiving'];?></td>
                <td><?php echo $klient['cityGoing'];?></td>
                <td><?php echo $klient['comment'];?></td>
                </tr>
                
                <?php
                
                }
                
            
                ?>
                    
        </table>
          <button onclick="window.location.href='shto_klient.php'" id="shto_klient"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>
        
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
        
    </body></html>