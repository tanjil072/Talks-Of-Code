<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>talksofcode</title>

		<meta name="description" content="A three dimensional and space efficient menu created with JavaScript and CSS 3.">
		<meta name="author" content="Hakim El Hattab">

		

		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="CSS/demo.css">


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Fullscreen Pageflip Layout with BookBlock</title>
		<meta name="description" content="Fullscreen Pageflip Layout with BookBlock" />
		<meta name="keywords" content="fullscreen pageflip, booklet, layout, bookblock, jquery plugin, flipboard layout, sidebar menu" />
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





		<?php

$pdo = new PDO('mysql:host=localhost;dbname=signup', 'root', '');

$q = $pdo->query('select Title,Details from tutorials');
$r = $q->fetchAll();


//echo $r[0]['Title'];

?>




		<div class="meny-arrow"></div>

		<div class="contents">

			
				<div id="container" class="container">	

						<div class="bb-custom-wrapper">
							<div id="bb-bookblock" class="bb-bookblock">
								<div class="bb-item" id="item1">
									<div class="content">
										<div class="scroller">
											<h2><?php echo $r[0]['Title']; ?></h2>
											<p><?php echo $r[0]['Details']; ?></p>
			
			
											<p><em>From <a href="http://www.gutenberg.org/ebooks/41595" target="_blank">"The Funny Side of Physic"</a> by A. D. Crabtre</em></p>
										</div>
									</div>
								</div>
								<div class="bb-item" id="item2">
									<div class="content">
										<div class="scroller">
											<h2><?php echo $r[1]['Title']; ?></h2>
											<p><?php echo $r[1]['Details']; ?></p>
			
											
			
											<p><em>From <a href="http://www.gutenberg.org/ebooks/41595" target="_blank">"The Funny Side of Physic"</a> by A. D. Crabtre</em></p>
										</div>
									</div>
								</div>
								<div class="bb-item" id="item3">
									<div class="content">
										<div class="scroller">
											<h2><?php echo $r[2]['Title']; ?></h2>
											<p><?php echo $r[2]['Details']; ?></p>
			
											
			
											<p><em>From <a href="http://www.gutenberg.org/ebooks/41595" target="_blank">"The Funny Side of Physic"</a> by A. D. Crabtre</em></p>
										</div>
									</div>
								</div>
								<div class="bb-item" id="item4">
									<div class="content">
										<div class="scroller">
											<h2><?php echo $r[3]['Title']; ?></h2>
											<p><?php echo $r[3]['Details']; ?></p>
			
											
			
											<p><em>From <a href="http://www.gutenberg.org/ebooks/41595" target="_blank">"The Funny Side of Physic"</a> by A. D. Crabtre</em></p>
										</div>
									</div>
								</div>
								<div class="bb-item" id="item5">
									<div class="content">
										<div class="scroller">
											<h2><?php echo $r[4]['Title']; ?></h2>
											<p><?php echo $r[4]['Details']; ?></p>
			
											
											<p><em>From <a href="http://www.gutenberg.org/ebooks/41595" target="_blank">"The Funny Side of Physic"</a> by A. D. Crabtre</em></p>
										</div>
									</div>
								</div>
							</div>
							
							<nav>
								<span id="bb-nav-prev">&larr;</span>
								<span id="bb-nav-next">&rarr;</span>
							</nav>
			
							
			
						</div>
							
					</div>


		</div>



			

		<script src="js/meny.js"></script>
		<script>
			// Create an instance of Meny
			var meny = Meny.create({
				// The element that will be animated in from off screen
				menuElement: document.querySelector( '.meny' ),

				// The contents that gets pushed aside while Meny is active
				contentsElement: document.querySelector( '.contents' ),

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

			if( Meny.getQuery().u && Meny.getQuery().u.match( /^http/gi ) ) {
				var contents = document.querySelector( '.contents' );
				contents.style.padding = '0px';
				contents.innerHTML = '<div class="cover"></div><iframe src="'+ Meny.getQuery().u +'" style="width: 100%; height: 100%; border: 0; position: absolute;"></iframe>';
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