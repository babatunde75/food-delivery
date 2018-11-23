<?php

$connect_db = mysql_connect('localhost','root','');
$select_db = mysql_select_db('name');

	if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($connect_db) {
			if ($select_db) {
				$result = "insert into  register(Name,Email,Passwords) VALUES ('$name','$email','$password')";
				mysql_query($result) or die (mysql_error());
				header('LOCATION:'.'login.php');
			}
			else{
				echo "Error in selecting database";
			}
		}
	else{
		echo "Error in connection";
	}
	
	}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title>MamaTee Hut | Your Favourite 9ja Meals.</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<header>
		<div class="row">
			<div class="logo">
				<img src="img/FoodLogo.PNG">
			</div>
		</div>
		<div class="row">
			<ul class="main-nav">
				<li><a href="index.php">HOME</a></li>
				<li><a href="about.php">ABOUT US</a></li>
				<li><a href="login.php">LOGIN/SIGN UP</a></li>
				<li><a href="order.php">ORDER ONLINE</a></li>
				
			</ul>
		</div>
        <form class="box" method="POST" action="">
            <h1>REGISTER</h1>
           <input type="text" name="name" placeholder="Name">
           <input type="email" name="email" placeholder="Email">
           <input type="password" name="password" placeholder="Password">
           <input type="submit" name="submit" value="Sign Up">
        
        </form>
	</header>
	<footer >
		<p style="text-align: center; margin: ">All Rights Reserved, &copy Copyright 2018</p>
	</footer>
</body>
</html>
