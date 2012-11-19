            <?php include 'include/pre-head.php'; ?>
	    <?php include 'include/pre-body.php'; ?>

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Hello, world!</h1>
                <p>Learn some interesting aspects of the computing world.</p>
                <p><a class="btn btn-primary btn-large" href="about.php">Learn more &raquo;</a></p>
            </div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Play</h2>
                    <p>Play computer science topic games.</p>
                    <p><a class="btn" href="games.php">View details &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Learn</h2>
                    <p>Read up on science articles, you never know enough...</p>
                    <p><a class="btn" href="articles.php">View details &raquo;</a></p>
               </div>
               <div class="span4">
                   <?php 
  			if(!isset($_SESSION['sessionid'])) 
  			{
   				echo '<h2>Sign up</h2>';
   				echo '<p>There are benefits to joining the site.</p>';
   				echo '<p><a class="btn" href="register.php">Details &raquo;</a></p>';
  			} 
  			else 
  			{
   				echo '<h2>Account</h2>';
   				echo '<p>View your account information.</p>';
   				echo '<p><a class="btn" href="account.php">Details &raquo;</a></p>';
  			}
			?>  
                </div>
            </div>

            <?php include 'include/post.php'; ?>
