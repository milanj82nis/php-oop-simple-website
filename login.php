<?php

require_once 'include/db.inc.php';
require_once 'include/class_autoloder.inc.php';
if( isset($_SESSION['logged'])){
	
	header('Location:index.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
      <?php require_once 'include/__head.php'; ?>	  

  </head>
  <body>
   <div class="container">
	   
	   
	   <div class="row">
	   
	   
	   <br><br><br>
	     <br><br><br>
	   
	   </div>
	   
	   
	 <div class="row">
		 
		 
 <?php require_once 'include/__navbar.php'; ?></div> <!-- ROW -->
	

	   <div class="row">
		 
		 
	
		 <div class="col-md-6">
    <div class="form-area"> 
		<?php
		try {
			


			if( isset( $_POST['login'])){
					$user = new User;	
					
					$password = $_POST['password'];
					$email = $_POST['email'];
					
					echo $user -> userLogin( $email , $password );
				
			}
		
			
			
			
		} catch( Exception $e ){
			
			echo $e -> getMessage();
		}
		
		
		?>
		
		
		
        <form role="form" method="POST" action="login.php">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Login form</h3>
    				
			
					<div class="form-group">
						<input type="email" class="form-control"  name="email" placeholder="Email" >
					</div>
					<div class="form-group">
						<input type="password" class="form-control"  name="password" placeholder="Password" >
					</div>
					
			

			
        <button type="submit" name="login" class="btn btn-primary pull-right">Login</button>
        </form>
    </div>
</div>
		 </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	  </div><!-- container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>