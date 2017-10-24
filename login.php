<?php

session_start();

require 'config.php';

//If logged in then redirect

if(isset($_SESSION['login_user']))
  header('Location: '.LOGIN_SUCCESS);

//Execute on form submission

if($_SERVER["REQUEST_METHOD"] == "POST") {


  //SANITIZE input fields here
  $username = mysqli_real_escape_string($db_con,$_POST['email']);

  $password = mysqli_real_escape_string($db_con,$_POST['password']);

  //Query to execute
  $sql = "SELECT id FROM " . DB_USERTABLE . " WHERE username = '$username' and password = '$password'";
  $result = mysqli_query($db_con,$sql);

  //Uncomment code below for debugging
  // if(!$result)
  //   echo("Error description: " . mysqli_error($db_con));

  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);

  // If result matched $username and $password, table row count must be 1

  if($count == 1) {

     //Login successful
     $_SESSION['login_user'] = $username;

     header("location: ".LOGIN_SUCCESS);
  }else {
     $error = "Your Login email or Password is invalid";
  }
}



?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
  <meta charset="utf-8">
  <meta property="og:title" content="Text Particles" />
  <meta property="og:description" content="Some cool canvas pixel manipulation" />
  <meta property="og:image" content="http://william.hoza.us/images/text-small.png" />
	<title>Fahemni</title>
	<meta name="description" content="">
	<meta name="author" content="">


   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">
   <link rel="stylesheet" href="css/main.css">
   <style media="screen">

      #wrapper {
        background-color: #111111;
        background-image: url(images/contact-bg.jpg);
        background-repeat: no-repeat;
        background-position: center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        padding: 12rem 0 12rem
      }

     .white-panel {
       background-color: #fff;
       border-radius: 3px;
       padding: 40px;
     }

     .center {
       display: flex;
       justify-content: center;
       align-items: center;
     }
   </style>
   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<script src="js/jquery-2.1.3.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- login
   ================================================== -->
   <section id="wrapper">
		<div class="row narrow section-intro with-bottom-sep animate-this">
      <!-- white-panel -->
   		<div class="col-twelve white-panel">
   			<h1>Log In.</h1>
        <hr>
        <!-- form -->
        <form method="post" action="login.php">

           <div class="row">
              <div class="col-full tab-full">
                <div class="center">
                  <input name="email" type="email" id="contactEmail" placeholder="Email" value="" required="">
                </div>
              </div>
           </div>

          <div class="row">
             <div class="col-full tab-full">
               <div class="center">
                 <input name="password" type="password" id="contactEmail" placeholder="Password" value="" required="">
               </div>
             </div>
             <?php if(isset($error)): ?>
               <span style="color:red; display:block"><?php echo $error; ?></span>
             <?php endif; ?>
          </div>
           <div class="form-field">
              <button class="button-primary">Login</button>

              <div id="submit-loader">
                <div class="text-loader">Logging in...</div>
                <div class="s-loader">
                  <div class="bounce1"></div>
                  <div class="bounce2"></div>
                  <div class="bounce3"></div>
                </div>
              </div>
           </div>

      </form> <!-- end form -->

      </div>
   	</div> <!-- end white-panel -->


	</section> <!-- end login -->


   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script
   ================================================== -->
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
