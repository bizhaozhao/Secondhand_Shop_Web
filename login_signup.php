<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_signup</title>

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
       
        </nav>

        <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
    </section>
    
<!-- header section ends -->
<div class="heading" id="login-header" style="background:url(images/header-bg.png) no-repeat">
    <h1 >Sign In</h1>
</div>

<!-- signup section starts -->
<section class="register" id="signup-window">
    <form action="registercheck.php" method="post" class="signup">

    <h1>Register Your Account</h1>
    <div class="fill_info">

        <div class="inputBox">
            <span id="info">
                <p><strong>If like to use a different email instead, contact us before
                     logging in so we can link your account.</strong></p>
            </span>
        </div>
        <div class="inputBox">
            <span>username :</span>
            <input type="text" placeholder="enter your name" name="username">
        </div>
        <div class="inputBox">
            <span>password :</span>
            <input type="password" placeholder="enter your password" name="password">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="text" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <input type="submit" id="submit-btn" value="Create Account" class="btn" name="send">
        </div>   
        <div class="inputBox">
            <a href="#" id="signin-btn" onClick="goLogin()" onClick="changeHeaderToLogin()"><strong>Sign In</strong></a>
        </div>   
    </div>
    </form>
</section>

<!-- signup section ends -->

<!-- login section starts -->

<section class="login" id="login-window">
    <form action="logincheck.php" method="post" class="signin">

    <h1>Please Log In</h1>
    <div class="fill_info">

        <div class="inputBox">
            <span id="info">
                <p><strong>If like to use a different email instead, contact us before
                     logging in so we can link your account.</strong></p>
            </span>
        </div>
        <div class="inputBox">
            <span>username :</span>
            <input type="text" placeholder="enter your name" name="username">
        </div>
        <div class="inputBox">
            <span>password :</span>
            <input type="password" placeholder="enter your password" name="password">
        </div>
        <div class="inputBox">
            <input type="submit" id="submit-btn1" value="Next" class="btn" name="send">
        </div>   
        <div class="inputBox">
            <a href="#" id="signup-btn" onClick="goRegister()" onClick="changeHeaderToSignup()"><strong>Register an Account</strong></a>
        </div>  
        <div class="inputBox">
            <a id="issue">Having issues signing in?</a><br>
            <a href="#" id="emailus">Email us <u>****@recycleme.co.nz</u></a>
        </div> 
        <!-- <div class="inputBox">
            <a href="#" id="emailus">Email us ****@recycleme.co.nz</a>
        </div>  -->
    </div>
    </form>
</section>

<!-- login section ends -->

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

    <div class="credit">created by <span>Sarah </span> | imitated from mr.web designer & recycle boutique</div>
</section>
<!-- footer section ends -->

</body>
</html>