<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: ../SignIn/signin.html");
  }
?><!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Shop</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Demo CSS file not needed for the plugin -->
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
		<link rel="stylesheet" href="../index_style.css">
		<link rel="stylesheet" href="../Scroll_image/index_style1.css">
		<!-- GRT Youtube Plugin CSS -->
		<link rel="stylesheet" href="../responsive_menu.css">
		<!-- footer-->
		<link rel="stylesheet" href="../footer.css">
		<link rel="stylesheet" href="../new.css">
		<link rel="stylesheet" href="../bmi.css">
		<link rel="stylesheet" href="../col.css">
		<!-- ION Icons-->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	</head>
	<body>
		<header>
			<div class="menu-container">
				<div class="grt-menu-row">
					<div class="grt-menu-logo">
						<a href="#"  class="grt-logo"><img src="../Images/logo/logo.png"></a>
					</div>
					<div class="grt-menu-right">
						<nav>
							<button class="grt-mobile-button"><span class="line1"></span><span class="line2"></span><span class="line3"></span></button>
							<ul class="grt-menu">
								<li><a href="../index1.html"><i class="icon ion-md-home"></i> Home</a></li>
								<li class="grt-dropdown"><a><i class="icon ion-md-fitness"></i> Exercise</a>
									<ul class="grt-dropdown-list">
										<li><a href="../chest.html">Chest Wokout</a></li>
										<li><a href="../back.html">Back Workout</a></li>
										<li><a href="../legs.html">Legs Workout</a></li>
										<li><a href="../shoulder.html">Shoulder Workout</a></li>
										<li><a href="../arms.html">Arm Workout</a></li>
									</ul></li>
									<li><a href="../yoga.html"><label><i class="icon ion-md-body"> </i> Yoga</label></a></li>
									<li><a href="../diet/diet/diet.html"><label><i class="icon ion-md-pizza"></i> Diet</label></a></li>
                  <li class="active"><a href="../shop/shop.html"><label><i class="icon ion-md-cart"></i> Shop</label></a></li>
                  <?php
                    include_once '../dbconn.php';
                    if(isset($_SESSION['username'])){
                      $username = $_SESSION['username'];
                      $getuser = "SELECT * FROM users WHERE username='$username'";
                      $getuserresult = mysqli_query($db, $getuser);
                      $getuserrow = mysqli_fetch_assoc($getuserresult);
                      echo '
                      <li class="grt-dropdown"><a><i class="icon ion-md-people"></i> welcome '.$getuserrow['fname'].'</a>
                    <ul class="grt-dropdown-list">
                      <li><a href="../SignIn/logoutact.php">Sign Out</a></li>
                    </ul>
                  </li>';
                    } else{
                      echo '
                      <li class="grt-dropdown"><a><i class="icon ion-md-people"></i> My Account</a>
                    <ul class="grt-dropdown-list">
                      <li><a href="../SignIn/signin.html">Sign In</a></li>
                      <li><a href="../SignUp/signup.html">Create an Account</a></li>
                    
                    </ul>
                  </li>';
                    }
                  ?>
								<li><a href="../contact.html"><i class="icon ion-md-contacts"></i> contact</a></li>								
							</ul>
					</div>
				</div>
			</div>
		</header>
<style>
    a{
        color:inherit;
    }
    h1{
        color: white;
        text-shadow: 15px;
        
        
    }
    
 
.container {
  position:relative;
  width: 100%;
}

.image {
  display: auto;
  width: 100%;
  height: auto;
  
    
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: rgba(0, 0, 0, 0.53);
 
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
    text-decoration: none;

}
    
.column1 {
  float: left;
  width: 25.33%;
  padding: 40px;
  margin-left: 5%;
}

