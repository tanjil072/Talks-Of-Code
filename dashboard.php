<!doctype html>
<html>

<head>
    <meta name="viewprot" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <title>talksofcode</title>
    <!-- <link rel="stylesheet" href="CSS/styleDashboard.css"> -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fullscreen Pageflip Layout with BookBlock</title>
    <meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
    <meta name="keywords"
        content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.custom.css" />
    <link rel="stylesheet" type="text/css" href="css/bookblock.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <script src="js/modernizr.custom.79639.js"></script>

    <style>
    html,
    body {
        height: 100%;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: tahoma;
        line-height: 1.7;
        perspective-origin: 0% 50%;
        perspective: 800px;
        background: #21212d;
    }

    nan,
    main {
        transition: transform 150ms ease-out;
    }

    nav {
        z-index: 100;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        width: 16em;
        background-color: #353441;
        transform: translateX(-16em);
    }

    nav.menu-active {
        transform: translateX(0);
    }

    nav.menu-hover {
        transform: translateX(-15em);
    }

    nav h1 {
        z-index: 100;
        display: block;
        position: absolute;
        top: 0;
        right: -65px;
        height: 60px;
        width: 65px;
        line-height: 60px;
        font-size: 0.8em;
        font-weight: 300;
        letter-spacing: 1px;
        color: white;
        text-transform: uppercase;
        text-align: center;
        background-color: #353441;
        cursor: pointer;
    }

    nav h1:hover {
        color: #353441;
        background: white;
    }

    nav ul {
        margin: 0;
        padding: 0;
    }

    nav li {
        display: inline-block;
        padding: 0 1em;
        width: 100%;
        height: 60px;
        color: #9dc6d1;
        line-height: 60px;
        background-color: #353441;
        transition: all 0.5s ease-in;
    }

    nav li:nth-of-type(2n) {
        background-color: #3a3947;
    }

    nav li:hover {
        background: orangered;
        color: white;
    }

    main {
        z-index: 0;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        display: flex;
        align-items: center;
        overflow: hidden;
        background-color: #ced5e2;
        transform-origin: 0% 50%;
        background-size: cover;
    }

    main:after {
        content: '';
        display: block;
        position: absolute;
        z-index: 1;
        left: 0;
        bottom: 0;
        right: 0;
        top: 0;
        background: linear-gradient(to right, transparent, rgba(33, 33, 45, .5));
        visibility: hidden;
        opacity: 0;
        transition: opacity 150ms ease-out, visibility 0s 150ms;
    }

    main.menu-active {
        border-radius: 0.001px;
        transform: translateX(16em) rotateY(15deg);
    }

    main.menu-active:after {
        visibility: visible;
        opacity: 1;
        transition: opacity 150ms ease-out, visibility 0s;
    }

    main.menu-hover {
        border-radius: 0.001px;
        transform: translateX(1em) rotateY(1deg);
    }

    main section {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        padding: 1em 4em;
        max-width: 1170px;
        overflow: auto;
        background-color: rgba(255, 255, 255, .5);
    }
    </style>
</head>






<body>


    <nav class="menu-activea">


        <h1><img src="images/menu.png"></h1>
        <ul>
            <li>Home</li>
            <li>Community</li>
            <li>Practice</li>
            <li>Profile</li>
            <li>FAQ</li>
            <li>Contact Us</li>
        </ul>
    </nav>





    <main>


    </main>



    









    <script>
    (function() {
        var nav = $('nav'),
            menu = $('nav h1'),
            main = $('main'),
            open = false,
            hover = false;

        menu.on('click', function() {
            opan = !open ? true : false;
            nav.toggleClass('menu-active');
            main.toggleClass('menu-active');
            nav.removeClass('menu-hover');
            main.removeClass('menu-hover');
            console.log(open);
        });
        menu.hover(
            function() {
                if (!open) {
                    nav.addClass('menu-hover');
                    nav.removeClass('menu-hover');
                }
            },
            function() {
                nav.removeClass('menu-hover');
                main.removeClass('menu-hover');
            }
        );
    })();
    </script>






















    <!-- <header>
            <img src="images/banner5.jfif" class="banner">
            <a href="" class="logo"><img src="images/templogo.png"></a>
            <nav>
                <ul>
                    <li><a href="#" class="active">Dashboard</a></li>
                    <li><a href="#">Languages</a></li>
                    <li><a href="#">Practice</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Profile</a></li>    
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <p>vuyyyyvbgcvyuvghyhvy<br>fdvgbrdfuvndrfgubgidtne<br>uirgfruwhrw9ur789wtgfr8ihrwg89e5rhg90<br></p>
        </section>
        <script 
        src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
              crossorigin="anonymous"></script>
        <script type="text/javascript">
        $(window).scroll(function(){
            var scroll =$(window).scrollTop();
            if(scroll>0){
                $("header").addClass('scrolled');
            }
            else{
                $("header").removeClass('scrolled');
            }
        })
        </script> -->
</body>

</html>