<?php
// Initialize variables to avoid undefined variable errors
$Email = "";
$Password = "";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Drop | Log In</title>
    <!-- Link To CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- Navbar -->
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="index.html" class="logo"><img src="img/logo.jpg">House Drop</a>

            <!-- Log In Button -->
            <a href="http://localhost:3000/RENTAL%20HOUSE%20app/sign-up.php" class="btn">Sign Up</a>
        </div>
    </header>
    <!-- Log In -->
    <div class="login container">
        <div class="login-container">
            <h2>Login To Continue</h2>
            <p>Log in with your data that you entered <br>during your registration</p>
            <!-- Login Form -->
            <form action="login_process.php" method="post">
                <span>Enter your email address</span>
                <input type="email" name="email" id="email" placeholder="yourmail@gmail.com" required>
                <span>Enter your password</span>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="submit" value="Log In" class="button">
                <a href="#">Forget Password?</a>
            </form>
            <a href="http://localhost:3000/RENTAL%20HOUSE%20app/sign-up.php" class="btn">Sign up now</a>
        </div>
        <!-- Log In Image -->
        <div class="login-image">
            <img src="img/login.png" alt="">
        </div>
    </div>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2> <img src="img/logo.jpg" style="height: 100px; width: 175px;"> <br>House Drop</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#">Agency</a>
                <a href="#">Building</a>
                <a href="#">Rates</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Mumbai</a>
                <a href="#">Palghar</a>
                <a href="#">Dahanu</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">Toll Free Number : 1800 002 579</a>
                <a href="#">pokemon.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; House Drop - All Right Reserved</p>
    </div>
</body>
</html>
