<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Payment</title>
		<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
			<link rel="stylesheet" type="text/css" href="Payment.css">	

        <style>
            * {
              box-sizing: border-box;
            }
            
            .row {
              display: flex;
            }
            
            /* Create three equal columns that sits next to each other */
            .column {
              flex: 33.33%;
              padding: 5px;
            }
			</style>

    </head>
    <body>
		<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>Payment using UPI/BHIM </h1>
				<div class="social-container">
				<!--	<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>-->
					<img src="upi.jpg" height="50" width="150">
				</div>
				<span>Total Amount</span>
				<input type="text" placeholder="Amount" value="<?php if(isset($_GET['total'])){
					$totalamount = $_GET['total'];
					echo $totalamount;
				}?>" readonly> 
				<span>Enter your UPI ID</span>
				<input type="text" placeholder="UPI ID" id="UPINum" pattern="^[\w.-]*[@][\a-zA-Z]*)$" >
				<!--<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" /> -->
				<button>PAY</button>
			</form>
			</div>
		<div class="form-container sign-in-container">
			<form action="paymentact.php" method="POST">
				<h2>Payment using Credit/Debit Card</h2>
			<!--	<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            	</div>-->
            	<br>
          	 	<!-- <img src="Mastercard.png" height="30" width="45">
            	<img src="Visacard.png" height="50" width="75">
            	<img src="Paypal.png" height="50" width="95">-->

            <div class="row">
                <div class="column">
                  <img src="Mastercard.png" alt="MasterCard" style="width:60%">
                </div>
                <div class="column">
                  <img src="Visacard.png" alt="VisaCard" style="width:60%">
                </div>
                <div class="column">
                  <img src="Paypal.png" alt="PayPal" style="width:60%">
                </div>
              </div>
            
		<!--	<span>or use your account</span>-->
        <br>	 Total Amount<input type="text" placeholder="Amount" value="<?php if(isset($_GET['total'])){
            $totalamount = $_GET['total'];
            echo $totalamount;
        }?>" readonly> 
        	 Card Holder's Name<input type="text" id="CardHolder" placeholder="Name" required> 
            Card Number<input type="text" id="CardNum" placeholder="xxxx-xxxx-xxxx-xxxx"  pattern="[0-9]{16}" required>
            Valid till<input type="text" id="ValidTill"placeholder="xx/xx" pattern="^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$" required>
            CVV/CVC<input type="password" id="CVV" placeholder="xxx" pattern="[0-9]{3}" required>
            <br>
		<!--	<a href="#">Forgot your password?</a>-->
			<button>PAY</button>
			<br>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Payment Details</h1>
				<p>To Pay using Card Click here</p>
				<button class="ghost" id="signIn">CARD</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Payment Details</h1>
				<p>To Pay using UPI ID Click here</p>
				<button class="ghost" id="signUp">UPI</button>
			</div>
		</div>
	</div>
</div>

<!--<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>-->
</body>
<script src="Payment.js"></script>

</html>