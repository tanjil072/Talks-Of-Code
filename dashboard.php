<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>talksofcode</title>

    <meta name="description" content="A three dimensional and space efficient menu created with JavaScript and CSS 3.">
    <meta name="author" content="Hakim El Hattab">



    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>

    <link rel="stylesheet" href="CSS/styleDashboard.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
    <meta name="keywords"
        content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="CSS/jquery.jscrollpane.custom.css" />
    <link rel="stylesheet" type="text/css" href="CSS/bookblock.css" />
    <link rel="stylesheet" type="text/css" href="CSS/custom.css" />
    <script src="js/modernizr.custom.79639.js"></script>
</head>

<body>

    <div class="meny">
        <h2>More Experiments</h2>
        <ul>
            <li><a style="color:white" href="index.php">Home</a></li>
            <li>Community</li>
            <li><a style="color:white" href="profile.php">Profile</a></li>
            <li><a style="color:white" href="contact.php">Contact</a></li>
            <li>FAQ</li>
            <li>Contact Us</li>

        </ul>
    </div>

    <div class="meny-arrow"></div>

    <div class="contents">
        <div class="tracksRow">
            <div style="padding-left:30px; padding-top:20px;" class="skillsContent">
                <a href="">
                    <div class="skillsInner">
                        <h5 class="skillsHeader">LANGUAGE PROFICIENCY</h5>
                        <div class="skillsContent">
                            <h3 class="base-card-title" title="C">C</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <h3 style="padding-left:30px;padding-top:10px;" class="cardsTitle">Explore Talks-Of-Code Skills</h3>
        <div class="container selectDiv">
            <div class="row">
                <div class="col-md-4">
                    <div class="secdiv">
                        <h5 class="cardsHeader" style="margin-bottom: 20px">Language Proficiency</h5>
                        <div class="languageInfo">
                            <div class="trackName"><b><a href="dboard.php">C</a></b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>C#</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>C++</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>Java</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>Python</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="secdiv">
                        <h5 class="cardsHeader" style="margin-bottom: 20px">Problem Solving</h5>
                        <div class="languageInfo">
                            <div class="trackName"><b>Data Structures</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>Algorithms</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>Mathemetics</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="secdiv">
                        <h5 class="cardsHeader" style="margin-bottom: 20px">Specialized Skills</h5>
                        <div class="languageInfo">
                            <div class="trackName"><b>Artificial Intelligence</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>SQL</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>Databases</b></div>
                        </div>
                        <div class="languageInfo">
                            <div class="trackName"><b>Regex</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <script src="js/meny.js"></script>
    <script>
    // Create an instance of Meny
    var meny = Meny.create({
        // The element that will be animated in from off screen
        menuElement: document.querySelector('.meny'),

        // The contents that gets pushed aside while Meny is active
        contentsElement: document.querySelector('.contents'),

        // [optional] The alignment of the menu (top/right/bottom/left)
        position: Meny.getQuery().p || 'left',

        // [optional] The height of the menu (when using top/bottom position)
        height: 200,

        // [optional] The width of the menu (when using left/right position)
        width: 260,

        // [optional] Distance from mouse (in pixels) when menu should open
        threshold: 40,

        // [optional] Use mouse movement to automatically open/close
        mouse: true,

        // [optional] Use touch swipe events to open/close
        touch: true
    });

    if (Meny.getQuery().u && Meny.getQuery().u.match(/^http/gi)) {
        var contents = document.querySelector('.contents');
        contents.style.padding = '0px';
        contents.innerHTML = '<div class="cover"></div><iframe src="' + Meny.getQuery().u +
            '" style="width: 100%; height: 100%; border: 0; position: absolute;"></iframe>';
    }
    </script>


    <script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script src="js/jquery.jscrollpane.min.js"></script>
    <script src="js/jquerypp.custom.js"></script>
    <script src="js/jquery.bookblock.js"></script>
    <script src="js/page.js"></script>
    <script>
    $(function() {

        Page.init();

    });
    </script>

</body>

</html>