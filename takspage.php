<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <title>الطقس - مهرجان ألحان 2020</title>
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

<body data-spy="scroll" data-target="#navbar" data-offset="30">

<!-- Nav Menu -->
<?php
session_start();
?>
<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-lg">
                    <a class="navbar-brand" href="index.php"><img src="images/mahr.png" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="#">الألحان</a> </li>
                            <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="copticpage.html">القبطي</a> </li>
                            <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="takspage.php">الطقس</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="mokmekpage.html">MOKMEK</a> </li>
                            <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="rankingpage.html">الترتيب</a> </li>
                            <li class="nav-item arbaic-text-small-nav">
                                <?php
                                if(!($_SESSION['valid_login'])){
                                    echo '<a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">التسجيل/الدخول</a></li>';
                                }
                                else{
                                    echo '<a href="userpage.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3 arbaic-text-small-nav">'. $_SESSION["reg-player-first-name"] .'</a></li>';
                                }
                                ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<header class="bg-gradient" id="home">
    <div class="container mt-5">
        <h1 class="arbaic-text-title"> <strong>الطقس</strong> </h1>
        <p class="tagline">نتناول هذا العام حفظ الكثير من الألحان الجميلة الخاصة بصوم وأعياد الآباء الرسل بالإضافة إلى ألحان صوم وأعياد السيدة العذراء مريم، وأيضاً الألحان الكنسية التي تُصَلى في حضور الآباء البطاركة والأساقفة.</p>
    </div>
</header>


<!-- // end .section -->

