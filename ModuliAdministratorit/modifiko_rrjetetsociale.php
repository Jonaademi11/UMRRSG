<?php
include("kontrollo.php");
?>
<?php
include_once("konfig.php");

if(isset($_POST['modifiko_rrjetetsociale'])) {
    $ID_rrjetiSocial_umrrsg = $_POST['ID_rrjetiSocial_umrrsg'];
    $rrjetiSocial_umrrsg = $_POST['rrjetiSocial_umrrsg'];
    $vitiThemelimit_umrrsg = $_POST['vitiThemelimit_umrrsg'];
    $ID_grupmosha_umrrsg = $_POST['ID_grupmosha_umrrsg'];

    $foto = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $emri = $_FILES['userfile']['name'];
	$maxsize = 10000000; 
    

    // checking empty fields
    if(empty($rrjetiSocial_umrrsg) || empty($vitiThemelimit_umrrsg)) {
        if(empty($rrjetiSocial_umrrsg)) {
            echo "<font color='white'>Fusha Rrjeti Social eshte e zbrazet .</font><br/>";
        }

        if(empty($vitiThemelimit_umrrsg)) {
            echo "<font color='white'> Fusha Viti Themelimit field eshte e zbrazet.</font><br/>";
        }

    } else {
        // updating the table
        $rezultati = mysqli_query($konektimi, "UPDATE rrjetetsociale_umrrsg SET rrjetiSocial_umrrsg='$rrjetiSocial_umrrsg', vitiThemelimit_umrrsg='$vitiThemelimit_umrrsg', ID_grupmosha_umrrsg='$ID_grupmosha_umrrsg', foto='$foto', emri='$emri' WHERE ID_rrjetiSocial_umrrsg=$ID_rrjetiSocial_umrrsg");

        // redirecting to the display message page
        header("Location: menaxho_rrjetetsociale.php");
    }
}
?>
<?php

$ID_rrjetiSocial_umrrsg = $_GET['ID_rrjetiSocial_umrrsg'];

$rezultati = mysqli_query($konektimi, "SELECT * FROM rrjetetsociale_umrrsg WHERE ID_rrjetiSocial_umrrsg=$ID_rrjetiSocial_umrrsg");

while($rez = mysqli_fetch_array($rezultati)) {
    $rrjetiSocial_umrrsg = $rez['rrjetiSocial_umrrsg'];
    $vitiThemelimit_umrrsg = $rez['vitiThemelimit_umrrsg'];
    $ID_grupmosha_umrrsg= $rez['ID_grupmosha_umrrsg'];
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

						<!-- Introduction -->
							<section id="intro" class="main">
							
							<div class="table-wrapper">
								<form enctype="multipart/form-data" name="form1" method="post" action="modifiko_rrjetetsociale.php">
								
								<table><tr>
								
													<select name="ID_grupmosha_umrrsg" id="demo-category">
													     <option selected="selected" required>-Zgjedh Grupmoshen-</option>
														<?php
														$res=mysqli_query($konektimi,"SELECT * FROM grupmoshat_umrrsg");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['ID_grupmosha_umrrsg']; ?>"><?php echo $row['grupmosha_umrrsg']; ?></option>
															<?php
														}
														?> </select></tr><br>
												
														
	
												<tr><td>Rjeti Social</td>
													<td><input type="text" name="rrjetiSocial_umrrsg" value='<?php echo $rrjetiSocial_umrrsg;?>' required /></td>
												</tr>
												<tr><td>Viti Themelimit</td>
													<td><input type="text" name="vitiThemelimit_umrrsg" value='<?php echo $vitiThemelimit_umrrsg;?>' required /></td>
												</tr><tr>
													<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
												</tr>
												
												

												
												
											
											<tr>
											<td><input type="hidden" name="ID_rrjetiSocial_umrrsg" value='<?php echo $_GET['ID_rrjetiSocial_umrrsg']; ?>' /></td>
											<td>
													<input type="submit" name="modifiko_rrjetetsociale" value="Modifiko">
												
												</td></tr>
													</table>
													</form>
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