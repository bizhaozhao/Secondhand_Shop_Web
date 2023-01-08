<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link https://swiperjs.com/ -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <!-- font awesome cdn link https://cdnjs.com/ -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   
    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- script file link -->
    <script src="script.js"></script>
</head>

<!-- Homepage layout and some codes refered to https://www.youtube.com/watch?v=34MBVXsDOtA&t=5s -->
<body>

  
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo"><strong>recycle me.</strong></a>

        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="shop.php">SHOP</a>
            <a href="sell.php">SELL</a>
            <a href="login_signup.php">LOGIN/SIGNUP</a>
        </nav>
    </section>
    <!-- header section ends -->

<!-- home section starts -->
<section class="home">
    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                <div class="content">
                    <span>recycle, sell, sale</span>
                    <h3>use your balance to purchase</h3>
                    <a href="shop.php" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                <div class="content">
                    <span>recycle, sell, sale</span>
                    <h3>get 50% of the sale price</h3>
                    <a href="sell.php" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                <div class="content">
                    <span>recycle, sell, sale</span>
                    <h3>black friday has arrived</h3>
                    <a href="shop.php" class="btn">read more</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- home section ends -->

<!-- services section starts -->
<section class="recycleme">
<h1 class="heading-title">recycle me</h1>
<div class="box-container">
    
    <div class="box">
        <img src="images/home-icon-1.png" alt="">
        <h3>About Us</h3>
    </div>

    <div class="box">
        <img src="images/home-icon-2.png" alt="">
        <h3>Our History</h3>
    </div>

    <div class="box">
        <img src="images/home-icon-3.png" alt="">
        <h3>Our Stores</h3>
    </div>

    <div class="box">
        <img src="images/home-icon-4.png" alt="">
        <h3>Shop Online</h3>
    </div>

    <div class="box">
        <img src="images/home-icon-5.png" alt="">
        <h3>Our Impact</h3>
    </div>

    <div class="box">
        <img src="images/home-icon-6.png" alt="">
        <h3>Donation Program</h3>
    </div>
</div>
</section>

<!-- services section ends -->

<!-- footer section starts -->
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="shop.php"><i class="fas fa-angle-right"></i>shop</a>
            <a href="sell.php"><i class="fas fa-angle-right"></i>sell</a>
            <a href="login_signup.php"><i class="fas fa-angle-right"></i>login/signup</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>stores</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>work with us</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i>+64-111-222</a>
            <a href="#"><i class="fas fa-envelope"></i>recycle@me.com</a>
            <a href="#"><i class="fas fa-map"></i>Australia</a>
            <a href="#"><i class="fas fa-map"></i>NewZealand</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i>facebook</a> 
            <a href="#"><i class="fab fa-twitter"></i>twitter</a> 
            <a href="#"><i class="fab fa-instagram"></i>instagram</a> 
        </div>
    </div>

    <div class="credit">created by <span>Sarah </span> | refered from mr.web designer & recycle boutique</div>
</section>


<!-- footer section ends -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="script.js"></script>

</body>
</html>