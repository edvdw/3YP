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
                            <li><a href="research.php">Research</a></li>
                            <li class="dropdown">
                                <a href="games.php" class="dropdown-toggle" data-toggle="dropdown">Games<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="games.php">All Games</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Categories</li>
                                    <li><a href="games.php#ArticleBased">Article Based</a></li>
                                    <li><a href="games.php#FactBased">Fact Based</a></li>
                                    <li><a href="games.php#StandAlone">Stand Alone</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="games.php" class="dropdown-toggle" data-toggle="dropdown">The Site<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <!-- FORM -->                        
                        <?php include 'session.php' ?>
                        <!-- ENDS FORM --> 
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ENDS MENU -->