<div class="section light-bg">


    <div class="section light-bg">


        <div class="container">

            <div class="section-title">
                <h3 class="arbaic-text-heading">الألحان</h3>

            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <!--<img src="images/bob.png" alt="perspective phone" class="img-fluid">-->
                                <div class="media-body">
                                    <h4 class="card-new">ألحان الرسل</h4>
                                    <p class="card-text"><strong> الألحان التي تُصَلَّى في صوم وأعياد الآباء الرسل القديسين.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <!--<span class="ti-settings gradient-fill ti-3x mr-3"></span>-->
                                <div class="media-body">
                                    <h4 class="card-new">ألحان العذراء</h4>
                                    <p class="card-text"><strong>الألحان التي تُصَلَّى في صوم وأعياد السيدة العذراء مريم.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <!--<span class="ti-lock gradient-fill ti-3x mr-3"></span>-->
                                <div class="media-body">
                                    <h4 class="card-new">ألحان البطريرك والأساقفة</h4>
                                    <p class="card-text"><strong>الألحان التي تُصَلَّى في حضور الآباء البطاركة والمطارنة والأساقفة.</strong></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


    </div>
    <div class="section">

        <div class="container">
            <div class="bg-gradient">
                <img src="images/BG.png" alt="perspective phone" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->
    <div class="section" id="coptic">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h3>Coptic</h3>
                    <p class="mb-lg-2">كلامك تير عن القبطي، كلام كنتير عن القبطي، وشؤح منهج القبطي، كلام كتير عن القبطي، كلام كتير عن القبطي، كلام كتير عن القبطي، كلام كتير عن القبطي. هانقول كلام كتير عن القبطي. </p>
                    <a href="#" class="btn btn-primary">GO COPTIC</a>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="images/gamma.png" alt="perspective phone" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg" id="taks">
        <div class="container">
            <div class="section-title">
                <small>FEATURES</small>
                <h3>TAKS</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">صوم وأعياد الرسل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">صوم وأعياد العذراء</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">حضور البطريرك والأساقفة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">طقوس عامة</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2>طقس صوم وأعياد الآباء الرسل</h2>
                            <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                                congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                            </p>
                            <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                                sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>طقس صوم وأعياد السيدة العذراء مريم</h2>
                            <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                                congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                            </p>
                            <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                                sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                            </p>
                        </div>
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>طقس حضور الأب البطريرك والآباء الأساقفة</h2>
                            <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                                congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                            </p>
                            <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                                sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>بعض الطقوس العامة</h2>
                            <p class="lead">Uniquely underwhelm premium outsourcing with proactive leadership skills. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. Ut placerat dui eu nulla
                                congue tincidunt ac a nibh. Mauris accumsan pulvinar lorem placerat volutpat. Praesent quis facilisis elit. Sed condimentum neque quis ex porttitor,
                            </p>
                            <p> malesuada faucibus augue aliquet. Sed elit est, eleifend sed dapibus a, semper a eros. Vestibulum blandit vulputate pharetra. Phasellus lobortis leo a nisl euismod, eu faucibus justo sollicitudin. Mauris consectetur, tortor
                                sed tempor malesuada, sem nunc porta augue, in dictum arcu tortor id turpis. Proin aliquet vulputate aliquam.
                            </p>
                        </div>
                        <img src="images/graphic.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- // end .section -->

    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/nm.jpg" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>GO TAKS!</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                        <a href="#" class="btn btn-primary">GO TAKS!</a></div>
                </div>
            </div>

        </div>
    </div>

    <!-- // end .section -->


    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>Create an Account</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>Submit Before Deadline</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem eveniet</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>Play MOKMEK & Get Your Ranking</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="images/cart.jpg" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section" id="mokmek">
        <div class="container">
            <div class="section-title">
                <small>our Cluedo!</small>
                <h3>MOKMEK</h3>
                <h2>The Coptic Cluedo Game</h2>
            </div>

            <div class="testimonials owl-carousel">
                <div class="testimonials-single">
                    <img src="images/client.png" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Mr. George</h5>
                    <p class="text-primary">الضحية</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client.png" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Suzanne</h5>
                    <p class="text-primary">الممرضة</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client.png" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Martin</h5>
                    <p class="text-primary">الابن الأكبر</p>
                </div>
            </div>

        </div>

    </div>
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/cart2.png" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>Play Mokmek</h2>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati vel exercitationem eveniet vero maxime ratione </p>
                        <a href="#" class="btn btn-primary">GO MOKMEK!</a></div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <!-- // end .section -->


    <div class="section light-bg" id="rank">
        <div class="container">
            <div class="section-title">
                <small></small>
                <h3>WEEKLY RANKING</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="images/screen1.jpg" alt="image">
                <img src="images/screen2.jpg" alt="image">
                <img src="images/screen3.jpg" alt="image">
                <img src="images/screen1.jpg" alt="image">
            </div>

        </div>

    </div>
    <!-- // end .section -->





    <div class="section" id="">
        <div class="container">
            <div class="section-title">
                <small>PRICING</small>
                <h3>Upgrade to Pro</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">PERSONAL</small>
                        <span class="price">$14<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">10 Projects</div>
                        <div class="list-group-item">5 GB Storage</div>
                        <div class="list-group-item">Basic Support</div>
                        <div class="list-group-item"><del>Collaboration</del></div>
                        <div class="list-group-item"><del>Reports and analytics</del></div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="text-primary">FOR TEAMS</small>
                        <span class="price">$29<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">100 GB Storage</div>
                        <div class="list-group-item">Priority Support</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">ENTERPRISE</small>
                        <span class="price">$249<sub>/m</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">Unlimited Storage</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                        <div class="list-group-item">Web hooks</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
                    </div>
                </div>
            </div>
            <!-- // end .pricing -->


        </div>

    </div>
    <!-- // end .section -->


    <div class="section pt-0" id="faq">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>Frequently Asked Questions</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">Can I try before I buy?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">What payment methods do you accept?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Can I change my plan later?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>
                    <h4 class="mb-3">Do you have a contract?</h4>
                    <p class="light-font mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium, nisi nisi fermentum enim, et sagittis dolor nulla vel sapien. Vestibulum sit amet mattis ante. </p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">
                <h2 class="arbaic-text-title2">مهرجان الألحان 2020</h2>
                <p class="tagline">مهرجان الألحان واللغة القبطية والطقوس الكنسية | مدرسة القديس أثناسيوس الرسولي للشمامسة | صيف 2020 </p>
                <div class="my-4">
                    <a href="alhanpage.php" class="btn btn-light arbaic-text-small-nav">الألحان</a>
                    <a href="copticpage.html" class="btn btn-light arbaic-text-small-nav">القبطي</a>
                    <a href="takspage.php" class="btn btn-light arbaic-text-small-nav">الطقس</a>
                    <a href="mokmekpage.html" class="btn btn-light arbaic-text-small-nav">MokMek</a>
                    <a href="rankingpage.html" class="btn btn-light arbaic-text-small-nav">الترتيب</a>
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