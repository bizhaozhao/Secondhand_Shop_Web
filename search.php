<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>

    <!-- font awesome cdn link https://cdnjs.com/ -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   
    <!-- custom css file link -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- script file link -->
    <script src="script.js"></script>
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo"><strong>recycle me.</strong></a>

        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="shop.php">SHOP</a>
            <a href="sell.php">SELL</a>
            <a href="login_signup.php">LOGIN/SIGNUP</a>
            <a href="#">USER</a>
        </nav>
    </section>
    <!-- header section ends -->
        
    <div class="heading" style="background:url(images/header-bg.png) no-repeat">
        <h1>Shop</h1>
    </div>

    <!-- shop section starts -->
    <section class="shop">  

    <!-- filter bar starts -->
    <div class="filter">
        <ul>
            <li><a href="#">Type</a></li>
            <li><a href="#">Catagory</a></li>
            <li><a href="#">Colour</a></li>
            <li><a href="#">Size</a></li>
            <li><a href="#">Brand</a></li>
            <li><a href="#">Location</a></li>
            <li><a href="#">SortBy</a></li>
        </ul>
    </div>
    <!-- filter bar ends -->

    <!-- search input starts -->
    <div>
    <form action="search.php" method="post" class="search">
        <div>
            <span class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></span>
            <input type="text" placeholder="Search all of Recycle Me" name="search_info">
            <input class="btn"  type="submit" id="go-btn" value="Go" name="go">
        </div>
    </form>
    </div>
    <!-- search input ends -->
  
    <div class="goods-container">
        <?php
            require 'connect_db.php';

            //User dose not input anything, will display all of the goods items
            if(empty($_POST['search_info'])){
                $sql = "SELECT * FROM goodstable";
                $result = mysqli_query($connection, $sql);
            //User inputs something, will search by every column
            }else{
                $sel = $_POST["search_info"];
                $sql = "SELECT * FROM goodstable WHERE 
                brand like '%$sel%' or
                material like '%$sel%' or
                size like '%$sel%' or
                price like '%$sel%'";
                $result = mysqli_query($connection, $sql);
            }

            while($row = mysqli_fetch_array($result))
            {
            ?>
                  
            <span class="each-item">
                <ul>
                    <li>
                    <img src="<?php echo($row[4]);?>" alt="">
                    <h3><?php echo($row[0]);?></h3>
                    <h3><?php echo($row[1]);?></h3>
                    <div class="size_box">
                        <h3>Size</h3>
                        <span><?php echo($row[2]);?></span>
                    </div>
                    <div class="price_box">
                        <h3>Price</h3>
                        <span><?php echo($row[3]);?></span>
                    </div>
                    <a href="#" class="btn">Buy Now</a>
                    </li>
                </ul>
            </span> 
        <?php   
            }
        ?>
    </div>
    
</section>
<!-- shop section ends -->

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
            <a href="#"><i class="fas fa-phone"></i>+64-111-222-3333</a>
            <a href="#"><i class="fas fa-phone"></i>+64-444-555-6666</a>
            <a href="#"><i class="fas fa-envelope"></i>recycle@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i>Australia & NewZealand</a>
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

</body>
</html>