			<?php 
  				session_start();
  				
  				if(!isset($_SESSION['sessionid'])) 
  				{
   					include 'login/form-login.php';
  				} 
  				else 
  				{
   					include 'login/form-logout.php';
  				}
			?>                         
