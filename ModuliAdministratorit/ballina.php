<?php
    include('kontrollo.php');
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

				<!-- Header 
					<header id="header" class="alt">
						
						<h1>Uebaplikacion për Menaxhimin e Rrjeteve Sociale sipas Grupmoshave(UMRRSG)</h1>
						
					</header>-->
					<?php include_once("header.php"); ?>

				<!-- Nav 
					<nav id="nav">
						<ul>
							
							<li><a href="ballina.php" class="active">Ballina</a></li>
							<li><a href="perdoruesit.php">Përdoruesit</a></li>
							<li><a href="ckyqu.php">Çkycu</a></li>
						</ul>
					</nav>-->
						<?php include_once("meny.php"); ?>

				<!-- Main -->
					<div id="main">

						

						<!-- First Section -->
							<section id="intro" class="main">
			
								<header class="major">
									<h2>MENAXHIMI I TË DHËNAVE TË BALLINËS</h2>
								</header>
								<ul class="features">
									<li>
										<a href="menaxho_grupmoshat.php" class="icon solid major style1 fa-child"></a>
										<h3>MENAXHO GRUPMOSHAT</h3>
										<p>Forma për menaxhimin e grupmoshave në uebaplikacion.</p>
									</li>
									<li>
										<a href="menaxho_rrjetetsociale.php" class="icon brands major style3 fa-facebook"></a>
										<h3>MENAXHO RRJETET SOCIALE</h3>
										<p>Forma për menaxhimin e rrjeteve sociale në uebaplikacion.</p>
									</li>
									<li>
										<a href="modifiko_tedhena.php" class="icon solid major style5 fa-scroll"></a>
										<h3>MODIFIKO TË DHËNAT</h3>
										<p>Forma për modifikimin e të dhënave të uebaplikacionit.</p>
									</li>
								</ul>
								<a class="button" href="Ajax/index.php">Voto</a>
		
	
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