<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("konfig.php");	
?>

<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Modifikimi kontaktit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
	<div id="wrapper">

		<!-- Header -->
		<?php include_once("header.php"); ?>


		<!-- Nav -->
		<?php include_once("meny.php"); ?>


    <div id="main">
		<!-- Main -->
			<section id="intro" class="main">
				
					<h2>FORMA PËR KONTAKT</h2>
						<div class="table-wrapper">
	                        <form method="post" action="shtoKontakt.php">
								<div class="table-wrapper">
								    <div class="row gtr-uniform">
									     <div class="col-6 col-12-xsmall">

			
			
				<input type="text" name="subjekti" id="subjekti" value="" placeholder="Subjekti">
				<br>
				<textarea name="mesazhi"  rows="5" id="mesazhi" value="" placeholder="Mesazhi"></textarea>
                <br>
			
				<input type="email" name="email" value="" id="email" placeholder="E-mail"   required />
				<br >
				<div class="col-12">
				 <ul class="actions">
					<li><input type="submit" name="shtoKontakt" value="Dergo Mesazh" class="primary" /></li>
														
				</ul>
		</div>
									</div>
		</div></div>
	</form></div>

						</div>
				
			</section></div>

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