<?php

session_start();

require 'config.php';

if(!isset($_SESSION['login_user']))
  header('Location: ' . LOGIN);

$user = $_SESSION['login_user'];

$sql = "SELECT * FROM " . DB_USERTABLE . " WHERE username = '$user'";
$result = mysqli_query($db_con,$sql);

$user = mysqli_fetch_array($result,MYSQLI_ASSOC);

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
     #dashboard {
       min-height: 100vh;
       background-color: #e9eaea;
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

<body id="top" class="menu-is-open">
  <header>
    <a id="header-menu-trigger" href="#0">
      <span class="header-menu-text"></span>
        <span class="header-menu-icon"></span>
    </a>
    <nav id="menu-nav-wrap">

			<a href="#0" class="close-button" title="close"><span>Close</span></a>

	   	<h6 style="color:white">DASHBOARD</h6>

			<ul class="nav-list">
				<li class="current"><a class="smoothscroll" href="" title="">Action</a></li>
				<li><a href="" title="">Another action</a></li>
				<li><a href="" title="">More action</a></li>
				<li><a href="" title="">Still more action</a></li>
				<li><a href="<?php echo LOGOUT ?>" title="">Logout</a></li>
			</ul>

		</nav>  <!-- end #menu-nav-wrap -->

  </header>
  <!-- home
  ================================================== -->
  <section id="dashboard">

   <div class="row">
     <div class="col-ten">
       <div class="intro">
         <h2 class="animate-this"> Welcome <?php echo $user['username'] ?>! </h2>
         <p class="lead animate-this"> <span>Personal Information</span></p>
         <p class="lead animate-this"></p>
       </div>
     </div> <!-- end col-full  -->
   </div> <!-- end about-wrap  -->

  </section> <!-- end about -->

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
