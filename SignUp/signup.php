<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, intial-scale=1">
		<title>SignUp</title>
		<link rel="stylesheet" type="text/css" href="signup_style.css">   	
	</head>
	
	<body>
		<div class="sign_up">
			<form method="post" action="insert.php">
				<centre><h1>Sign Up</h1></centre><br><br>
					<hr>
						<input type ="text" name ="fname" id ="fname" placeholder ="First Name" required>
						<input type ="text" name ="lname" id ="lname" placeholder ="Last Name" required><br><br>
						<input type ="email" name ="email" id ="email" placeholder ="Email ID" required></h1><br><br>
						<input type ="text" name ="username" id ="username" placeholder ="Username" required><br><br>
						<input type ="password" name ="pwd" id ="pwd" placeholder ="Password" required>
						<input type ="password" name ="RePwd" id ="RePwd" placeholder ="Confirm Password" required><br><br>
							<div class="date_of_birth">
								<span style="font-size:18px";>Date of Birth</span><br>
								<!--	<select name="DOBmonth" required>
										<option>Month</option>
										<option value="January">January</option>
										<option value="February">February</option>
										<option value="March">March</option>
										<option value="April">April</option>
										<option value="May">May</option>
										<option value="June">June</option>
										<option value="July">July</option>
										<option value="August">August</option>
										<option value="September">September</option>
										<option value="October">October</option>
										<option value="November">November</option>
										<option value="December">December</option>
									</select>
									<select name="DOBday"required>
										<option>Day</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
									</select>
									<select name="DOByear"required>
										<option>Year</option>
										<option value="2001">2001</option>
										<option value="2000">2000</option>
										<option value="1999">1999</option>
										<option value="1998">1998</option>
										<option value="1997">1997</option>
										<option value="1996">1996</option>
										<option value="1995">1995</option>
										<option value="1994">1994</option>
										<option value="1993">1993</option>
										<option value="1992">1992</option>
										<option value="1991">1991</option>
										<option value="1990">1990</option>
										<option value="1989">1989</option>
										<option value="1988">1988</option>
										<option value="1987">1987</option>
										<option value="1986">1986</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1985">1985</option>
										<option value="1984">1984</option>
										<option value="1983">1983</option>
										<option value="1982">1982</option>
										<option value="1981">1981</option>
										<option value="1980">1980</option>
										<option value="1979">1979</option>
										<option value="1978">1978</option>
										<option value="1977">1977</option>
										<option value="1976">1976</option>
										<option value="1975">1975</option>
									</select><br>-->
									<input type="date" name="DateofBirth" >
							</div><br>
						<b>Gender</b><br><br><label><input type="radio" name="gender" value="Male" required>Male</label>
						<label><input type="radio" name="gender" value="male" required>Female</br><br><label></label>
						<input type="submit" value="Sign Up" onclick=checkdata() name="signupsubmit"><br><br>
						<div class="signin">
						<center><a class="button" href = "../SignIn/signin.html">Sign In</a></center>
						<!--<a href="signin.html"><button type="button">Text of Some Page</button></a>-->
                        </div>
                        <div style="color:red;">
                        <?php
                            if(isset($_GET['passwordsdonotmatch'])){
                                echo 'Passwords do not match';
                            } elseif(isset($_GET['useralreadyregistered'])){
                                echo 'User already registered.';
                            } elseif(isset($_GET['usernamealreadytaken'])){
                                echo 'Username already taken.';
                            }
                        ?>
                        </div>
					</hr>
			</form>
		</div>
	</body>
	<script type="text/javascript">
        function checkdata(){
            var fn = document.fr.fname.value;
            var ln = document.fr.lname.value;
			var em = document.fr.email.value;
			var us = document.fr.username.value;
			var pwd = document.fr.password.value;
			var rpwd = document.fr.RePassword.value;
			var m = document.fr.DOBmonth.value;
			var d = document.fr.DOBday.value;
			var y = document.fr.DOByear.value;
			var g = document.fr.gender.value;
            if(fn==""||ln==""||em==""||us==""||pwd==""||rpwd==""||m==""||d==""||y==""||g==""){

            alert("Enter all of the fields");
        
            }

            else{

                if(pwd.length<=7){

                    alert("The entered password must have length grater than 8 characters")

                }
				else if(rpwd.length<=7)
					alert("The entered password must have length grater than 8 characters"))
				
            }
        }
        </script>
</html>