
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
		<title>Moduli i Administratorit</title>
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
									<h2>SHTO TË DHËNAT E PËRDORUESIT</h2></header>
									<form method="post" action="shto_tedhena.php">
											<div class="row gtr-uniform">
												<div class="col-12 ">
													<input type="text" name="perdoruesi" id="demo-name" value="" placeholder="Përdoruesi" />
												<br>
													<input type="password" name="fjalekalimi" value="" placeholder="Fjalëkalimi" />
												</div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="submit" value="Shto të dhënat" class="primary" /></li></ul>
														</div>
												
									</div>
									</form>
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