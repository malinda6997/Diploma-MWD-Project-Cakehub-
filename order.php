<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Cake Hub</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="products.php">products</a>
      <a href="order.php">order</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-order.jpg) no-repeat">
   <h1>Order Now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Place Your Order!</h1>

   <form action="order_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>Select cake category :</span>
            <select name="category" class="box">
               <option value="Birthday Cakes">Birthday Cakes</option>
               <option value="Custom Design Cakes">Custom Design Cakes</option>
               <option value="Edible Print Cakes">Edible Print Cakes</option>
               <option value="Wedding / Anniversary Cakes ">Wedding / Anniversary Cakes </option>
               <option value="Chocolate Cakes">Chocolate Cakes</option>
               <option value="Red Velvet Cakes ">Red Velvet Cakes </option>
               <option value="Gateau Cakes">Gateau Cakes</option>
               <option value="Cheese Cakes ">Cheese Cakes </option>
               <option value="Cup Cakes ">Cup Cakes </option>
               <option value="Donuts ">Donuts </option>
               <option value="Eclairs  ">Eclairs  </option>
               <option value="Mini Cakes ">Mini Cakes</option>
            </select>
         </div>
         <div class="inputBox">
            <span>payment method :</span>
            <select name="payment" class="box">
               <option value="cash on delivery">cash on delivery</option>
               <option value="credit card">credit card</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Select Size</span>
            <select name="size" class="box">
               <option value="500g">500g</option>
               <option value="750g">750g</option>
               <option value="1Kg">1kg</option>
               <option value="1.5Kg">1.5Kg</option>
               <option value="2Kg">2Kg</option>
               <option value="3Kg">3Kg</option>
               <option value="6 packs">6 packs</option>
               <option value="12 packs">12 packs</option>
               <option value="24 packs">24 packs</option>
            </select>
         </div>
      </div>


      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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