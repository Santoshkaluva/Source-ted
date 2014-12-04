<?php

session_start();

?>

<?php

// Now Let us write the Form Validation Part for the Registration Form 



?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset: UTF/8">
        <meta http-equiv="Cache-Control" content="no-cache , no-store , must-revalidate ">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <meta name="author" content="Akhil Pandey , Om Bhallamudi">
        <meta name="description" content="TEDx is a prestigious talk event hosted that
        which is independent of the TED events and is a great place where the ideas are
        talked about.">
        <meta name="keywords" content="TEDx , TEDx2015 , TEDx gitam university , TEDx GITAM University">

        <title>TEDx | Register</title>
  

    <link href="include/css/bootstrap.css" rel="stylesheet">
    <link href="include/css/prettyPhoto.css" rel="stylesheet">
    <link href="include/css/main.css" rel="stylesheet">
    <link href="include/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    
  </head>

  <body>

      <div class="container">
        <div class="highlight"></div>
        <div class="row">
            <div class="col-md-3">
                <img src="include/img/logo.png">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="dropdown">
                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">2015
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#Speakers">Speakers</a></li>
                                            <li><a href="#">Rules</a></li>
                                        </ul>
                                    </a>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="speakers.html">Speakers</a></li>
                                <li><a href="venue.html">Venue</a></li>
                                <li><a href="partners.html">Partners</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-4">
                           
                       </div>
                        
                        <div class="col-md-8">
                            <h2 id="startdate"><small>Join us for the next session on January</small><span class="red">10th</span><small>, 2015</small></h1>
                            <nav class="register" id="register-menu">
                                <div class="register-wrap">
                                    <a href="#">How to </a>
                                    <a href="index.php">Online </a>
                                    <a href="index.php">Offline</a>
                                </div>
                                <div id="registerToggle"><button class="btn btn-ted">Register</button></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

  <div class="container" >
            <br>
            <br>
            <div class="row">
                <h2 class="centered">Attend <span class="red">TEDxGITAMUniversity2015</span>, Inside <span class="red">Out</span></h2>
                <hr>
                <br>
                <div class="col-lg-offset-2 col-lg-8">
                    <h4>Registrations will be given on first-come basis and based on excellence. 
                    </h4> <br>
                    <h4>Fill the Registration details below we will get back to you in 24 hours, confirming your participation and providing the payment gateway.
                    </h4> <br>

					<h3 class="centered">							TICKETING INFORMATION </h3> <hr>

					<div class="row"><h3 class="pull-left">Type </h3>               <h3 class="centered" >Price </h3> </div>
						
					<div class="row"> <h5 class="pull-left">Student</h5>                  <h4 class="pull-right"><span class="red">2000 INR </span>(Need to have a valid college ID card on the day of the event)</h4></div>
                    <div class="row"> <h5 class="pull-left">Non student</h5>             <h4 class="pull-right"><span class="red">3500 INR </span>(Need to have any valid ID card on the day of the event).</h4></div>     

                  
  
                </div>
            </div>
            
            <div class="row">
            	<br>
            	<br>
                <h2 class="centered">Registration Form</h2>
                <hr>
                <br>
            </div>
        </div>


 <section id="main">
        <div class="container">
            <div class="boxrg end">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="centered">Details</h2>
                        <p>Please be specific to the form details and answer in breief. If Any thing wrong with the registration form <br>send us an email at <kbd><a href="mailto:tedxgitamuniversity@gmail.com">tedxgitamuniversity@gmail.com</a></kbd></p>
                        <div class="status alert alert-success" style="display: none"></div>
                        
                        <form id="registration-form" class="registration-form" name="registration-form" method="post" action="register.php" role="form">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-info">Please Give Your Complete Name</span>
                                    	<hr>
                                        <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                
                                <div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-warning">Specify Your an Email Addresss </span>
                                    	<hr>
                                        <input type="text" id="email" name="email" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                                
                                <div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-success">Type in your Contact Number</span>
                                    	<hr>
                                        <input type="text" id="phone" name="phone" class="form-control" required="required" placeholder="Phone No">
                                    </div>
                                </div>                                
                            
                                <div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-danger">Specify from which College/Institute or Organization you Belong</span>
                                        <hr>
                                        <input type="text" id="collorg" name="collorg" class="form-control" required="required" placeholder="College/Organization">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                            	<div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-info">Have you attended a TEDx Conference in the Past ?</span>
                                    	<hr>
                                        <input type="text" id="prev" name="prev" class="form-control" required="required" placeholder="I have / havenot.....">
                                    </div>
                                </div>  
                             </div>     

                             <div class="row">
                            	<div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-warning">What is your favorite TED talk that you have watched ?</span>
                                    	<hr>
                                        <input type="text" id="favtalk" name="favtalk" class="form-control" required="required" placeholder="TED Talk..">
                                    </div>
                                </div>  
                             </div>   

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group">
                                    <span class="label label-success">What is your opinion on TEDx Community ? </span>
                                    	<hr>
                                        <textarea name="opinion" id="opinion" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-lg">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>

<footer>
  <div class="container">
   <hr>
    <p class="centered">All Rights Reserved.&copy; <a target="_blank" href="https://www.facebook.com/TEDxGITAMUniversity" class="red">TEDxGITAMUniversity 2015</a></p>
  </div>
</footer>



    <script src="include/js/jquery.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/jquery.isotope.min.js"></script>
    <script src="include/js/jquery.prettyPhoto.js"></script>    
    <script src="include/js/main.js"></script>

  </body>
</html>
