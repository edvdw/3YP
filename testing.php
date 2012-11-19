<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Computing 101</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="icon" href="img/favicon.ico">

	        <!-- HEADLINKS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            
            
            
            



        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">
        
        
        
        

        
        
        <!-- Add jQuery library -->
	<script type="text/javascript" src="plugins/fancybox/lib/jquery-1.8.2.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.js?v=2.1.2"></script>
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/source/jquery.fancybox.css?v=2.1.2" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */
	</script>
        <style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	
        

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
        
        <!-- ENDS HEADLINKS -->
	
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

	        <!-- MENU -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="index.php">Computing 101</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li><a href="articles.php">Research</a></li>
                            <li><a href="facts.php">Facts</a></li>
                            <li class="dropdown">
                                <a href="games.php" class="dropdown-toggle" data-toggle="dropdown">Games<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="games.php">All Games</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Article Based</li>
                                    <li><a href="games/game1/game1.html">Game1</a></li>
                                    <li><a href="games/game2/game2.html">Game2</a></li>
                                    <li class="nav-header">Fact Based</li>
                                    <li><a href="games/game3/game3.html">Game3</a></li>
                                    <li><a href="games/game4/game4.html">Game4</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Stand Alone</li>
                                    <li><a href="games/game5/game5.html">Game5</a></li>
                                    <li><a href="games/game6/game6.html">Game6</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        
                        <!-- FORM -->                        
                        <?php include 'session.php' ?>
                        <!-- ENDS FORM --> 
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ENDS MENU -->

        <div class="container">

            <div class="hero-unit">






            </div>

            <hr>

	    <!-- FOOTER -->
            <footer>
                <p>&copy; Student 2012-2013</p>
            </footer>
	    <!-- ENDS FOOTER -->

        </div> <!-- /container -->

	<!-- FOOTLINKS -->
        

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
        <!-- ENDS FOOTLINKS -->

    </body>
</html>
