<?php
    include("kontrollo.php");
?>
<?php
include_once("konfig.php");
if(isset($_POST['modifiko']))
{
    $id_perdoruesi_umrrsg=$_POST['id_perdoruesi_umrrsg'];
    $perdoruesi_umrrsg=$_POST['perdoruesi_umrrsg'];
    $fjalekalimi_umrrsg=$_POST['fjalekalimi_umrrsg'];

    if(empty($perdoruesi_umrrsg) || empty($fjalekalimi_umrrsg)){
        if(empty($perdoruesi_umrrsg)) {
            echo "<font color='white'> Fusha perdoruesi eshte e zbrazet .</font><br/>";

        }
	if(empty($fjalekalimi_umrrsg)){
            echo "<font color='white'> Fusha fjalekalimi eshte e zbrazet.</font><br/>";
	}

        }else{

        $rezultati = mysqli_query($konektimi, "UPDATE perdoruesit_umrrsg SET perdoruesi_umrrsg='$perdoruesi_umrrsg',fjalekalimi_umrrsg='$fjalekalimi_umrrsg' WHERE id_perdoruesi_umrrsg=$id_perdoruesi_umrrsg");
        header("Location: modifiko_perdorues.php");
    
    }
}

?>
<?php
$id_perdoruesi_umrrsg=$_GET['id_perdoruesi_umrrsg'];
$rezultati=mysqli_query($konektimi, "SELECT * FROM perdoruesit_umrrsg WHERE id_perdoruesi_umrrsg=$id_perdoruesi_umrrsg");

while($rez = mysqli_fetch_array($rezultati))
{
    $perdoruesi_umrrsg = $rez['perdoruesi_umrrsg'];
    $fjalekalimi_umrrsg = $rez['fjalekalimi_umrrsg'];
}
?>







<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli i Administratorit </title>
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

						<!-- Introduction -->
							<section id="intro" class="main">
								<header class="major">
									<h2>MODIFIKO TË DHËNAT E PËRDORUESIT</h2></header>
									<form method="post" action="#">
											<div class="row gtr-uniform">
												<div class="col-12 ">
												Përdoruesi:
													<input type="text" name="perdoruesi_umrrsg" id="demo-name" value='<?php echo $perdoruesi_umrrsg;?>' placeholder="Përdoruesi" />
												<br>
												Fjalëkalimi:
													<input type="password" name="fjalekalimi_umrrsg" id="demo-email" value='<?php echo $fjalekalimi_umrrsg;?>' placeholder="Fjalëkalimi" />
												</div>
												<div class="col-12">
													<ul class="actions">
													    <li><input type="hidden" name="id_perdoruesi_umrrsg" value='<?php echo $_GET['id_perdoruesi_umrrsg'];?>' /></li>
														<li><input type="submit" value="Modifiko" name="modifiko" class="primary" /></li>
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