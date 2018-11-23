<?php
    if(isset($_POST['submit'])){
        echo '<script>
            alert("Order Successfull!");
            window.location = "./index.php";
            </script>'; 
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
				<li><a href="login.php">LOG IN/SIGN UP</a></li>
                <li class><a href="location.php">OUR LOCATIONS</a></li>
			</ul>
		</div>
	</header>
</body>
</html>

        <form class="box" method="POST" action="">
            <h1>WELLCOME<br>Please fill this form</h1>
           <input type="email" name="email" placeholder="Name" required>
           <input type="password" name="password" placeholder="Address" required>
            <input type="email" name="email" placeholder="Email" required>
           <input type="submit" name="submit" value="Submit" required>
          
        </form>
    </header>
    
    <footer >
        <p style="text-align: center; margin: ">All Rights Reserved, &copy Copyright 2018</p>
    </footer>
</body>
</html>
