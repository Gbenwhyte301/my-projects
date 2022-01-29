

<?php
include("config.php");
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
   $mypassword = mysqli_real_escape_string($db,$_POST['password']);

//    echo $mypassword;
//    echo " :: ";
//    echo $myusername;
   
   
   $sql = "SELECT id FROM `users` WHERE email = '$myusername' and password = '$mypassword'";
   $result = mysqli_query($db,$sql);

   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//       $active = $row['fullname'];//active
   
   $count = mysqli_num_rows($result);
   
   // If result matched $myusername and $mypassword, table row must be 1 row
     
   if($count == 1) {
echo "welcome";
     //  session_register("myusername");
      $_SESSION['login_user'] = $myusername;
      
      header("location: index.php");
   }else {
      $error = "Your Login Name or Password is invalid";
      echo $error;
   }
}
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
            <div class="contact-info float-start"><a href="mailto:contact@example.com"><i class="far fa-envelope"></i>contact@example.com</a><a href="tel:+441234123456"><i class="fas fa-phone"></i>44 1234 123456</a></div>
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
                        <div class="dropdown-menu"><a class="dropdown-item" href="http://localhost/gbenga/admission.php">Admission</a><a class="dropdown-item" href="OurStaff.php">Our Staffs</a><a class="dropdown-item" href="OurValues.php">Our Values</a></div>
                    </li>
                </ul><span class="navbar-text actions"> <a class="login" href="http://localhost/gbenga/login.php">Log In</a><a class="btn btn-light action-button" role="button" href="http://localhost/gbenga/signup.php">Enroll Now</a></span>
            </div>
        </div>
    </nav>
    <div class="login-card" style="border-color: rgb(0,0,0);"><img class="profile-img-card" src="assets/img/avatar_2x.png">
        <p class="profile-name-card"> </p>
        <form class="form-signin" action = "" method = "post"><span class="reauth-email"> </span><input class="form-control" name = "username" type="email" id="inputEmail" required="" placeholder="Email address" autofocus="">
        <input class="form-control" name = "password" type="password" id="inputPassword" required="" placeholder="Password">
            <div class="container" style="padding-bottom: 19px;padding-right: 0px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="user"><label class="form-check-label" for="formCheck-1">Student</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="user"><label class="form-check-label" for="formCheck-2">Staff</label></div>
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Remember me</label></div>
            </div><button class="btn btn-primary btn-lg d-block btn-signin w-100" type="submit">Sign in</button>
        </form><a class="forgot-password" href="#">Forgot your password?</a>

        
        <!-- <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form> -->
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