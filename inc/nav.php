<?php 

// if (filename === "home.php") {
// 	// add selected class to home button in nav
// } else if (filename === "products.php") {
// 	// add selected class to products button in nav
// }

?>


<!-- main content start -->
	<div id="wrapper">
		<nav class="navbar">
			<!-- menu button start -->
			<span class="open-slide">
				<a onclick="openSlideMenu()">
					<svg width="30" height="30">
						<path d="M0,5 30,5" stroke="#282828" stroke-width="3"/>
					<svg width="30" height="30">
						<path d="M0,14 30,14" stroke="#282828" stroke-width="3"/>
					<svg width="30" height="30">
						<path d="M0,23 30,23" stroke="#282828" stroke-width="3"/>
					</svg>
				</a>
			</span>
			<!-- menu button end -->

			<p class="name-title"><a href="index.php">Retnuh Co.</a></p>

			<div id="side-menu" class="side-nav">
				<ul>
					<li><a class="btn-close" onclick="closeSlideMenu()">&times;</a></li>
					<li><a href="index.php" id="">Home</a></li>
					<li><a href="products.php" id="">Products</a></li>
					<li><a href="ss2017.php" id="">SS 2017</a></li>
					<li><a href="contact.php" id="">Contact</a></li>
					<li><a href="">Cart</a></li>
				</ul>
			</div>
		</nav>
	