.column2 {
  float: left;
  width: 25.33%;
  padding: 40px;
  margin-left: 5%;
}
    /* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}
</style>

</head>
    
    
    <br><br><br><br>
<body>
    
    <h1><center>Welcome to The Shop Section!</center></h1>
    <h2><center>⭕️Product Section!⭕️</center></h2>
    
<div class="row1">
  <div class="column1">
<div class="container">
    
   <img src="images/whey.jpg" alt="Avatar" class="image" ></a>
   
  <div class="overlay">
      <a class="text" onclick="AddtoCart('Whey Protien','Post Workout Drink that Helps to build muscle',4500);href='#cart'">Product: Whey Protien<br><br>Price: Rs.4500</a>
  
</div>
</div>
    </div>

  <div class="column1">
    <div class="container">
  <img src="images/bottle.jpg" alt="Avatar" class="image">
  <div class="overlay">
     <a class="text" onclick="AddtoCart('ON Protien Shakers','Premium Protien Shakers that can be used in any workout drinks!',250);href='#cart'">Product: ON Protien Shakers<br><br> Price: Rs.250</a></div>
  </div>
</div>
  

     <div class="column1">
    <div class="container">
  <img src="images/isolate.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <a class="text" onclick="AddtoCart('ON ISOLATE Protien','Contains higher Protien with less Carbs',5500);href='#cart'">Product: ON ISOLATE Protien<br><br> Price: Rs.5500</a></div>
  </div>
</div>
    </div>
    
     <div class="column1">
    <div class="container">
  <img src="images/casein.jpg" alt="Avatar" class="image">
  <div class="overlay">
   <a class="text" onclick="AddtoCart('ON Casien Protien','Better for preventing muscle protien breakdown.<br> Advised to drink before sleep',3750);href='#cart'">Product: ON Casein Protien<br><br> Price:3750</a></div>
  </div>
</div>
    </div>

  <div class="column1">
    <div class="container">
  <img src="images/men_gear.jpg" alt="Avatar" class="image">
  <div class="overlay">
   <a class="text" onclick="AddtoCart('Men-Gear','Exclusive Gym-Gear Top For Women',1000);href='#cart'">Product: Men-Gear<br><br> Price: Rs.1000</a></div>
  </div>
</div>

<div class="column1">
    <div class="container">
  <img src="images/female_gear.jpg" alt="Avatar" class="image">
  <div class="overlay">
   <a class="text" onclick="AddtoCart('Female-Gear','Exclusive Gym-Gear Top For Women',900);href='#cart'">Product: Female-Gear<br><br> Price: Rs.900</a></div>
  </div>
</div>

<div class="column1">
    <div class="container">
  <img src="images/men_bottom.jpg" alt="Avatar" class="image">
  <div class="overlay">
   <a class="text" onclick="AddtoCart('Men-TrackPants','Exclusive TrackPants Designed For Men',1200);href='#cart'">Product: Men-TrackPants<br><br> Price: Rs.1200</a></div>
  </div>
</div>

<div class="column1">
    <div class="container">
  <img src="images/female_bottom.jpg" alt="Avatar" class="image">
  <div class="overlay">
   <a class="text" onclick="AddtoCart('Female-TrackPants','Exclusive TrackPants Designed For Female',1100);href='#cart'">Product: Female-TrackPants<br><br> Price: Rs.1100</a></div>
  </div>
</div>

<div class="column1">
    <div class="container">
  <img src="images/wrist_support.jpg" alt="Avatar" class="image">
  <div class="overlay">
   <a class="text"onclick="AddtoCart('Wrist- Support','30cm long.<br>Stretch to fit all wrist sizes',650);href='#cart'">Product: Wrist-Supporter<br><br> Price: Rs.650</a></div>
  </div>
</div> 
</body>
<br><br><br><center><h2>⭕️SHOPPING CART⭕️</h2></center><br><br>
<center>
        <section class="ftco-section ftco-schedule" id="cart">
        <td valign="top">
            <table cellpadding="10" cellspacing="4" border="1" id="orderedProductsTbl">
                <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Description
                        </td>
                        <td>
                            Price
                        </td>
                    </tr>
                </thead>
                <tbody id="orderedProductsTblBody">

                </tbody>
                <tfoot>
                    <tr>
                     

                        <td colspan="10" align="right" id="cart_total"></td>
                        </td>
                      
                          <td>
                          <a  class="button" href="../payment/Payment.php">Proceed</a>
                        </td>
                    </tr>
                </tfoot>
            </table></section>
        </td>
    </tr>
</table>
</center>

<footer style="margin-top: 10%;">
    <div class="row">
      <div class="col span-1-of-2">
        <ul class="footer-nav">
          <li><a href="../aboutus.html"><h4><i class="icon ion-md-person"></i> About us</h4></a></li>
          <li><a href="../shop/shop.html"><h4><i class="icon ion-md-cart"></i> Shop</h4></a></li>
          <li><a href="../contact.html"><h4><i class="icon ion-md-people"></i> Contact</h4></a></li>
          <li><a href="../diet/diet/diet.html"><h4><i class="icon ion-md-pizza"></i> Diet</h4></a></li>
          <li><a href="../yoga.html"><h4><i class="icon ion-md-body"></i> Yoga</h4></a></li>
           </ul>
    </div>
    </div>
      <br><br><br>
      <div class="row">
      <p>
      <h5>Copyright &copy; 2019 by Nutrient&Fitness. All Rights reserved.</h5>
      </p>
     </div>
  
  </footer>
  <script>
      
//create array that will hold all ordered products
    var shoppingCart = [];

//this function manipulates DOM and displays content of our shopping cart
function displayShoppingCart(){
    var orderedProductsTblBody=document.getElementById("orderedProductsTblBody");
    //ensure we delete all previously added rows from ordered products table
    while(orderedProductsTblBody.rows.length>0) {
        orderedProductsTblBody.deleteRow(0);
    }

    //variable to hold total price of shopping cart
    var cart_total_price=0;
    //iterate over array of objects
    for(var product in shoppingCart){
        //add new row      
        var row=orderedProductsTblBody.insertRow();
        //create three cells for product properties 
        var cellName = row.insertCell(0);
        var cellDescription = row.insertCell(1);
        var cellPrice = row.insertCell(2);
        cellPrice.align="right";
        //fill cells with values from current product object of our array
        cellName.innerHTML = shoppingCart[product].Name;
        cellDescription.innerHTML = shoppingCart[product].Description;
        cellPrice.innerHTML = shoppingCart[product].Price;
        cart_total_price+=shoppingCart[product].Price;
    }
    //fill total cost of our shopping cart 
    document.getElementById("cart_total").innerHTML=cart_total_price;
    $("#linktoproceed").attr("href", "../payment/Payment.html?total="+cart_total_price);
}


function AddtoCart(name,description,price){
   //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
   var singleProduct = {};
   //Fill the product object with data
   singleProduct.Name=name;
   singleProduct.Description=description;
   singleProduct.Price=price;
   //Add newly created product to our shopping cart 
   shoppingCart.push(singleProduct);
   //call display function to show on screen
   displayShoppingCart();

}  



  </script>




</html>
