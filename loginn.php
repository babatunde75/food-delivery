<?php 
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "All field Required";
        exit();
             echo "All field Required";
    }
 } ?>
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
            <h1>LOGIN</h1>
           <input type="email" name="email" placeholder="Email">
           <input type="password" name="password" placeholder="Password">
           <input type="submit" name="" value="Submit">
           <p>Don't have an accout ? Sign Up <a href="register.php">here</a></p>
        </form>
	</header>
	
	<footer >
		<p style="text-align: center; margin: ">All Rights Reserved, &copy Copyright 2018</p>
	</footer>
</body>
</html>
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
                <li><a href="about.html">ABOUT US</a></li>
                <li><a href="login.html">LOG IN/SIGN UP</a></li>
                <li><a href="menu.html">MENU</a></li>
                <li><a href="order.html">ORDER ONLINE</a></li>
                <li class><a href="location.html">OUR LOCATIONS</a></li>
            </ul>
        </div>
        <form class="box" method="POST" action="">
            <h1>LOGIN</h1>
           <input type="email" name="email" placeholder="Email" required>
           <input type="password" name="password" placeholder="Password" required>
           <input type="submit" name="submit" value="Submit" required>
           <p>Don't have an accout ? Sign Up <a href="register.php">here</a></p>
        </form>
    </header>
    <<?php 
    header('location:menu.html'); ?>
    <footer >
        <p style="text-align: center; margin: ">All Rights Reserved, &copy Copyright 2018</p>
    </footer>
</body>
</html>
