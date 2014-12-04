<?php

session_start();

?>

<?php

// The Cache Control Management , Set the Expires field to ensure cache destroys moment it is created

header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header('Expires: 0');

// Declare the variable $action used for the GET/POST simultaneous request.

function validate ($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
}

$action = validate($_POST['action']); // Set a switch case construct for the action variable


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

        <title>TEDx | Team</title>
  

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
                <img src="img/logo.png">
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
                                <li><a href="index.html">Home</a></li>
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
                                    <a href="#">Offline</a>
                                </div>
                                <div id="registerToggle"><button class="btn btn-ted">Register</button></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    <?php 
        // check if the variable is set to register 
    switch ($action) 
    {
        case 'contact':

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    ?>
   
        <div class="container" id="services" name="services">
            <br>
            <br>
            <div class="row">
                <h2 class="centered">Are you exci<span class="red">TED</span></h2>
                <hr>
                <br>
                <div class="col-lg-offset-2 col-lg-8">
                    <p><code>Sent:</code> Thanks <?php echo $_POST['name']; ?> !. We have recieved your mail.
                    </p>
                    <p>Thank you for co-operating with us, let us analyze at your message and we will get
                    back to you soon. We will mail you back to <?php echo $_POST['email']; ?>.</p>
  
                </div>
            </div>
            
            <div class="row">
                <h2 class="centered">Have anything to say</h2>
                <hr>
                <br>
            </div>
        </div>

            <?php
        }
            break;
        
        case 'register':

        if ($_SERVER['REQUEST_METHOD'] == 'POST' {

    ?>        
  <div class="container" id="services" name="services">
            <br>
            <br>
            <div class="row">
                <h2 class="centered"><span class="red">THANK YOU</span></h2>
                <hr>
                <br>
                <div class="col-lg-offset-2 col-lg-8">

                    <h4>Hey <?php echo $_POST['name']; ?> you have successfully filled the registration form ,so
                    an invitation is sent to the email address <a href="#"><?php echo $_POST['email']; ?></a> along
                    with a unique code which identifies that you have completed the registration .So keep that code 
                    along with you as it is necessary for communication purpose.</h4>

                    <h4><code>Note:</code> Don't Forget to Bring the ID card that you have mentioned in the Form with
                    number <?php echo $_POST['id']; ?> at the time of the Event.
                    </h4>   
  
                </div>
            </div>
            

        </div>

        <?php  
            }
            break;
        
        ?>

       <?php 

        default:

            if (condition) 
            {
        
        ?>

          <div class="container" id="services" name="services">
            <br>
            <br>
            <div class="row">
                <h2 class="centered">Are you exci<span class="red">TED</span></h2>
                <hr>
                <br>
                <div class="col-lg-offset-2 col-lg-8">
                    <p><code>Success:</code> We have recieved your mail.
                    </p>
                    <p>Thank you for co-operating with us, let us analyze at your message and we will get
                    back to you soon.</p>
  
                </div>
            </div>
            
            <div class="row">
                <h2 class="centered">Have anything to say</h2>
                <hr>
                <br>
            </div>
        </div>
            
            <?php
         }    
            break;
    }

        ?>

 
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
