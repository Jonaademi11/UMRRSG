<?php
	include("kontrollo.php");	
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include_once("header.php"); ?>

				<!-- Nav -->
					<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">
						<!-- Second Section -->
							<section id="intro" class="main">
								<header class="major">
									<h2>MENAXHIMI TË DHËNAVE TË PËRDORUESVE</h2>
								</header>
								<ul class="features">
									<li>
										<a href="shto_perdoruesit.php" class="icon solid major style1 fa-link"></a>
										<h3>SHTO PËRDORUES</h3>
										<p>Forma për shtimin e përdoruesve të rinjë në uebaplikacion me të drejta të administratorit..</p>
									</li>
									<li>
										<a href="modifiko_perdorues.php" class="icon solid major style3 fa-brush"></a>
										<h3>MODIFIKO PËRDORUES</h3>
										<p>Forma për modifikim të të dhenave të perdoruesve aktual në uebaplikacion më te drejta të administratorit.</p>
									</li>
									<li>
										<a href="fshije_perdorues.php" class="icon solid major style5 fa-ban"></a>
										<h3>FSHIJË PËRDORUES</h3>
										<p>Forma për fshirje të përdoruesve aktual nga uebaplikacion</p>
									</li>
								</ul>
							</section>
					    </div>

				<!-- Footer -->
					<?php include_once("footer.php"); ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>