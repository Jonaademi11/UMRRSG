<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['perditeso_tedhenat']))
{	
	$ID_Data = $_POST['ID_eDhena'];
	
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$File=$_POST['File'];	
	$PamjaeFaqes=$_POST['PamjaeFaqes'];	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($File) || empty($PamjaeFaqes)){	
			
		if(empty($Titulli)) {
			echo "<font color='white'>Fusha Titulli eshte e zbrazet .</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='white'>Fusha Pershkrimi eshte e zbrazet.</font><br/>";
		}
		
		if(empty($File)) {
			echo "<font color='white'>Fusha File eshte e zbrazet.</font><br/>";
		}	
	if(empty($PamjaeFaqes)) {
			echo "<font color='white'>Fusha Pamja Faqes eshte e zbrazet</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($konektimi,"UPDATE tedhenat SET Titulli='$Titulli',Pershkrimi='$Pershkrimi',File='images/$File',PamjaeFaqes='$PamjaeFaqes' WHERE ID_eDhena=$ID_eDhena");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: modifiko_tedhena.php");
	}
}
?>
<?php

$ID_eDhena = $_GET['ID_eDhena'];


$rezultati = mysqli_query($konektimi,"SELECT * FROM tedhenat WHERE ID_eDhena=$ID_eDhena");

while($rez = mysqli_fetch_array($rezultati))
{
	$Titulli = $rez['Titulli'];
	$Pershkrimi= $rez['Pershkrimi'];
	$File = $rez['File'];
	$PamjaeFaqes = $rez['PamjaeFaqes'];
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
									<h2>MODIFIKO TË DHËNAT </h2></header>
									<form action="perditeso_tedhenat.php" method="post">
											<div class="row gtr-uniform">
												<div class="col-12">
												    Titulli:
													<input type="text" name="Titulli" id="demo-name" value="<?php echo $Titulli;?>"/>
												<br>
												    Pershkrimi:<textarea name="Pershkrimi" id="demo-message" rows="20" cols="40"><?php echo $Pershkrimi;?></textarea><br>
													Emri file-it:<input type="text" name="File" value='<?php echo $File;?>' required /><br>
													Pamja faqes:<input type="text" name="PamjaeFaqes" value='<?php echo $PamjaeFaqes;?>' required />
				                                    <br>
													<input type="hidden" name="ID_eDhena" value='<?php echo $_GET['ID_eDhena'];?>'/>
												
												
													<ul class="actions">
														<li><input type="submit" name="perditeso_tedhenat" value="Modifiko" class="primary" /></li></ul>
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