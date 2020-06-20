<?php
// Start the session
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


<section>
    <div class="bg-gradient fixed-top nav-menu" data-offset="50">
        <div>
            <a href="index.php">
                <img src="images/lo3.png">
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container mt-5">
        <br>
        <br>
        <br>
        <br>
        <div class="align-items-center">
            <h1 class="arbaic-text-title2"> <strong>انشاء حساب جديد</strong> </h1>
        </div>
    </div>
</section>
<?php
// define variables and set to empty values

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$name = $code = $phone_number =  $email = $password = $passwordVerification=  $firstname = "";
$valid_name = $valid_code = $valid_phone_number  = $valid_email = $valid_password = $valid_password_verification = true;



if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submitbtn'])) {
    $name = test_input($_POST["reg-player-name"]);
    $code = test_input($_POST["reg-player-code"]);
    $phone_number = test_input($_POST["reg-player-phone-number"]);
    $email = test_input($_POST["reg-player-email"]);
    $password = test_input($_POST["reg-player-password"]);
    $passwordVerification = test_input($_POST["reg-player-confirm-password"]);
}



    $name = test_input($name);
    $code = test_input($code);
    $email = test_input($email);
    $phone_number = test_input($phone_number);
    $password = test_input($password);
    $passwordVerification = test_input($passwordVerification);

    $nameErr = "";
    $codeErr = "";
    $emailErr = "";
    $phoneErr = "";
    $passwordErr = "";
    $passwordVerificationErr = "";






if(strlen($code) < 2 or strlen($code)>5)
{
    $valid_code = false;
    $codeErr = "من فضلك أدخل الكود الخاص بك في مدرسة الشمامسة بشكل صحيح";
}

elseif(substr($code,0,1) != '1' and substr($code,0,1)!= '2')
{
    $valid_code = false;
    $codeErr = "من فضلك أدخل الكود الخاص بك في مدرسة الشمامسة بشكل صحيح";
}
else
{
    $valid_code = true;
    $codeErr = "";
}

$firstname = substr($name, 0, stripos($name," "));

$_SESSION["reg-player-first-name"] = $firstname;
$_SESSION["reg-player-name"] = $name;
$_SESSION["reg-player-code"] = $code;
$_SESSION["reg-player-phone-number"] = $phone_number;
$_SESSION["reg-player-email"] = $email;
$_SESSION["reg-player-password"] = $password;
$_SESSION["reg-player-confirm-password"] = $passwordVerification;




$valid_login = false;

