<?php 
  session_start(); 

 
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	//header("location: login.php");
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Talks Of Code</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="CSS/contact_responsive.css">




    <style>
    .button2 {
        display: inline-block;
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 15px;
        padding: 10px;
        width: 100px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .button2 span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button2 span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .button2:hover span {
        padding-right: 25px;
    }

    .button2:hover span:after {
        opacity: 1;
        right: 0;
    }
    </style>





</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
        



        <?php  if (isset($_SESSION['username'])) : ?>

        <div class="container">
            <a class="navbar-brand" href="#">talksofcode</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    

                </ul>

            </div>

        </div>
        <?php endif ?>




        <?php  if (!isset($_SESSION['username'])) : ?>

        <div class="container">
            <a class="navbar-brand" href="#">talksofcode</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>

                </ul>

            </div>
        </div>
        <?php endif ?>








        <div id="login">
            <button class="button2" style="vertical-align:middle"
                onClick="Javascript:window.location.href = 'login.php';" <?php if (isset($_SESSION['username'])) { ?>
                style="display: none" <?php } ?>><span>Log In </span></button>
        </div>


        <!--<button class="button2" style="vertical-align:middle"><span>Log In </span></button>-->

        <!--<div>
            <button class="button2" style="vertical-align:middle"><span>Logout </span></button>
            </div>-->





        <div style="padding-top:20px">


            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php 
          	echo $_SESSION['success']; 
              unset($_SESSION['success']);
          ?>
                </h3>
            </div>
            <?php endif ?>

            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>

            <script>
            document.getElementById("login").style.display = "none";
            </script>

            <p style="color: white;font-size:15px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong> <a
                    href="index.php?logout='1'">
                    <div>
                        <button class="button2" style="vertical-align:middle"><span>Logout </span></button>
                    </div>
                </a></p>


            <?php endif ?>
        </div>


    </nav>










    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <div class="home">
        <div class="home_background_container prlx_parent">
            <div class="home_background prlx" style="background-image:url(images/5.jpg)"></div>
        </div>
        <div class="home_content">
            <h1>Contact</h1>
        </div>
    </div>




    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- Contact Form -->
                    <div class="contact_form">
                        <div class="contact_title">Get in touch</div>

                        <div class="contact_form_container">
                            <form method="post" action="ContactProcess.php">


                                <input id="contact_form_name" class="input_field contact_form_name" type="text"
                                    name="name" placeholder="Name" required="required" data-error="Name is required.">

                                <input id="contact_form_email" class="input_field contact_form_email" type="text"
                                    name="email" placeholder="Email" required="required"
                                    data-error="Email is required.">

                                <textarea id="contact_form_message" class="text_field contact_form_message" type="text"
                                    name="message" placeholder="Message" required="required"
                                    data-error="Message is required."></textarea>

                                <button id="contact_send_btn" name="contact" type="submit"
                                    class="contact_send_btn trans_200" value="Submit">send message</button>


                            </form>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="about">
                        <div class="about_title">Join Courses</div>
                        <p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae
                            tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu
                            purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec
                            eros varius luctus.</p>

                        <div class="contact_info">
                            <ul>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    Blvd Libertad, 34 m05200 Arévalo
                                </li>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    0034 37483 2445 322
                                </li>
                                <li class="contact_info_item">
                                    <div class="contact_info_icon">
                                        <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>hello@company.com
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Google Map -->



        </div>
    </div>







    <!-- Footer -->

    <footer class="footer">
        <div class="container">

            <!-- Newsletter -->

            <div class="newsletter">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>Subscribe to newsletter</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_form_container mx-auto">
                            <form action="post">
                                <div
                                    class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                    <input id="newsletter_email" class="newsletter_email" type="email"
                                        placeholder="Email Address" required="required"
                                        data-error="Valid email is required.">
                                    <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
                                        value="Submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>




            <!-- Footer Content -->

            <div class="footer_content">
                <div class="row">

                    <!-- Footer Column - About -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo">
                                <img src="images/logo.png" alt="">
                                <span>course</span>
                            </div>
                        </div>

                        <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla,
                            vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor
                            lacus.</p>

                    </div>

                    <!-- Footer Column - Menu -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Menu</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">Home</a></li>
                                <li class="footer_list_item"><a href="#">About Us</a></li>
                                <li class="footer_list_item"><a href="courses.html">Courses</a></li>
                                <li class="footer_list_item"><a href="news.html">News</a></li>
                                <li class="footer_list_item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column - Usefull Links -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Usefull Links</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">Testimonials</a></li>
                                <li class="footer_list_item"><a href="#">FAQ</a></li>
                                <li class="footer_list_item"><a href="#">Community</a></li>
                                <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                                <li class="footer_list_item"><a href="#">Tuitions</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column - Contact -->

                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Contact</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    3450,North Vally,USA
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    0034 37483 2445 322
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>hello@company.com
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>


            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">

                <div class="footer_social ml-sm-auto">
                    <ul class="menu_social">
                        <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>