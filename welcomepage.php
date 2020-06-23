<?php
// Start the session
session_start();
require_once 'config.php';

if(!empty($_SESSION['reg-player-name'])) {
    $username = $_SESSION['reg-player-name'];
    $userFirstname = $_SESSION["reg-player-first-name"];
    $usercode = $_SESSION['reg-player-code'];
    $userpassword = $_SESSION['reg-player-password'];
    $usermail = $_SESSION['reg-player-email'];
    $userphone = $_SESSION['reg-player-phone-number'];
}

// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['submit'])){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 20MB maximum
        $maxsize = 20 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            move_uploaded_file($_FILES["photo"]["tmp_name"], "users_images/" . $usercode . ".". $ext);
            $_SESSION['is-player-image-uploaded'] = true;
            $_SESSION['reg-player-image']="users_images/".$usercode . ".". $ext;
        }
        else{
            $_SESSION['is-player-image-uploaded']=false;
        }
    }
    $marhala = $_POST['selectMarhala'];
    $_SESSION['reg-player-marhala'] = $marhala;

    $sql = "SET NAMES 'utf8'";
    $sql = $sql . ';' . 'SET CHARACTER SET utf8';
    $sql = $sql.';'."INSERT INTO player(Full_Name,Code,Password,Email,Phone_Number,Image,Marhala) VALUES (?,?,?,?,?,?,?)";
    $stmtinsert = $conn->prepare($sql);
    $result = $stmtinsert->execute([$username,$usercode,$userpassword,$usermail,$userphone,$_SESSION['reg-player-image'],$marhala]);
}
?>



<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <title>انشاء حساب - مهرجان ألحان 2020</title>
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

    if(!empty($_SESSION['reg-player-marhala']) and !empty($_SESSION['reg-player-image']))
    {
        echo '
    <div style="min-height: 110%; min-height: 110vh; display: flex; align-items: center;">
        <div class="container align-items-center align-items-sm-center">
            <h1 style="font-family:\'Almarai\', sans-serif ;color: #005cbf; font-size: large;text-align: center;">تم إنشاء الحساب بنجاح!</h1>
            <h1 class="arbaic-text-title2" dir="rtl">أهلاً بك يا <strong style="color: #f5378e">'.  $userFirstname . '</strong></h1>
            <div class="row" style="display:flex;justify-content:center;align-items:center;" dir="ltr">
                <div class="col-sm-8" style="align-content: center;"><img id="myImg" alt="My Image" src="'. $_SESSION['reg-player-image'] . '" class="user-image" style="border-radius: 50%; max-height: 100px; max-width: 100px;"></div>
            </div>
            <br>
            <h2 class=""  style = "font-size:large; text-align: center; color:#721c24 ;flex: auto" dir = "rtl" > يجب عليك تسجيل الدخول الآن بالكود وكلمة السر التي قمت بإنشائها </h2 >
            <a href="login.php" name = "submitbtn" class="btn btn-primary3 arbaic-text-small-heading" style = "color: #633991; min-width: 100%;" > تسجيل الدخول </a >
        </div>
    </div>';
        echo $_SESSION['reg-player-image'];
    }
    else
    {
        echo '<div style="min-height: 110%; min-height: 110vh; display: flex; align-items: center;">
        <div class="container align-items-center align-items-sm-center">
            <h1 style="font-family:\'Almarai\', sans-serif ;color: #005cbf; font-size: large;text-align: center;">تم إنشاء الحساب جزئياً بنجاح!</h1>
            <h1 class="arbaic-text-title2" dir="rtl">أهلاً بك يا <strong style="color: #f5378e">' . $userFirstname .'</strong></h1>
            <h1 style="font-family:\'El Messiri\', sans-serif ;color: #fd7e14; font-size: large;text-align: center;">الخطوة الثانية: قم بإختيار صورة شخصية مناسبة</h1>
            <form action="welcomepage.php" method="post" enctype="multipart/form-data" dir="rtl">
            <div class="row" style="display:flex;justify-content:center;align-items:center;" dir="ltr">
                <div class="col-sm-8" style="align-content: center;"><img id="myImg" alt="My Image" src="images/avatar.jpg" class="client-img" style="border-radius: 50%; max-height: 100px; max-width: 100px;"></div>
                <div class="col-sm-4"><input type=\'file\' class="btn btn-primary2" id = "fileSelect" name="photo" /></div>
            </div>
                <br>
                <h1 class="col-sm" style="font-family:\'El Messiri\', sans-serif ;color: #005cbf; font-size: large;text-align: center;">بعد اختيار الصورة الشخصية بنجاح، سوف يتم عرضها بعد اختيار المرحلة والضغط على "إنهاء"</h1>
                <div style="align-items: center;" dir="rtl">
                    <h1 class="col-sm" style="font-family:\'El Messiri\', sans-serif ;color: #fd7e14; font-size: large;text-align: center;">الخطوة الأخيرة: اختر المرحلة الخاصة بك واضغط على "انهاء"</h1>
                    <select class="arbaic-text-small-heading center col-sm-4" style="font-size: large;" id = "selectMarhala" name="selectMarhala">
                        <option type="input" value = "ابتدائي">ابتدائي</option>
                        <option type="input" value = "اعدادي">اعدادي</option>
                        <option type="input" value = "ثانوي">ثانوي</option>
                        <option type="input" value = "جامعة">جامعة</option>
                        <option type="input" value = "خريجين">خريجين</option>
                    </select>
                </div>
                <br>
                <div class="col-sm-2"><input type=\'submit\' class="btn btn-primary3 arbaic-text-small-heading"  name="submit" value="انهاء" style="font-family: \'Almarai\', sans-serif;font-size: medium; min-width: 100%" onclick="goto()"/></div>
            </form>
        </div>
    </div>
</div>';
    }

?>







<footer class="my-5 text-center fixed-bottom">
    <p class="mb-2"><small>DEVELOPED BY: ROBS</a></small></p>
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