if($valid_password and $valid_name and $valid_phone_number and $valid_email and $valid_password_verification and $valid_code and isset($_POST['submitbtn']))
{
    $valid_login = true;
    sleep(2);
    header('Location: welcomepage.php');
}
$_SESSION["valid_login"] = $valid_login;
?>
<section class="login general-pages d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="general-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="subtitle-heading2"> انشاء حساب </h3>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                                <div class="form-group subtitle-heading2" dir="rtl">
                                    <label dir="rtl" for="name" class="label-title"> الإسم  </label>
                                    <?php if(!empty($nameErr))
                                    echo "<h2 class='arbaic-text-small-nav'>" . $nameErr . "</h2>";?>
                                    <input type="text" value="<?php if($valid_name){echo $_SESSION['reg-player-name'];} else {echo '';}?>" class="form-control" style="color:#2e3133;" id="name" name="reg-player-name"
                                           aria-describedby="emailHelp" placeholder="أدخل الإ سم ثلاثي باللغة العربية" dir="rtl" required>
                                </div>
                                <div class="form-group subtitle-heading2" dir="rtl">
                                    <label dir="rtl" lang="en" for="code" class="label-title">الكود</label>
                                    <?php if(!empty($codeErr))
                                        echo "<h2 class='arbaic-text-small-nav'>" . $codeErr . "</h2>";?>
                                    <input type="number" value="<?php if($valid_code){echo $_SESSION['reg-player-code'];} else {echo '';}?>" class="form-control" style="color:#2e3133;" id="code" name="reg-player-code"
                                           aria-describedby="emailHelp" placeholder="أدخل الكود الخاص بك في مدرسة الشمامسة" dir="rtl" required>
                                </div>
                                <div class="form-group subtitle-heading2" dir="rtl">
                                    <label dir="rtl" for="phone" class="label-title">رقم الموبايل</label>
                                    <?php if(!empty($phoneErr))
                                        echo "<h2 class='arbaic-text-small-nav'>" . $phoneErr . "</h2>";?>
                                    <input type="number" value="<?php if($valid_phone_number){echo $_SESSION['reg-player-phone-number'];} else {echo '';}?>" class="form-control" style="color:#2e3133;" id="phone" name="reg-player-phone-number"
                                           name="reg-player-phone-number" placeholder="أدخل رقم الموبايل الخاص بك" dir="rtl" required>
                                </div>
                                <div class="form-group subtitle-heading2">
                                    <label for="email" class="label-title"> عنوان البريد الكتروني </label>
                                    <input type="email" value="<?php if($valid_email){echo $_SESSION['reg-player-email'];} else {echo '';}?>" class="form-control" style="color:#2e3133;" id="email" name="reg-player-email"
                                           aria-describedby="emailHelp" placeholder="أدخل البريد الإلكتروني" dir="rtl" required>
                                </div>
                                <div class="form-group subtitle-heading2">
                                    <label for="password" class="label-title">قم بإنشاء كلمة السر الخاصة بك</label>
                                    <?php if(!empty($passwordErr))
                                        echo "<h2 class='arbaic-text-small-nav'>" . $passwordErr . "</h2>";?>
                                    <input type="password" class="form-control" style="color:#2e3133;" id="password" name="reg-player-password"
                                           placeholder="أدخل كلمة السر التي ترغبها" dir="rtl" required>
                                </div>
                                <div class="form-group subtitle-heading2">
                                    <label for="confirmPassword" class="label-title"> تأكيد كلمة السر </label>
                                    <?php if(!empty($passwordVerificationErr))
                                        echo "<h2 class='arbaic-text-small-nav'>" . $valid_password_verification . "</h2>";?>
                                    <input type="password" class="form-control" style="color:#2e3133;" id="confirmPassword" name="reg-player-confirm-password"
                                           placeholder="أعد كتابة كلمة السر التي أنشأتها" dir="rtl" required>
                                </div>
                                <div class="row">
                                <button type="submit" name="submitbtn" class="btn btn-primary label-title" style="margin: 20px"> حفظ </button>
                                    <?php if(($valid_name)){
                                        echo $nameErr;
                                    }
                                    ?>
                                </div>
                            </form>
                            <br>
                            <div  dir="ltr">

                                    <p class="message" style="margin-left: 12px"> لديك حساب بالفعل؟ </p>
                                <a href="login2.html" type="submit" class="btn btn-primary2 label-title2"> تسجيل الدخول </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section bg-gradient">
    <div class="container">
        <div class="call-to-action">
            <a href="index.php"><h2 class="arbaic-text-title2">مهرجان الألحان 2020</h2></a>
            <p class="tagline">مهرجان الألحان واللغة القبطية والطقوس الكنسية | مدرسة القديس أثناسيوس الرسولي للشمامسة | صيف 2020 </p>
            <div class="my-4">
                <a href="alhanpage.php" class="btn btn-light arbaic-text-small-nav">الألحان</a>
                <a href="copticpage.html" class="btn btn-light arbaic-text-small-nav">القبطي</a>
                <a href="takspage.php" class="btn btn-light arbaic-text-small-nav">الطقس</a>
                <a href="mokmekpage.html" class="btn btn-light arbaic-text-small-nav">MokMek</a>
                <a href="rankingpage.html" class="btn btn-light arbaic-text-small-nav">الترتيب</a>
                <a href="#" class="btn btn-primary3 mokmek-heading-text-color arbaic-text-small-nav">قواعد المهرجان</a>
            </div>
        </div>
    </div>
</div>

<div class="light-bg py-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <p class="mb-2"> <span class="ti-location-pin mr-2"></span>Nasr City, Cairo, Egypt.</p>
                <div class=" d-block d-sm-inline-block">
                    <p class="mb-2">
                        <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:robier_samir@hotmail.co.uk">robier_samir@hotmail.co.uk</a>
                    </p>
                </div>
                <div class="d-block d-sm-inline-block">
                    <p class="mb-0">
                        <span class="ti-headphone-alt mr-2"></span> <a href="tel:+201066468922">+20-1066468922</a>
                    </p>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="social-icons">
                    <a href="#"><span class="ti-facebook"></span></a>
                    <a href="#"><span class="ti-twitter-alt"></span></a>
                    <a href="#"><span class="ti-instagram"></span></a>
                </div>
            </div>
        </div>

    </div>

</div>

<footer class="my-5 text-center">
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