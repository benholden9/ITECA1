<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Woodsong Cottage</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="cart.js"></script>

</head>
<body>

<div class="header">
<div class="container">
	<div class="navbar">
<div class="logo">
	<img src="images/frugallogo.png" class="logo-image">
</div>
	<nav>
		<ul id="menuitems">
				<li><a href ="home.php">Home</a></li>
				<li><a href ="home.html">Home</a></li>
				<li><a href ="allproducts.html">All Products</a></li>
				<li><a href ="About.html">About</a></li>
				<li><a href ="Contact.html">Contact</a></li>
				<li><a href ="signup.php">Sign Up</a></li>
				<li><a href ="login.php">Log In</a></li>
				<li><a href = "logout.php">Logout</a></li>

		</ul>
	</nav>
	<img src="images/menuicon.png" class="menu-icon" 
	onclick="menutoggle()">
</div>
<div class="row">
	<div class=".col-2">
		<h1>Frugal Aesthetic:<br>Fashion made cheap.</br></h1>
		<p>You shouldn't have to pay an arm and leg to look as good as you feel.</p>
		<a href="" class="btn">Check It Out &#10146;</a>
	</div>
	<div class=".col-2">
		<img src="images/img1.png">
	</div>
</div>
</div>
</div>
<!-------- Featured Products --------->
<div class ="small-container">
	<h2 class="title">Featured Products<h2>
	<div class="row">
		<div class="col-4">
			<img class="product-image" src="images/jeans.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Black Jeans</h4></span>
				<span class="product-price">R250.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
		<div class="col-4">
			<img class="product-image" src="images/shades1.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Round Shades</h4></spam>
				<span class="product-price">R50.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
		<div class="col-4">
			<img class="product-image" src="images/combat.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Combat Boots</h4></span>
				<span class="product-price">R300.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
		<div class="col-4">
			<img class="product-image" src="images/trench.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Grey Trench Coat</h4></span>
				<span class="product-price">R500.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
	</div>
<!------ Latest Products --------->
	<h2 class="title">Latest Products</h2>
	<div class="row">
		<div class="col-4">
			<img class="product-image" src="images/backpack.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Backpack</h4></span>
				<span class="product-price">R150.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>
		</div>
		<div class="col-4">
			<img class="product-image" src="images/beanie.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Beanies Assorted</h4></span>
				<span class="product-price">R45.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
		<div class="col-4">
			<img class="product-image" src="images/rings.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Rings Assorted</h4></span>
				<span class="product-price">R200.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
		<div class="col-4">
			<img class="product-image" src="images/flanel.jpg">
			<div class="product-details">
				<span class="product-title"><h4>Mens Red Flanel</h4></span>
				<span class="product-price">R150.00</span>
				<button class="btn btn-primary product-button" type="button">Cart &ensp;<i class="fa fa-plus"></i></button>
			</div>	
		</div>
	</div>
</div>

  <section class="container content-section">
		<h2 class="section-header">Cart</h2>
		<div class="cart-row">
			<span class="cart-item cart-header cart-column">Item</span>
			<span class="cart-price cart-header cart-column">Price</span>
			<span class="cart-quantity cart-header cart-column">Quantity</span>
		</div>
		<div class="cart-items">
		</div>
		<div class="cart-total">
			<strong class="cart-total-title">Total</strong>
			<span class="cart-total-price">R00.00</span>
		</div>
		<button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
  </section>
<!------ offer ------>
<div class="offer">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
			<img src="images/exclusive.png" class="offer-img">
			</div>
			<div class="col-2">
			<p>Exclusively Available on Frugal Aesthetic</p>
			<h1>Death Note Journal</h1>
			<small>The Death Note Journal is a book which is featured in the hit Japanese Tv Anime "Death Note" The synopsis goes as follows; Light Yagami (Tatsuya Fujiwara) is a normal, undistinguished college student, that is, until he discovers an odd notebook lying on the ground. He soon discovers that the notebook has magic powers: If someone's name is written on it while the writer imagines that person's face, he or she will die. Intoxicated with his new godlike power, Light kills those he deems unworthy of life. But a mysterious detective known only as L (Ken'ichi Matsuyama) becomes determined to put a stop to his reign.</small>
			<a href="" class="btn">Purchase Now! &#10146</a>
			</div>	
		</div>
	</div>
</div>

<!------- testimonial ------->
<div class="testimonial">
	<div class="small-container">
		<div class="row">
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Generic product review for purposes of the project!</p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<img src="images/pic-4.png">
				<h3>Jane Doe</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Generic product review for purposes of the project!</p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<img src="images/pic-3.png">
				<h3>John Doe</h3>
			</div>
			<div class="col-3">
				<i class="fa fa-quote-left"></i>
				<p>Generic product review for purposes of the project!</p>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<img src="images/pic-1.png">
				<h3>Michael Marks</h3>
			</div>		
		</div>
	</div>
</div>

<!-------- brands -------->
<div class="brands">
	<div class="small-container">
		<div class="row">
			<div class="col-2">
				<img src="images/deathnote.png">
			</div>
			<div class="col-2">
				<img src="images/converse.png">
			</div>
		</div>
	</div>
</div>
<!------ footer ------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-2">
				<img src="images/frugallogo.png">
				<p>You shouldn't have to pay an arm and leg to look as good as you feel.</p>
				<h3>Contact</h3>
				<p><strong>Address: </strong>22 Umgazi Rd, Ashlea Gardens, Pretoria, 0081</p>
				<p><strong>Phone: </strong>012 348 3060</p>
				<p><strong>Hours </strong>08:00 - 16:30 Mon - Fri</p>
			</div>
				
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
				<li>Coupons</li>
				<li>Blog Post</li>
				<li>Return Policy</li>
				<li>Join Affiliate</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow Us</h3>
				<ul>
				<li>Facebook</li>
				<li>Twitter</li>
				<li>Instagram</li>
				<li>Youtube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="copyright">Copyright 2022 - Frugal Aesthetic</p>
	</div>
</div>
<!---------- js for toggle menu ----------->

<script>
	var menuitems = document.getElementById("menuitems");
	
	menuitems.style.maxHeight = "0px";
	
	function menutoggle(){
		if(menuitems.style.maxHeight == "0px")
			{
				menuitems.style.maxHeight = "200px";
			}
		else
			{
				menuitems.style.maxHeight = "0px";
			}
		
	}
</script>	
</body>
</html>	