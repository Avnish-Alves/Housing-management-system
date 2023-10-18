<?php
// Include server.php with the correct file path
include("server.php");

// Initialize variables to store user input
$ID = $FullName = $UserType = $Email = $Phone = $Password = "";

if (isset($_POST['reg_user'])) {
    // Get and sanitize user input
    $ID = mysqli_real_escape_string($db, $_POST['ID']);
    $FullName = mysqli_real_escape_string($db, $_POST['FullName']);
    $UserType = mysqli_real_escape_string($db, $_POST['UserType']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Phone = mysqli_real_escape_string($db, $_POST['Phone']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);

    // Now, you can use these variables to insert the user data into your database.
    // Your server.php script should contain the database connection and SQL queries for insertion.
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Drop | Sign Up</title>
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
            <a href="index.html" class="logo"><img src="img/logo.jpg" alt="Logo">House Drop</a>
            <!-- Log In Button -->
            <a href="http://localhost:3000/RENTAL%20HOUSE%20app/login.php" class="btn">Log In</a>
        </div>
    </header>
    <!-- Sign Up -->
    <div class="login container">
        <div class="login-container">
            <br>
            <h2>Welcome, Let's get started</h2>
            <p>Already have an account: <a href="http://localhost:3000/RENTAL%20HOUSE%20app/login.php">Log In</a></p>
            <!-- Registration Form -->
            <form method="post" action="server.php">
                <span>Aadhar Card</span>
                <input type="text" name="ID" value="<?php echo $ID; ?>" placeholder="ID" required>
                <span>Full Name</span>
                <input type="text" name="FullName" value="<?php echo $FullName; ?>" placeholder="Your Name" required>
                <span>User Type</span>
                <select name="UserType" id="usertype">
                    <option value="houseowner" <?php if ($UserType === 'houseowner') echo 'selected'; ?>>House Owner</option>
                    <option value="tenant" <?php if ($UserType === 'tenant') echo 'selected'; ?>>Tenant</option>
                </select>
                <br>
                <span>Email</span>
                <input type="email" name="Email" id="" value="<?php echo $Email; ?>" placeholder="yourmail@gmail.com" required>
                <span>Phone</span>
                <input type="tel" name="Phone" id="" value="<?php echo $Phone; ?>" placeholder="Enter your number" required>
                <span>Enter your password</span>
                <input type="password" name="Password" id="" value="<?php echo $Password; ?>" placeholder="At least 8" required>
                <input type="submit" value="Sign Up" class="button">
                <a href="http://localhost:3000/RENTAL%20HOUSE%20app/login.php">Already have an account</a>
            </form>
            <a href="http://localhost:3000/RENTAL%20HOUSE%20app/login.php" class="btn">Log In</a>
        </div>
        <!-- Log In Image -->
        <div class="login-image">
            <img src="img/sign-up.png" alt="Sign Up Image">
        </div>
    </div>
    
    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <h2><img src="img/logo.jpg" style="height: 100px; width: 175px;" alt="Footer Logo"><br>House drop</h2>
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
                <a href="#">admin@rentalhouses.com</a>
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
