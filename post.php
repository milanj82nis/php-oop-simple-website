<?php

require_once 'include/db.inc.php';
require_once 'include/class_autoloder.inc.php';

?>
<!doctype html>
<html lang="en">
  <head>
       <?php require_once 'include/__head.php'; ?>	  
	  <style>.blogShort{ border-bottom:1px solid #ddd;}
.add{background: #333; padding: 10%; height: 300px;}

.nav-sidebar { 
    width: 100%;
    padding: 8px 0; 
    border-right: 1px solid #ddd;
}
.nav-sidebar a {
    color: #333;
    -webkit-transition: all 0.08s linear;
    -moz-transition: all 0.08s linear;
    -o-transition: all 0.08s linear;
    transition: all 0.08s linear;
}
.nav-sidebar .active a { 
    cursor: default;
    background-color: #34ca78; 
    color: #fff; 
}
.nav-sidebar .active a:hover {
    background-color: #37D980;   
}
.nav-sidebar .text-overflow a,
.nav-sidebar .text-overflow .media-body {
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis; 
}

.btn-blog {
    color: #ffffff;
    background-color: #37d980;
    border-color: #37d980;
    border-radius:0;
    margin-bottom:10px
}
.btn-blog:hover,
.btn-blog:focus,
.btn-blog:active,
.btn-blog.active,
.open .dropdown-toggle.btn-blog {
    color: white;
    background-color:#34ca78;
    border-color: #34ca78;
}
 h2{color:#34ca78;}
 .margin10{margin-bottom:10px; margin-right:10px;}</style>
  </head>
  <body>
   <div class="container">
	   
	   
	   <div class="row">
	   
	   
	   <br><br><br>
	     <br><br><br>
	   
	   </div>
	   
	   
	 <div class="row">
		 
		 <?php require_once 'include/__navbar.php'; ?>
		
</div> <!-- ROW -->
	

	   <div class="row">
		 
		 
		 
		 

<div class="container">
     <div id="blog" class="row"> 
                
                  <div class="col-sm-2 paddingTop20">
            <nav class="nav-sidebar">
                <ul class="nav">
                    <li class="active"><a href="javascript:;"><span class="glyphicon glyphicon-star"></span> News</a></li>
                    <li><a href="javascript:;">Latest news</a></li>
                    <li><a href="javascript:;">Updates</a></li>
                    <li><a href="javascript:;">Training</a></li>
                    <li><a href="javascript:;">Nutrition</a></li>
                    <li><a href="javascript:;">Proteins</a></li>
                    <li><a href="javascript:;">Recipes</a></li>
                    <li><a href="javascript:;">Challenge</a></li>
                    <li class="nav-divider"></li>
                    <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i> Sign in</a></li>
                </ul>
            </nav>
                      <div><h2 class="add">Place for your add!</h2></div>
        </div>
		 
		 
	
               
		 
               <div class="col-md-12 gap10"></div>
             </div>
</div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	  </div><!-- container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>