<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Contact Us</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Demo CSS file not needed for the plugin -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link rel="stylesheet" href="../index_style.css">
	<!--	<link rel="stylesheet" href="../Scroll_image/index_style1.css">-->
		<!-- GRT Youtube Plugin CSS -->
		<link rel="stylesheet" href="../responsive_menu.css">
		<!-- footer-->
		<link rel="stylesheet" href="../footer.css">
		<link rel="stylesheet" href="../new.css">
		<link rel="stylesheet" href="../bmi.css">
        <link rel="stylesheet" href="../col.css">
        <link rel="stylesheet" href="../contact.css">
		<!-- ION Icons-->
		<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


	</head>
	<body>
		<header>
			<div class="menu-container">
				<div class="grt-menu-row">
					<div class="grt-menu-logo">
						<a href="../../NutraFit/index1.html"  class="grt-logo"><img src="../Images/logo/logo.png"></a>
					</div>
					<div class="grt-menu-right">
						<nav>
							<button class="grt-mobile-button"><span class="line1"></span><span class="line2"></span><span class="line3"></span></button>
							<ul class="grt-menu">
								<li><a href="../../NutraFit/index1.html"><i class="icon ion-md-home"></i> Home</a></li>
								<li class="grt-dropdown"><a><i class="icon ion-md-fitness"></i> Exercise</a>
									<ul class="grt-dropdown-list">
										<li><a href="../chest.html">Chest Wokout</a></li>
										<li><a href="../back.html">Back Workout</a></li>
										<li><a href="../legs.html">Legs Workout</a></li>
										<li><a href="../shoulder.html">Shoulder Workout</a></li>
										<li><a href="../arms.html">Arm Workout</a></li>
									</ul></li>
									<li><a href="../Yoga/yoga.html"><label><i class="icon ion-md-body"> </i> Yoga</label></a></li>
									<li><a href="../diet/diet/diet.html"><label><i class="icon ion-md-pizza"></i> Diet</label></a></li>
									<li><a href="../shop/shop.php"><label><i class="icon ion-md-cart"></i> Shop</label></a></li>
										<li class="grt-dropdown"><a><i class="icon ion-md-people"></i> My Account</a>
									<ul class="grt-dropdown-list">
										<li><a href="../SignIn/signin.html">Sign In</a></li>
										<li><a href="../SignUp/signup.html">Create an Account</a></li>
									
									</ul>
								</li>
								<li class="active"><a href="contact.php"><i class="icon ion-md-contacts"></i> contact</a></li>								
							</ul>
					</div>
				</div>
			</div>
		</header>
<br><br><br><br><br>
<h1><center>⭕️CONTACT US⭕️ :</center></h1> 
<div class="container">
    <form action="contactact.php" method="POST">
  
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.."required >
  
      <label for="country">Country</label>
      <select id="country" name="country" required>
        <option value="India">India</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
  
      <label for="description">Description</label>
      <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="Submit" name="contactsubmit" onclick="alert('Information Sent Successfully ')">
  
    </form>
  </div>
  <footer>
		<div class="row">
			<div class="col span-1-of-2">
				<ul class="footer-nav">
					<li><a href="../../NutraFit/aboutus/aboutus.html"><h4><i class="icon ion-md-person"></i> About us</h4></a></li>
					<li><a href="../shop/shop.php"><h4><i class="icon ion-md-cart"></i> Shop</h4></a></li>
					<li><a href="../../NutraFit/Contact/contact.php"><h4><i class="icon ion-md-people"></i> Contact</h4></a></li>
					<li><a href="../diet/diet/diet.html"><h4><i class="icon ion-md-pizza"></i> Diet</h4></a></li>
					<li><a href="../../NutraFit/yoga/yoga.html"><h4><i class="icon ion-md-body"></i> Yoga</h4></a></li>
					</ul>
		</div>
		</div>
			
			<div class="row">
			<br><br><br><br>
			<p>
			  <h5>Copyright &copy; 2019 by Nutrient&Fitness. All Rights reserved.</h5>
			</p>
		
		</div>
	  
	</footer>
  </body>
 </html>