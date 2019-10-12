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
    <title>Responsive design</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="CSS/style.css">


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
            <a class="navbar-brand" href="#">CREATIVO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
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
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    

                </ul>

            </div>

        </div>
        <?php endif ?>




        <?php  if (!isset($_SESSION['username'])) : ?>

        <div class="container">
            <a class="navbar-brand" href="#">CREATIVO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="courses.php">courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
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



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner4.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated bounceInRight" style="animation-delay: 1s">Web Development</h5>
                    <p class="animated bounceInLeft" style="animation-delay: 2s">You can learn web development from here
                    </p>
                    <p class="animated bounceInRight" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner6.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated slideInDown" style="animation-delay: 1s">Web design</h5>
                    <p class="animated fadeInUp" style="animation-delay: 2s">Learn web designing easily</p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner9.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated zoomIn" style="animation-delay: 1s">Digital Marketing</h5>
                    <p class="animated fadeInLeft" style="animation-delay: 2s">Its an eassy way to learn digital
                        marketing</p>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
                </div>
            </div>
        </div>




        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>






    <div class="wrapper">

        <div class="content">
            <!-- card -->


            <div class="card">
                <div class="icon"><i class="material-icons md-36">face</i></div>
                <p class="title">Profile</p>
                <p class="text">Click to see or edit your profile page.</p>
            </div>

            <!-- end card -->
            <!-- card -->
            <div class="card">

                <div class="icon"><i class="material-icons md-36">favorite_border</i></div>
                <p class="title">Favourites</p>
                <p class="text">Check all your favourites in one place.</p>

            </div>
            <!-- end card -->
            <!-- card -->
            <div class="card">

                <div class="icon"><i class="material-icons md-36">alternate_email</i></div>
                <p class="title">Contacts</p>
                <p class="text">Add or change your contacts and links.</p>

            </div>
            <!-- end card -->

        </div>

    </div>


    <div class="register">

        <div class="container-fluid">

            <div class="row row-eq-height" style="margin-top: 200px">
                <div class="col-lg-6 nopadding">

                    <!-- Register -->

                    <div class="register_section d-flex flex-column align-items-center justify-content-center">
                        <div class="register_content text-center">
                            <h1 class="register_title">Register now and get a discount <span>50%</span> discount until 1
                                January</h1>
                            <p class="register_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla,
                                vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.
                                Aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempo.</p>
                            <div class="button button_1 register_button mx-auto trans_200"><a href="register.php">Register now</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 nopadding">

                    <!-- Search -->

                    <div class="search_section d-flex flex-column align-items-center justify-content-center">
                        <div class="search_background" style="background-image:url(images/search_background.jpg);">
                        </div>
                        <div class="search_content text-center">
                            <h1 class="search_title">Search for your course</h1>
                            <form id="search_form" class="search_form" action="post">
                                <input id="search_form_name" class="input_field search_form_name" type="text"
                                    placeholder="Course Name" required="required" data-error="Course name is required.">
                                <input id="search_form_category" class="input_field search_form_category" type="text"
                                    placeholder="Category">
                                <input id="search_form_degree" class="input_field search_form_degree" type="text"
                                    placeholder="Degree">
                                <button id="search_submit_button" type="submit" class="search_submit_button trans_200"
                                    value="Submit">search course</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- Services -->

    <div class="services page_section">

        <div class="container" style="margin-top: 100px">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>

            <div class="row services_row">

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/earth-globe.svg" alt="">
                    </div>
                    <h3>Online Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/exam.svg" alt="">
                    </div>
                    <h3>Indoor Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/books.svg" alt="">
                    </div>
                    <h3>Amazing Library</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/professor.svg" alt="">
                    </div>
                    <h3>Exceptional Professors</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/blackboard.svg" alt="">
                    </div>
                    <h3>Top Programs</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/mortarboard.svg" alt="">
                    </div>
                    <h3>Graduate Diploma</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc.
                        Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

            </div>
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