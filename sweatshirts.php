<!DOCTYPE html>
<html>
<head>
	<title>Retnuh Co - Products</title>
	<?php include("inc/links.php"); ?>
</head>
<body>
	<?php
	include "inc/nav.php";  // includes navbar 

	?>
	<div class="categories">
		<ul>
			<li class="dropdown"><a href="#" class="maindropdown">Categories</a>
                <div class="down">
                	<a href="products.php">All</a>
	                <a href="tshirts.php">T-shirts</a>
	                <a href="sweatshirts.php">Sweatshirts</a>
	                <a href="hoodies.php">Hoodies</a>
	                <a href="shoes.php">Shoes</a>
                </div>
            </li>
        </ul>
	</div>




	<?php

	include "inc/allsweatshirts.php";  // includes every product 

	include "inc/footer.php";  // includes footer

	include "inc/jquery.php"; // includes jquery for nav menu and jquery 
	?> 
</body>
</html>