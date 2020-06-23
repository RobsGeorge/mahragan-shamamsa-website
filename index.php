<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <title>مهرجان ألحان 2020</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=yes ,initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
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

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.php"><img src="images/mahr.png" class="img-fluid" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="#alhan">الألحان</a> </li>
                                <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="#coptic">القبطي</a> </li>
                                <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="#taks">الطقس</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#mokmek">MOKMEK</a> </li>
                                <li class="nav-item arbaic-text-small-nav"> <a class="nav-link" href="#rank">الترتيب</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#faq">FAQs</a> </li>
                                        <?php session_start();
                                        if(!(empty($_SESSION['valid_login']))){
                                        if(!($_SESSION['valid_login'])){
                                            echo '<a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">التسجيل/الدخول</a></li>';
                                        }
                                        else{
                                            echo '<a href="userpage.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3 arbaic-text-small-nav">'. $_SESSION["reg-player-first-name"] .'</a></li>';
                                        }}
                                        else{
                                            echo '<a href="login.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">التسجيل/الدخول</a></li>';
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
            <h1 class="arbaic-text-title"> <strong>مهرجان ألحان</strong> </h1>
            <h1 class="arbaic-text-title">صيف <strong>2020</strong></h1>
            <p class="tagline"><strong>مهرجان الألحان هو مسابقة في الألحان الكنسية واللغة القبطية والطقوس الكنسية | مدرسة القديس أثناسيوس الرسولي للشمامسة بمدينة نصر | صيف 2020</strong></p>
        </div>
        <div class="img-holder mt-3"><img src="images/lo2.png" alt="phone" class="img-fluid"></div>
    </header>


    <!-- // end .section -->

    <div class="section light-bg" id="alhan">


        <div class="container">
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

        <div class="container col">
            <div class="bg-gradient row" dir="ltr">
                <div class="col-lg-10 col-sm-3">
                <img src="images/BG.png" alt="perspective phone" class="img-fluid">
                </div>
                <div class="col-lg-2 col-sm-4">
                    <a href="alhanpage.php" class="btn btn-primary3 arbaic-text-small-heading" style="color: #633991">اذهب إلى الألحان</a>
                </div>
            </div>
        </div>


    </div>
    <!-- // end .section -->
    <div class="section" id="coptic">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <h3 class="arbaic-text-title">اللغة القبطية</h3>
                    <div dir="rtl">
                    <p class="mb-lg-2 arbaic-text-small-nav">اللغة القبطية هي اللغة المصرية القديمة مكتوبة بحروف يونانية. هي اللغة التي نستخدمها في صلواتنا الليتورجية في كنيستنا القبطية الأرثوذكسية حتى يومنا هذا. </p>
                    <p class="mb-lg-2 arbaic-text-small-nav">نستمتع معاً هذا العام في المهرجان بمعرفة بعض القواعد الشيقة والجميلة الخاصة باللغة القبطية، والتي سيتم عرضها في شكل دروس مشروحة في شكل مكتوب أو في شكل مصوَّر على هيئة فيديو. </p>
                    <p class="mb-lg-2 arbaic-text-small-nav">تعالوا نستمتع بلغتنا القبطية الجميلة في مهرجان هذا الصيف.</p>
                    </div>
                    <a href="copticpage.html" class="btn btn-primary arbaic-text-small-nav2">اذهب إلى القبطي</a>
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
                <small>كنسيات</small>
                <h3 class="arbaic-text-title2">الطقس</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link " data-toggle="tab" href="#rosol">صوم وأعياد الرسل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#3adra">صوم وأعياد العذراء</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#baba">حضور البطريرك والأساقفة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#3amma">طقوس عامة</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="rosol">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>طقس صوم وأعياد الآباء الرسل</h2>
                            <p class="lead">مقتطفات من الطقوس الخاصة بأعياد وصوم الآباء الرسل القديسين.</p>
                            <p>من أين جاءت مثل هذه الجواهر التي لمديح الله؟ اُنظروا إنسانًا من الخارج كان فقيرًا (أيوب)، لكن من الداخل كان غنيًا. هل كان يمكن لمثل هذه الجواهر أن تصدر عن شفتيه لو لم يحمل كنزًا مخفيًا في قلبه؟
                            </p>
                            <p> من يصلي برغبة يسبح في قلبه حتى إن كان لسانه صامتًا.
                                أما إذا صلى (الإنسان) بغير شوق فهو أبكم أمام الله حتى إن بلغ صوته آذان البشر .
                            </p>
                        </div>
                        <img src="images/apostles.jpg" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade " id="3adra">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/3adra2.jpg" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>طقس صوم وأعياد السيدة العذراء مريم</h2>
                            <p class="lead">مقتطفات من الطقوس الخاصة بأعياد وصوم السيدة العذراء القديسة مريم.</p>
                            <p>من أين جاءت مثل هذه الجواهر التي لمديح الله؟ اُنظروا إنسانًا من الخارج كان فقيرًا (أيوب)، لكن من الداخل كان غنيًا. هل كان يمكن لمثل هذه الجواهر أن تصدر عن شفتيه لو لم يحمل كنزًا مخفيًا في قلبه؟
                            </p>
                            <p> من يصلي برغبة يسبح في قلبه حتى إن كان لسانه صامتًا.
                                أما إذا صلى (الإنسان) بغير شوق فهو أبكم أمام الله حتى إن بلغ صوته آذان البشر .

                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="baba">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/pope.jpg" alt="graphic" class="hymn-image rounded">
                        <div>
                            <h2>طقس حضور الأب البطريرك والآباء الأساقفة</h2>
                            <p class="lead">مقتطفات من الطقوس الخاصة بألحان حضور البابا البطريرك والآباء في الكنيسة.</p>
                            <p>من أين جاءت مثل هذه الجواهر التي لمديح الله؟ اُنظروا إنسانًا من الخارج كان فقيرًا (أيوب)، لكن من الداخل كان غنيًا. هل كان يمكن لمثل هذه الجواهر أن تصدر عن شفتيه لو لم يحمل كنزًا مخفيًا في قلبه؟
                            </p>
                            <p> من يصلي برغبة يسبح في قلبه حتى إن كان لسانه صامتًا.
                                أما إذا صلى (الإنسان) بغير شوق فهو أبكم أمام الله حتى إن بلغ صوته آذان البشر .

                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade  show active" id="3amma">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="images/church.jpg" alt="graphic" class="rounded hymn-image">
                        <div>
                            <h2>بعض الطقوس العامة</h2>
                            <p class="lead" dir="rtl">مقتطفات من الطقوس الخاصة بترتيب وألحان تسبحة نصف الليل من الطقس السنوي.</p>

                            <p>من أين جاءت مثل هذه الجواهر التي لمديح الله؟ اُنظروا إنسانًا من الخارج كان فقيرًا (أيوب)، لكن من الداخل كان غنيًا. هل كان يمكن لمثل هذه الجواهر أن تصدر عن شفتيه لو لم يحمل كنزًا مخفيًا في قلبه؟
                            </p>
                            <p> من يصلي برغبة يسبح في قلبه حتى إن كان لسانه صامتًا.
                                أما إذا صلى (الإنسان) بغير شوق فهو أبكم أمام الله حتى إن بلغ صوته آذان البشر .
                            </p>
                        </div>
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
                    <img src="images/nm.jpg" alt="dual phone" class="hymn-image">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="align-items-center">
                        <h2 dir="ltr">GO TAKS!</h2>
                        <p class="mb-4">مسابقة رائعة عن طقوس كنيستنا القبطية الأرثوذكسية وتاريخها. ابدأ الآن وشارك مع أصدقائك في حل هذه المسابقة الممتعة والتعرف على جمال طقوس كنيستنا القبطية الأرثوذكسية</p>
                        <a href="takspage.php" class="btn btn-primary arbaic-text-small-nav2" dir="ltr">اذهب إلى الطقس</a></div>
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
                                <h5>قم بإنشاء حساب لك.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>احفظ وذاكر وسلم قبل المعاد.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque pretium obcaecati vel exercitationem eveniet</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>العب وشوف الترتيب بتاعك.</h5>
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
                <img src="images/mokmek.png">
                <h2 class="mokmek-heading-text-color">The Coptic Cluedo Game</h2>
            </div>

            <div class="testimonials owl-carousel" dir="ltr">
                <div class="testimonials-single">
                    <img src="images/client1.jpeg" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Mr. George</h5>
                    <p class="arbaic-text-small-heading">الضحية</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client2.jpeg" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Mr Mores</h5>
                    <p class="arbaic-text-small-heading">الصديق</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client3.jpeg" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Suzanne</h5>
                    <p class="arbaic-text-small-heading">ابنة الضحية</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client4.jpeg" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Martin</h5>
                    <p class="arbaic-text-small-heading">الابن الأكبر</p>
                </div>
                <div class="testimonials-single">
                    <img src="images/client5.jpeg" alt="client" class="client-img">
                    <blockquote class="blockquote">Uniquely streamline highly efficient scenarios and 24/7 initiatives. Conveniently embrace multifunctional ideas through proactive customer service. Distinctively conceptualize 2.0 intellectual capital via user-centric partnerships.</blockquote>
                    <h5 class="mt-4 mb-2">Mr. Black</h5>
                    <p class="arbaic-text-small-heading">شريك الضحية</p>
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
                        <h2>Play Mokmek</h2>
                        <p class="mb-4 arbaic-text-small-nav">بعد حفظ الألحان ومذاكرة القبطي والبحث في الطقوس، هانلعب لعبة كلنا بنحبها وبنستخدم فيها التفكير العميق. وبمساعدة نقط الألحان والطقس والقبطي هاتقدر تفتح أدلة جديدة عشان تعرف انت وفريقك تحل اللغز وتفوز بالمهرجان ولعبة موكميك.</p>
                        <a href="mokmekpage.html" class="btn btn-primary arbaic-text-small-nav2" dir="rtl">العب MokMek</a></div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <!-- // end .section -->


    <div class="section light-bg" id="rank">
        <div class="container">
            <div class="section-title">
                <h3 class="arbaic-text-heading">الهدايا والجوائز</h3>
            </div>

            <div class="align-content-center">
                <h4 class="arbaic-text-small-heading">
                    جاري ترتيب وتحضير الجوائز للأوائل والفائزين ...
                </h4>
                <h5>
                    وسيتم الإعلان عنها قريباً
                </h5>
            </div>
            <!--
            <div class="img-gallery owl-carousel owl-theme">
                <img src="images/screen1.jpg" alt="image">
                <img src="images/screen2.jpg" alt="image">
                <img src="images/screen3.jpg" alt="image">
                <img src="images/screen1.jpg" alt="image">
            </div>
-->
        </div>

    </div>
    <!-- // end .section -->





    <div class="section" id="">
        <div class="container">
            <div class="section-title">
                <h3 class="arbaic-text-title2">الترتيب الأسبوعي</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing popular">
                    <div class="card-head">
                        <h4 class="text-primary">INDIVIDUALS</h4>
                        <span class="price arbaic-text-small-nav">مايكل هاني أنيس</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">10 Projects</div>
                        <div class="list-group-item">5 GB Storage</div>
                        <div class="list-group-item">Basic Support</div>
                        <div class="list-group-item"><del>Collaboration</del></div>
                        <div class="list-group-item"><del>Reports and analytics</del></div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block arbaic-text-small-nav2">ترتيب أوائل المهرجان</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <h4 class="text-primary">TEAMS</h4>
                        <small class="price arbaic-text-small-nav">فريق: الصبَّارة</small>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">100 GB Storage</div>
                        <div class="list-group-item">Priority Support</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block arbaic-text-small-nav2">ترتيب أوائل الفرق</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <h4 class="text-primary">MOKMEK</h4>
                        <span class="price arbaic-text-small-nav">فريق:ني أرشي أنجيلوس</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Unlimited Projects</div>
                        <div class="list-group-item">Unlimited Storage</div>
                        <div class="list-group-item">Collaboration</div>
                        <div class="list-group-item">Reports and analytics</div>
                        <div class="list-group-item">Web hooks</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block arbaic-text-small-nav2">أوائل اللعبة</a>
                    </div>
                </div>
            </div>
            <!-- // end .pricing -->


        </div>

    </div>
    <!-- // end .section -->


    <div class="section pt-0" id="faq" dir="ltr">
        <div class="container">
            <div class="section-title">
                <small>FAQs</small>
                <h3 class="arbaic-text-title2">الأسئلة الأكثر شيوعاً عن مهرجان الألحان 2020</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">هل لازم أكون في مدرسة الشمامسة عشان أشارك في المهرجان؟</h4>
                    <p class="mb-5">أيوة. لازم تكون في خدمة مدرسة الشمامسة في كنيستنا عشان تعرف تشارك مع أصدقاءك في المهرجان، كمان هاتكون محتاج الكود بتاعك في مدرسة الشمامسة لحل المسابقات ومعرفة الترتيب واستلام الجوايز.</p>
                    <h4 class="mb-3">هل لازم الفريق كله يشارك في حل المسابقات كله؟</h4>
                    <p class="mb-5">أيوة. لازم تكون في خدمة مدرسة الشمامسة في كنيستنا عشان تعرف تشارك مع أصدقاءك في المهرجان، كمان هاتكون محتاج الكود بتاعك في مدرسة الشمامسة لحل المسابقات ومعرفة الترتيب واستلام الجوايز.</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">هل ممكن الفريق يكسب المهرجان بحل اللعبة فقط؟</h4>
                    <p class="mb-5">أيوة. لازم تكون في خدمة مدرسة الشمامسة في كنيستنا عشان تعرف تشارك مع أصدقاءك في المهرجان، كمان هاتكون محتاج الكود بتاعك في مدرسة الشمامسة لحل المسابقات ومعرفة الترتيب واستلام الجوايز.</p>
                    <h4 class="mb-3">هل هايكون فيه خدام مسئولين عن المهرجان بيساعدونا؟</h4>
                    <p class="mb-5">أيوة. لازم تكون في خدمة مدرسة الشمامسة في كنيستنا عشان تعرف تشارك مع أصدقاءك في المهرجان، كمان هاتكون محتاج الكود بتاعك في مدرسة الشمامسة لحل المسابقات ومعرفة الترتيب واستلام الجوايز.</p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="section pt-0 bg-new-gradient">
        <div class="container col align-items-center align-items-sm-center align-content-center">
            <br>
                <h3 class="arbaic-text-small-heading">لمعرفة أكبر لقواعد المهرجان وطريقة حساب النقاط والترتيب، ياريت تتفرج على الفيديو ده:</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="videos/vid1.mp4" allowfullscreen></iframe>
            </div>
        </div>

    </div>
    <!-- // end .section -->




    <div class="section bg-gradient">
        <div class="container">
            <div class="call-to-action">
                <h2 dir="ltr">Our Mobile Application Soon...</h2>
                <p class="tagline" dir="rtl">قريباً سيتم إصدار تطبيق خاص بالمهرجان، يعمل على جميع أجهزة الموبايل والتابلت.</p>
                <div class="my-4">

                    <a href="#" class="btn btn-light"><img src="images/appleicon.png" alt="icon"> App Store</a>
                    <a href="#" class="btn btn-light"><img src="images/playicon.png" alt="icon"> Google play</a>
                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

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
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <p class="mb-2"><small>DEVELOPED BY: ROBS (Robeir Samir George)</a></small></p>

        <small>
            <a href="#" class="m-2">HOME</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
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
