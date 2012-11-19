                    <?php 
  				if(!isset($_SESSION['sessionid'])) 
  				{
   					echo '<p>You must be logged in to view account details.</p>';
  				} 
  				else 
  				{
   					include 'login/db.php';
   					$user=$_SESSION['username'];
   					$sql="SELECT username, email, phone_number FROM $table WHERE username='$user'";
   					$result=mysql_query($sql);
   					if (mysql_num_rows($result)==1)
					{
   						$row = mysql_fetch_array($result);
					
						echo '<p>Username: '.$row['username'].'<p>';
						echo '<p>Email: '.$row['email'].'<p>';
						echo '<p>Phone Number: '.$row['phone_number'].'<p>';
						echo '<p><a class="btn" href="#">Change details &raquo;</a></p>';
					}
					else
					{
    						echo '<p>We seem to be having difficulty retrieving your details.</p>';
					}
  				}
			?>  
