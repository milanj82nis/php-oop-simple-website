<?php

require_once 'include/db.inc.php';
require_once 'include/class_autoloder.inc.php';

?>
<!doctype html>
<html lang="en">
  <head>
   <?php require_once 'include/__head.php'; ?>	  
 <style>



	 
.contact-heading {
color: #FFF;
text-shadow: 2px 2px rgba(0, 0, 0, 0.43);
text-align: center;
}

label {
color: rgba(84, 84, 84, 0.8);
font-weight: 500;
padding-bottom: 2px;
}

.jumbotron {
border-top: 5px solid rgba(142, 68, 173, 0.63); 
-webkit-box-shadow: 0 12px 6px -6px rgba(0, 0, 0, 0.12);
-moz-box-shadow: 0 12px 6px -6px rgba(0, 0, 0, 0.12);
box-shadow: 0 12px 6px -6px rgba(0, 0, 0, 0.12);
}

.glyphicon {
 color:    
}   

.conversation-wrap
    {
        box-shadow: -2px 0 3px #ddd;
        padding:0;
        max-height: 400px;
        overflow: auto;
    }
    .conversation
    {
        padding:5px;
        border-bottom:1px solid #ddd;
        margin:0;

    }

    .message-wrap
    {
        box-shadow: 0 0 3px #ddd;
        padding:0;

    }
    .msg
    {
        padding:8px;
        border-bottom:1px solid rgba(240, 239, 239, 0.66);
        margin:0;
    }
    .msg-wrap
    {
        padding:10px;
        max-height: 400px;
        overflow: auto;

    }

    .time
    {
        color:#bfbfbf;
    }

    .send-wrap
    {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
        padding:10px;
        /*background: #f8f8f8;*/
    }

    .send-message
    {
        resize: none;
    }

    .highlight
    {
        background-color: #f7f7f9;
        border: 1px solid #e1e1e8;
    }

    .send-message-btn
    {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;

        border-bottom-right-radius: 0;
    }
    .btn-panel
    {
        background: #f7f7f9;
    }

    .btn-panel .btn
    {
        color:#b8b8b8;

        transition: 0.2s all ease-in-out;
    }

    .btn-panel .btn:hover
    {
        color:#666;
        background: #f8f8f8;
    }
    .btn-panel .btn:active
    {
        background: #f8f8f8;
        box-shadow: 0 0 1px #ddd;
    }

    .btn-panel-conversation .btn,.btn-panel-msg .btn
    {

        background: #f8f8f8;
    }
    .btn-panel-conversation .btn:first-child
    {
        border-right: 1px solid #ddd;
    }

    .msg-wrap .media-heading {
        color: #6498DD;
        font-weight: 500;
    }

    .msg-date
    {
        background: none;
        text-align: center;
        color:#aaa;
        border:none;
        box-shadow: none;
        border-bottom: 1px solid #ddd;
    }


 
    




.panel-footer {
padding: 10px 15px;
background-color: #f5f5f5;
border-top: 1px solid #ddd;
border-bottom-right-radius: 3px;
border-bottom-left-radius: 3px;
}


	  
	  </style>
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
		 
		 
		 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container" style="color: #FFF; text-shadow: 2px 2px #626262; text-align: center;">
              <h1>Welcome! Do you have any questions?</h1>
              <h4>Please fill out the form below</h4>
            </div>
          
          <div class="container">
          <div class="jumbotron" style="margin-top:20px; border-radius: 0px; background-color: #FCFCFC;">
          <div class="row">
        <div class="col-md-4">
              <form>
        <div class="form-group">
            <span class="glyphicon glyphicon-user" aria-hidden="true" ></span>
            <span class="sr-only"></span>
            <label for="inputName">Name</label>
            <input type="Name" class="form-control" id="inputNAME" placeholder="Please enter your full name">
        </div>
        <div class="form-group ">
            <span class="glyphicon glyphicon-earphone" aria-hidden="true" ></span>
            <span class="sr-only"></span>
            <label for="inputNumber">Phone</label>
            <input type="number" class="form-control" id="inputNumber" placeholder="Phone Number">
        </div>
            </form>
              </div>
        
              <div class="col-md-4">
            <form>
        <div class="form-group">
            <span class="glyphicon glyphicon-envelope" aria-hidden="true" ></span>
            <span class="sr-only"></span>
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <span class="glyphicon glyphicon-home" aria-hidden="true" ></span>
            <span class="sr-only"></span>
            <label for="inputAddress">Address</label>
            <input type="Address" class="form-control" id="inputAddress" placeholder="Full Address">
        </div>
            </form>
              </div>
        
              <div class="col-md-4" style="border-left: 2px solid #ccc">
                  
              </div>
              
      </div>
              <div class="row">
                  <div class="col-md-8">
                  <form>
        <div class="form-group">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true" ></span>
            <span class="sr-only"></span>
            <label for="inputMessage">Enter Your message</label>
                <textarea class="form-control" rows="5" id="message" placeholder="Enter your message"></textarea>
        
                </form>
                  
                  </div>
              </div>
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