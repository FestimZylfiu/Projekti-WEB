<!DOCTYPE html>
<html lang="en">
<head>


   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

     <!--Hederi fillon ketu-->

     <header class="header">

        <div class="header-1">
    
            <a href="../index.php" class="logo"><img src="../img/plazalogo.png" id="LOGO"></a>
    
                <form action="" class="search-form">
    
                    <input type="search" name="" placeholder="Kërko këtu..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
    
              <div class="icons">
    
                <div id="search-button" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                  <a href="#" class="fas fa-shopping-cart"></a>
                <div id="login-button" class="fas fa-user"></div>
                
    
    
    
    
    
              </div>  
            
    
        </div>
        <div class="header-2">

            <nav class="navbar">
                <a href="../index.php">Home</a>
                <a href="aboutus.php">About Us</a>
                <a href="#arrivals">Arrivals</a>
                <a href="Produktet.php">Products</a>
				<a href="Contact.php">Contact</a>

    
    
            </nav>
    
        </div>
    
    </header>
    
    
    
        <!--Hederi mbaron ketu -->
    
           <!---bottom navbar-->
           
           
          
    <nav class="bottom-navbar">
        <a href="index.php" class="fas fa-home"></a>
        <a href="featured.php" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="Contact.php" class="fa-regular fa-address-book"></a>


    </nav>
    
    
        <!--login form-->

    <div class="login-form-container">

      <div id="close-login-button" class="fas fa-times"></div>

      <form action="">
          <h3>Kycuni</h3>
          <span>Email i përdoruesit:</span>
          <input type="email" name="" class="box" placeholder="Shtypni emailin:" id="email">
          
          <span>password</span>
          <input type="password" name="" class="box" placeholder="Shtypni fjalëkalimin:" id="password">
          
          <div class="checkbox">
              <input type="checkbox" name="" id="remember-me">
              <label for="remember-me">Më mbaj në mend!</label>
          </div>

          <input type="submit" value="Kycu" class="button" onclick="validoLogIn()">
          <p>Harrove fjalëkalimin? <a href="#">Shtyp këtu</a></p>
          <p>Nuk keni llogari ?  <a href="register.php">Krijoni një llogari të re</a></p>

      </form>

  </div>
  


<div class="container">

   

   <div class="products-container">   
		<!-- include section arrival-->
		<?php include ("arrivalsform.php");  ?>
   </div>

</div>

<div class="products-preview">

   <div class="preview" data-target="p-1">
      <i class="fas fa-times"></i>
      <img src="Fotot/pic1-removebg-preview.png" alt="">
      <h3>Contour Pencil</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <span>( 150 )</span>
      </div>

      <div class="price">2.00€</div>
      <div class="buttons">
         <a href="#" class="buy">Blej tani</a>
         <a href="#" class="cart">Shto në shportë</a>
      </div>
   </div>

   <div class="preview" data-target="p-2">
      <i class="fas fa-times"></i>
      <img src="Fotot/pic2-removebg-preview.png" alt="">
      <h3>Eye Mask</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 50 )</span>
      </div>
      <div class="price">3.50€</div>
      <div class="buttons">
         <a href="#" class="buy">Blej tani</a>
         <a href="#" class="cart">Shto në shportë</a>
      </div>
   </div>

   <div class="preview" data-target="p-3">
      <i class="fas fa-times"></i>
      <img src="Fotot/pic3-removebg-preview.png" alt="">
      <h3>Red Lipstics</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
      
      <div class="price">7.50€</div>
      <div class="buttons">
         <a href="#" class="buy">Blej tani</a>
         <a href="#" class="cart">Shto në shportë</a>
      </div>
   </div>

   <div class="preview" data-target="p-4">
      <i class="fas fa-times"></i>
      <img src="Fotot/pic4-removebg-preview.png" alt="">
      <h3>Brown Lipstics</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 250 )</span>
      </div>
     
      <div class="price">5.00€</div>
      <div class="buttons">
         <a href="#" class="buy">Blej tani</a>
         <a href="#" class="cart">Shto në shportë</a>
      </div>
   </div>

   <div class="preview" data-target="p-5">
      <i class="fas fa-times"></i>
      <img src="Fotot/pic5-removebg-preview.png" alt="">
      <h3>Mascara</h3>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
         <span>( 80 )</span>
      </div>
      
      <div class="price">12.00€</div>
      <div class="buttons">
         <a href="#" class="buy">Blej tani</a>
         <a href="#" class="cart">Shto në shportë</a>
      </div>
   </div>

 
   </div>

</div>



 <!-- footer section starts  -->
    
 <section class="footer">
    
    <div class="box-container">

        <div class="box">
            <h3>Lokacionet tona</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Prizren - Abi Carshia</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i>Prishtinë - Prishtina Mall (SOON) </a>
        </div>

        <div class="box">
            <h3>Qasje të shpejtë</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i>Home</a>
            <a href="#"> <i class="fas fa-arrow-right"></i>Feature</a>
            <a href="#"> <i class="fas fa-arrow-right"></i>Arrivals</a>
            <a href="#"> <i class="fas fa-arrow-right"></i>Contact</a>
            
        </div>

        <div class="box">
            <h3>Ekstra linqe</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i>Info të llogarisë</a>
            <a href="#"> <i class="fas fa-arrow-right"></i>Produktet e porositura</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Privacy Policy </a>
        </div>

        <div class="box">
            <h3>Contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 108 222</a>
            <a href="#"> <i class="fas fa-envelope"></i>plazacosmetica@gmail.com </a>
            <img src="fotot/lokacioni.jpg" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="https://www.facebook.com/plazacosmetic" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/plazacosmetica/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> Created by: <span>Festim & Shaqir</span> | All rights reserved! </div>

</section>

<!-- footer section ends -->

<script src="script2.js"></script>
<script src="script.js"></script>
</body>
</html>
