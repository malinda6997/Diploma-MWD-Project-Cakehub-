<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section start  -->

<section class="header">

   <a href="home.php" class="logo">Cake Hub</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="products.php">Products</a>
      <a href="order.php">Order</a>
      
         <button class="button2"> <a href="login.php"> LOGOUT </a> </button>
      
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section end -->

<!-- home section start  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/2150734894.jpg) no-repeat">
            <div class="content">
               <h3>cakes for just about any occasion</h3>
               <a href="products.php" class="btn">order now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-002.jpg) no-repeat">
            <div class="content">
               <h3>Make it, bake it, buy it</h3>
               <a href="products.php" class="btn">order now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-003.jpg) no-repeat">
            <div class="content">
               <h3>Your bite of heaven</h3>
               <a href="products.php" class="btn">order now</a>
            </div>
         </div>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/cod.png" alt="">
         <h3>Cash On Delivey</h3>
      </div>

      <div class="box">
         <img src="images/24-7.png" alt="">
         <h3>24 / 7 Customer Service</h3>
      </div>

      <div class="box">
         <img src="images/cs.png" alt="">
         <h3>Customized Service</h3>
      </div>

      <div class="box">
         <img src="images/afp.png" alt="">
         <h3>Affordable Price</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/2150727568.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>We are going to launch a cake shop web app. From this web app, a customer can order any type of cakes and any sweets items as their choices.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our products </h1>

   <div class="box-container">

   <!-- 01  -->
   <div class="box">
         <div class="image">
            <img src="images/bd01.jpg" alt="">
         </div>
         <div class="content">
            <h3>Birthday Cakes</h3>
            <p>1kg - Rs.3500 <br> 1.5Kg - Rs.4000 <br> 2Kg - Rs.4500</p>
            <a href="order.php" class="btn">order now</a>
         </div>
      </div>
<!-- 02 -->
      <div class="box">
         <div class="image">
            <img src="images/cd.jpg" alt="">
         </div>
         <div class="content">
            <h3>Custom Design Cakes</h3>
            <p>1kg - Rs.3500 <br> 1.5Kg - Rs.4200 <br> 2Kg - Rs.5000</p>
            <a href="order.php" class="btn">order now</a>
         </div>
      </div>
<!-- 03  -->
      <div class="box">
         <div class="image">
            <img src="images/ed.jpg" alt="">
         </div>
         <div class="content">
            <h3>Edible Print Cakes </h3>
            <p>1kg - Rs.3500 <br> 1.5Kg - Rs.4200 <br> 2Kg - Rs.5000</p>
            <a href="order.php" class="btn">order now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="products.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->




<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="products.php"> <i class="fas fa-angle-right"></i> products</a>
         <a href="order.php"> <i class="fas fa-angle-right"></i> order</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +94 70 2429 208 </a>
         <a href="#"> <i class="fas fa-phone"></i> +94 70 2429 208 </a>
         <a href="#"> <i class="fas fa-envelope"></i> thanuja@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Sri Lanka </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Thanuja</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>