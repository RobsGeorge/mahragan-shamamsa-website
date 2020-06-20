<?php
// Start the session
require_once 'config.php';
session_start();
?>
<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <title>تسجيل الدخول - مهرجان ألحان 2020</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/BG.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=yes ,initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


<section class="col">
    <div class="bg-gradient fixed-top">
        <div>
            <a href="index.php">
                <img src="images/lo3.png">
            </a>
        </div>
    </div>
</section>

<?php
$username = $_SESSION['reg-player-name'];
$userFirstname = $_SESSION["reg-player-first-name"];
$usercode = $_SESSION['reg-player-code'];
$userPhone = $_SESSION['reg-player-phone-number']
?>


    <div style="min-height: 100%; min-height: 100vh; display: flex; align-items: center;">
        <div class="container align-items-center align-items-sm-center">
            <h1 class="arbaic-text-small-heading" style="color: #005cbf; font-size: large;"  >My Account</h1>
            <br>
            <h1 class="arbaic-text-title2" dir="rtl"><strong style="color: #f5378e"><?php echo $username;?></strong></h1>
            <br>
            <h2 class="arbaic-text-small-heading" dir="rtl"><?php echo $usercode;?></h2>
            <br>
            <h2 class="arbaic-text-small-heading" dir="rtl" style="color: #495057">Phone Number: <?php echo $userPhone;?></h2>
            <br>
            <h2 class="arbaic-text-small-heading" dir="rtl" style="color: #20c997">الترتيب الإجمالي: 2</h2>
            <br>
        </div>
    </div>
</div>






<footer class="my-5 text-center fixed-bottom">
    <p class="mb-2"><small>DEVELOPED BY: ROBS</a></small></p>

    <small>
        <a href="index.php" class="m-2">HOME</a>
        <a href="#" class="m-2">ABOUT</a>
        <a href="#" class="m-2">CONTACT</a>
    </small>
</footer>


<!-- jQuery and Bootstrap -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- Custom JS -->
<script src="js/script.js"></script>


</body>
</html>