<?php
    include("kontrollo.php");
?>
<?php
    include_once("konfig.php");

    if(isset($_POST['modifiko_grupmosha']))
{
    $ID_grupmosha_umrrsg = $_POST['ID_grupmosha_umrrsg'];

    $grupmosha_umrrsg =$_POST['grupmosha_umrrsg'];


        if(empty($grupmosha_umrrsg) ) {

            if(empty($grupmosha_umrrsg)) {
                echo "<font color='red'> Fusha Grupmosha eshte e zbrazet .</font><br/>";
        }
    } else {
        $rezultati = mysqli_query($konektimi, "UPDATE grupmoshat_umrrsg SET grupmosha_umrrsg='$grupmosha_umrrsg' WHERE ID_grupmosha_umrrsg=$ID_grupmosha_umrrsg");
   
        header("Location: menaxho_grupmoshat.php");
    }
}
?>
<?php
$ID_grupmosha_umrrsg = $_GET['ID_grupmosha_umrrsg'];

$rezultati = mysqli_query($konektimi, "SELECT * FROM grupmoshat_umrrsg WHERE ID_grupmosha_umrrsg=$ID_grupmosha_umrrsg");

while($rez = mysqli_fetch_array($rezultati))
{
    $grupmosha_umrrsg = $rez['grupmosha_umrrsg'];
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

						<!-- Introduction -->
							<section id="intro" class="main">
							
								<h2>MODIFIKO TË DHËNAT E GRUPMOSHËS</h2>
								<div class="table-wrapper">
	                       <form method="post" action="modifiko_grupmosha.php">
								 <div class="table-wrapper">
								     <div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
								Grupmosha:<input type="text" name="grupmosha_umrrsg" id="grupmosha" value='<?php echo $grupmosha_umrrsg;?>'   required / />
								<br>
								<input type="hidden" name="ID_grupmosha_umrrsg" value='<?php echo $_GET['ID_grupmosha_umrrsg'];?>' />
								
												<ul class="actions">
													<li><input type="submit" name="modifiko_grupmosha" value="Modifiko" class="primary" /></li>
												
												</ul>
											</div></form></div></div></div><br>
							
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