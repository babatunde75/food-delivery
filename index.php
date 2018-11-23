<?php
    if ($boolean == 'true' ) {
        $message = 'Your register successfully';
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
				<?php echo "<font color='green'>$message</font>" ?><img src="img/FoodLogo.PNG">
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
		<div class="hero">
			
			<h1>GOODBYE JUNKFOOD, <br>WELCOME SUPER HEALTHY MEALS.</h1>
			
			
		</div>
	</header>
	
	<footer >
		<p style="text-align: center; margin: ">All Rights Reserved, &copy Copyright 2018</p>
	</footer>
</body>
</html>
