            <?php include 'include/pre-head.php'; ?>
	    <?php include 'include/pre-body.php'; ?>

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Contact</h1>
                <p>Me, myself, and I... but more likely the help team...</p>
            </div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>The quick way</h2>
                    <p>Send an Email:</p>
                    <?php
                    	$msg = $_GET['msg'];
                    	if($msg=='true')
                    	{
                    		echo '<p>Message sent!</p>';
                    	}
                    	else if($msg=='false')
                    	{
                    		echo '<p>Message delivery failed...</p>';
                    	}
                    ?>
                    <form class="form pull-left" action="send-mail.php" method="post">
                    	<?php 
  				if(!isset($_SESSION['sessionid'])) 
  				{
   					echo '<input class="span2" type="email" name="email" placeholder="address@provider.com" title="Your email address" required><br>';
  				} 
  				else 
  				{
   					echo '<p>'.$_SESSION['email'].'<p>';
  				}
			?> 
                    	<textarea class="span4" type="text" name="content" rows=10 required></textarea>
                        <button type="submit" class="btn">Send</button>
                   </form> 
                </div>
                <div class="span4">
                    <h2>Come see us</h2>
                    <a href="http://www.openstreetmap.org/"><img src="img/map.png" width=300px height=300px></a>
               </div>
                <div class="span4">
                    <h2>The old way</h2>
                    <hr>
                    <p>The University of Manchester</P>
                    <p>Oxford Road</P>
                    <p>Manchester</P>
                    <p>M13 9PL</P>
                </div>
            </div>

            <?php include 'include/post.php'; ?>
