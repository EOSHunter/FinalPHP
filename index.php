<!DOCTYPE html>
<html>
<head>
	<title>Retnuh - Home</title>
	<?php include ("inc/links.php"); ?>
</head>
<body>

	<div id="intro">
		<p class="name retnuh">Retnuh Co.</p> 
		<button id="btn-goto">Enter</button>
	</div>

	<?php 
	include "inc/nav.php"; // includes navbar 

	include "inc/slideshows.php"; // includes slideshows

	include "inc/jquery.php"; // includes jquery for nav menu and jquery 
	include "inc/pageload.php"; // includes js for the landing screen
	include "inc/slickjs.php"; // includes slider js
	include "inc/footer.php";  // includes footer
	?>
</body>
</html>