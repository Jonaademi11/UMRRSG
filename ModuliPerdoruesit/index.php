<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php 
    include_once("konfig.php");
?>
<html>
	<head>
		<title>Moduli i Perdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
	<div id="wrapper">

		<!-- Header -->

			<?php include_once("header.php"); ?>

		<!-- Nav -->
		<?php include_once("meny.php"); ?>


			
           

		<!-- FSHK -->
			<div id="main">
				<section id="intro" class="main">
									<?php
            $rezultati = mysqli_query($konektimi, "SELECT  g.grupmosha_umrrsg, r.rrjetiSocial_umrrsg, r.vitiThemelimit_umrrsg, r.foto, r.emri FROM rrjetetsociale_umrrsg r
LEFT OUTER JOIN grupmoshat_umrrsg g ON r.ID_grupmosha_umrrsg = g.ID_grupmosha_umrrsg
GROUP BY g.grupmosha_umrrsg, r.rrjetiSocial_umrrsg, r.vitiThemelimit_umrrsg, r.foto, r.emri
ORDER BY g.ID_grupmosha_umrrsg, r.ID_rrjetiSocial_umrrsg DESC");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
		               
							<ul class="features">
							<li>
								<span class="image fit">
									<?php echo '<img style="width: 105%;" src="data:image/jpeg;base64,'.base64_encode($rreshti['foto']).'"/>'; ?>
								
							    </span></li>
							
							<li><br><br>
								<p>
									Rrjeti Social: <strong><?php echo $rrjetiSocial_umrrsg; ?></strong><br>
									Viti i Themelimit: <strong><?php echo $vitiThemelimit_umrrsg; ?></strong><br>
									Grupmosha: <b><?php echo $grupmosha_umrrsg; ?></b>
								</p></li>
						
							</ul>
			
						</section>
						<?php } ?>
					
					</div>
				
				
			</section>



		<!-- Footer -->
		<?php include_once("footer.php"); ?>
           </div>

		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>