<!doctype html>
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
/* Slideshow container */
.slideshow-container {
  height:50%;
    width:50%;
  position: relative;
  margin-top:60px;
    margin-left:570px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin :0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;

}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    
    
        #sideparagraph {
            margin-top:-530px;
            margin-bottom:263px;
            color:white;
            font-size:18px;
            word-spacing: 2px;
            letter-spacing: 2px;
            margin-left:200px;
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
        
   
        
       
        <div class="slideshow-container">

            
        <div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="fifth.jpg" style="width:100%; ">
  <div class="text">The beautiful medieval German town of Rothenburg ob der Tauber.
      </div>
</div>
    
            <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="third.jpg" style="width:100%">
  <div class="text">Mada’in Saleh: Spectacular Rock-Cut Tombs And Monuments Reflect Great Skills Of Nabataean Builders</div>
</div>
            
    <div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="first.jpg" style="width:100%; ">
  <div class="text">Prambanan Temple Compounds, Indonesia</div>
</div>        
            

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center; margin-left:340px">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

         
        <p id="sideparagraph">
        In every country, there is a city <br><br>that attracts people’s attentions.<br><br>
        It could be a beautiful city or bear<br><br> a great history displayed in its <br><br>
        fascinating buildings or fabulous<br><br> museums. Some people could have <br><br>memories
        to share with this city. <br><br>Others could sense that this city is<br><br> their place to
        gather with their lovers <br><br> and friends.
        On the right, we are<br><br> showing top 3 cities that you can <br><br>visit and make 
        unforgettable memories!
        </p>    
        <br><br>
        
    </body>
</html>
