<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>gbenga project</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Black-Navbar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Red.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets/css/Modern-Contact-Form.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Nice-breadcrumb.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom-1.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom-2.css">
    <link rel="stylesheet" href="assets/css/Slider_Carousel_webalgustocom.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Top-Bar-Webeez-1.css">
    <link rel="stylesheet" href="assets/css/Top-Bar-Webeez.css">
</head>

<body>
    <section id="topbar" class="d-none d-lg-block">
        <div class="container clearfix">
            <div class="contact-info float-start"><a href="mailto:contact@example.com"><i class="far fa-envelope"></i>goodnessintsch@info.com</a><a href="tel:+441234123456"><i class="fas fa-phone"></i>0812 345 6789</a></div>
            <div class="text-end container clearfix">
                <div class="social-links"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a><a class="facebook" href="#"><i class="fab fa-facebook"></i></a><a class="instagram" href="#"><i class="fab fa-instagram"></i></a><a class="google-plus" href="#"><i class="fab fa-google-plus"></i></a><a class="linkedin" href="#"><i class="fab fa-linkedin"></i></a></div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background: rgb(34, 34, 34);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(254,254,254);">GIS</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="http://localhost/gbenga/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/gbenga/events.php">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/gbenga/CheckResult.php">Check Result</a></li>
                    <li class="nav-item"><a class="nav-link" href="http://localhost/gbenga/contact.php">Contact</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">About Us</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="http://localhost/gbenga/admission.php">Admission</a><a class="dropdown-item" href="http://localhost/gbenga/OurStaff.php">Our Staffs</a><a class="dropdown-item" href="http://localhost/gbenga/OurValues.php">Our Values</a></div>
                    </li>
                </ul><span class="navbar-text actions"> 
                 <?php if(empty($login_session)){
                    echo "<a class=\"login\" href=\"http://localhost/gbenga/login.php\">Log In";
                 }
                
                else{
                     echo "<a class=\"login\" href=\"http://localhost/gbenga/logout.php\">Log Out : ";
                     echo $login_session;
                }
                ?>

                
                </a><a class="btn btn-light action-button" role="button" href="http://localhost/gbenga/signup.php">Enroll Now</a></span>
            </div>
        </div>
    </nav>
    <section id="carousel">
        <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-nature carousel-hero jumbotron py-5 px-4">
                        <h1 class="hero-title">A Lifetime Confidence start here</h1>
                        <p class="hero-subtitle">Education is the first step for people to gain the knowledge, critical thinking, empowerment and skills they need to make this world a better place.</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#" style="background: rgb(4, 143, 131);">Enroll Now</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-light border rounded border-light pulse animated hero-photography carousel-hero jumbotron py-5 px-4">
                        <h1 class="hero-title">Better education for Amazing World</h1>
                        <p class="hero-subtitle">The function of education is to teach one to think intensively and to think critically. Intelligence plus character – that is the goal of true education</p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="#">Enroll Now</a></p>
                    </div>
                </div>
                <div class="carousel-item active">
                    <div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4">
                        <h1 class="hero-title">YOU CAN HELP MAKE A DIFFERENCE<br></h1>
                        <p class="hero-subtitle">Since 2018, Goodness International School has endeavored to <br>promote, aid, and encourage enhanced educational opportunities for the <br>students<br></p>
                        <p><a class="btn btn-primary hero-button plat" role="button" href="http://localhost/gbenga/signup.php">Enroll Now</a></p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
            </ol>
        </div>
    </section>
    <div class="row align-items-center" style="margin: 25px;">
        <div class="col-md-6">
            <h3><br>WELCOME TO GOODNESS INTERNATIONAL SCHOOL<br></h3>
            <div class="getting-started-info">
                <p><br>GOODNESS International School is a co-educational institution situated in Maitama Abuja, the heart of Nigeria’s beautiful and iconic city. The school kicked off academic activities in the year 2016 and has since enjoyed goodwill of many people and a systemic growth in all ramifications.<br><br></p>
            </div><button class="btn btn-outline-primary btn-lg" type="button" style="color: rgb(13, 110, 253);">Enroll Now</button>
        </div>
        <div class="col-md-6"><img class="img-thumbnail" src="assets/img/students-g2543f6a8d_1280.jpg"></div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="border-color: rgb(91,101,111);">
                        <h1 style="font-size: 25.520000000000003px;">VISION</h1>
                        <p>We seek to provide a career-orientated educational programme which is broad-based encouraging analytical and evaluative thinking in the developmental stages of the child.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="border-color: rgb(91,101,111);">
                        <h1 style="font-size: 25.520000000000003px;">MISSION</h1>
                        <p>We prepare students to live and contribute to our ever-changing world through building character, self confidence and integrity.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6"><img class="img-thumbnail" src="assets/img/children-g42742f05d_1920.jpg"></div>
            <div class="col-md-6">
                <h3 style="font-size: 26.408px;font-weight: bold;"><br>"Our purpose is to provide a safe, happy <br>environment for your child, where they are able to be themselves and <br>thrive; while acquiring the educational foundation needed to succeed"<br><br></h3>
                <div class="getting-started-info"></div>
            </div>
        </div>
    </div>
    <footer class="footer-dark" style="background: rgb(0,0,0);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Check Result</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item" style="padding-top: 17px;">
                    <h3></h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Our School<br></h3>
                    <p>Goodness International School is full of happy and highly motivated children. We are committed to provide a warm, welcoming, and nurturing atmosphere with a strong educational ethos and moral values.</p>
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Goodness International school © 2022</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Multi-step-form.js"></script>
    <script src="assets/js/Slider_Carousel_webalgustocom.js"></script>
</body>

</html>