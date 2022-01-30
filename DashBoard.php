
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
                </ul><span class="navbar-text actions"> <a class="login" href="http://localhost/gbenga/login.php">Log In</a><a class="btn btn-light action-button" role="button" href="http://localhost/gbenga/signup.php">Enroll Now</a></span>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-column flex-sm-row wrapper min-vh-100">
            <div class="col-12 col-sm-1 col-md-3 flex-shrink-1 p-0 bg-dark">
                <nav class="navbar navbar-dark navbar-expand-sm bg-dark text-nowrap flex-row align-items-start flex-sm-column">
                    <div class="container flex-sm-column"><a class="navbar-brand" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="fa-2x text-warning" style="font-size: 70px;">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16 9C16 11.2091 14.2091 13 12 13C9.79086 13 8 11.2091 8 9C8 6.79086 9.79086 5 12 5C14.2091 5 16 6.79086 16 9ZM14 9C14 10.1046 13.1046 11 12 11C10.8954 11 10 10.1046 10 9C10 7.89543 10.8954 7 12 7C13.1046 7 14 7.89543 14 9Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1ZM3 12C3 14.0902 3.71255 16.014 4.90798 17.5417C6.55245 15.3889 9.14627 14 12.0645 14C14.9448 14 17.5092 15.3531 19.1565 17.4583C20.313 15.9443 21 14.0524 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12ZM12 21C9.84977 21 7.87565 20.2459 6.32767 18.9878C7.59352 17.1812 9.69106 16 12.0645 16C14.4084 16 16.4833 17.1521 17.7538 18.9209C16.1939 20.2191 14.1881 21 12 21Z" fill="currentColor"></path>
                            </svg></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="navbar-nav flex-column justify-content-between w-100">
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Overview"><a class="nav-link active" href="http://localhost/gbenga/overview.php"><i class="fa fa-home me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Overview</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Properties"><a class="nav-link" href="http://localhost/gbenga/CheckResult.php"><i class="fas fa-certificate me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Check Result</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Contacts"><a class="nav-link" href="#"><i class="fa fa-envelope me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Contacts</span></a></li>
                                <li class="nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" title="Contacts"><a class="nav-link" href="http://localhost/gbenga/logout.php"><i class="fa fa-sign-out me-2 text-info"></i><span class="d-inline-block d-sm-none d-md-inline-block">Sign-Out</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-12 col-sm-11 col-md-9 bg-light py-3">
                <h1>Hi, User!</h1>
                <main class="page" style="min-height: 100%;">
                    <section class="clean-block about-us">
                        <div class="row" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col text-center">
                                <h2 class="text-info">Nombre Completo</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="assets/img/logoComedor/avatar1.jpg">
                                    <div class="card-body info">
                                        <div class="row" style="margin-top: -24px;">
                                            <div class="col-md-12" style="margin-top: 22px;">
                                                    <?php 
                                                    $checkResult = 1;
                                                    $overview = 2;
                                                    if($_SESSION['showuser'] == $checkResult){
                                                        echo "hello world";
                                                echo "<div class=\"row\">
                                                    <div class=\"col\">

                                                        <p class=\"labels\"><strong>English</strong></p>
                                                    </div>
                                                    <div class=\"col\">
                                                        <p class=\"labels\">A1</p>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        <p class=\"labels\"><strong>Maths</strong></p>
                                                    </div>
                                                    <div class=\"col\">
                                                        <p class=\"labels\">A2</p>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        <p class=\"labels\"><strong>Physics</strong></p>
                                                    </div>
                                                    <div class=\"col\">
                                                        <p class=\"labels\">B1</p>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        <p class=\"labels\"><strong>Chemistry</strong></p>
                                                    </div>
                                                    <div class=\"col\">
                                                        <p class=\"labels\">A1</p>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        <p class=\"labels\"><strong>Biology</strong></p>
                                                    </div>
                                                    <div class=\"col\">
                                                        <p class=\"labels\">C2</p>
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-md-12\"><a class=\"btn btn-success\" role=\"button\" href=\"editProfile.php\"><i class=\"fas fa-pencil-alt\"></i>&nbsp;Edit</a></div>
                                                </div>";
                                            }
                                                else if($showuser == $overview){
                                                    echo "hi, u better work";
                                                    echo "showing overview";

                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
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