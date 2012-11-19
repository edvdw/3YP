		<?php include 'include/pre-head.php'; ?>
		<?php include 'include/usercheck.php'; ?>
		<?php include 'include/pre-body.php'; ?>

            	<!-- Main hero unit for a primary marketing message or call to action -->
            	<div class="hero-unit">
               		<h1>Sign up!!</h1>
                	<p>Benefit from progress tracking and much more...</p>
            	</div>

                <div class="row">
        		<?php
	        		$error = $_GET['error'];
	        		if($error==404.1)
	        		{
					echo '<div class="span3"><p>Oops, an error occured.</p></div> ';
	        		}
	        		else if($error==404.2)
	        		{
					echo '<div class="span3"><font color="red">The username was already used, please select another.</font></div> ';
	        		}
        		?>
                	<div class="span3">
                		<form class="form pull-left" action="login/registration.php" method="post">
                           		<div id="status"></div>
                           		<label>User Details</label>
                           		<input class="span2" type="text" id="username" name="username" placeholder="username" pattern=".{4,12}" title="4 to 12 characters" required><br>
                           		<input class="span2" type="password" name="password" placeholder="password" pattern=".{4,12}" title="4 to 12 characters" required><br>
                           		<input class="span2" type="email" name="email" placeholder="address@provider.com" title="Your email address" required><br>
                           		<input class="span2" type="tel" name="phonenumber" placeholder="07500124578" title="UK Phone Number" pattern="\d{11}"><br>
                           		
                           		</div><div class="span3">
                           		
                           		<label>Date of Birth</label>
                           		<input class="span2" type="date" name="birthday" placeholder="Date of Birth" title="Date of Birth" required><br>
                           		
                           		<label>Security Question</label>
                           		<input class="span2" type="text" name="question" placeholder="Security Question" title="Security Question" pattern=".{10,20}" required><br>
                           		<input class="span2" type="text" name="answer" placeholder="Security Answer" title="Security Answer" pattern=".{10,20}" required><br>
                           		
                           		</div><div class="span3">
                           		
                           		<button type="submit" class="btn">Sign up</button>
                        	</form> 
                        </div>                    
            	</div>

                <?php include 'include/post.php'; ?>
