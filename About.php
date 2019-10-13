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
    <title>talksofcode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="CSS/style.css">


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



    @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #2E2B2B;
        font-family: 'Josefin Sans', sans-serif;
    }

    .wrapper {
        margin-top: 100px;
    }

    .wrapper h1 {
        font-size: 52px;
        margin-bottom: 100px;
        margin-top: 150px;
        text-align: center;

    }

    .team {
        display: flex;
        justify-content: center;
        width: auto;
        text-align: center;
        flex-wrap: wrap;
    }

    .team .team_member {
        background: #fff;
        margin: 25px;
        margin-bottom: 50px;
        width: 500px;
        padding: 20px;
        line-height: 20px;
        height: 400px;
        color: #8e8b8b;
        position: relative;
    }

    .team .team_member h3 {
        color: #81c644;
        font-size: 26px;
        margin-top: 50px;
    }

    .team .team_member p.role {
        color: #3d3535;
        margin: 12px 0;
        font-size: 12px;
        text-transform: uppercase;
    }

    .team .team_member .team_img {
        position: absolute;
        top: -50px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: #fff;
    }

    .team .team_member .team_img img {
        width: 90px;
        height: 90px;
        padding: 5px;
        border-radius: 100%;
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
                        <a class="nav-link" href="#">About</a>
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
                        <a class="nav-link" href="#">About</a>
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


    <div style="margin-top:500px;">

    <div class="wrapper">
        <h1 style="color:white; margin-bottom:150px;">Our Team</h1>
        <div class="team">
            <div class="team_member">
                <div class="team_img">
                    <img src="images/m1.jfif" alt="Team_image">
                </div>
                <h3 style="color:#E2465B">Abu Ubaida Akash</h3>
                <p class="role" style="color: #3d3535;">UI developer</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere
                    dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
            </div>
            <div class="team_member">
                <div class="team_img">
                    <img style="height: 100px;width:100px;"
                        src="https://cdn.dribbble.com/users/102974/screenshots/2726841/head_bob.gif" alt="Team_image">
                </div>
                <h3 style="color:#E2465B">Dewan Tanjil Hossain</h3>
                <p class="role" style="color: #3d3535;">Tester</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere
                    dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
            </div>

        </div>
    </div>

    

    </div>


</body>


</html>