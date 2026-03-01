<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfig.php");

if(isset($_POST['modifiko_kontakt']))
{	
	$ID_kontakti = $_POST['ID_kontakti'];
	$subjekti=$_POST['subjekti'];
	$mesazhi=$_POST['mesazhi'];
	$email=$_POST['email'];	
	
	// checking empty fields
	if(empty($subjekti) || empty($mesazhi) || empty($email)) {	
			
		if(empty($subjekti)) {
			echo "<font color='white'>Fusha subjekti eshte e zbrazet.</font><br/>";
		}
		
		if(empty($mesazhi)) {
			echo "<font color='white'>Fusha mesazhi eshte e zbrazet</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='white'>Fusha email eshte e zbrazet.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($konektimi,"UPDATE kontakti SET subjekti='$subjekti',mesazhi='$mesazhi',email='$email' WHERE ID_kontakti=$ID_kontakti");
		
		//redirectig to the display pmessage. In our case, it is admin.php
		header("Location: menaxho_kontakt.php");
	}
}
?>
<?php
//getting cid from url
$ID_kontakti = $_GET['ID_kontakti'];

//selecting data associated with this particular cid
$rezultati = mysqli_query($konektimi,"SELECT * FROM kontakti WHERE ID_kontakti=$ID_kontakti");

while($rez = mysqli_fetch_array($rezultati))
{
	$subjekti = $rez['subjekti'];
	$mesazhi = $rez['mesazhi'];
	$email = $rez['email'];
}
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
				
					<h2>MODIFIKO TË DHËNAT E KONTAKTIT</h2>
						<div class="table-wrapper">
	                        <form method="post" action="modifiko_kontakt.php">
								<div class="table-wrapper">
								    <div class="row gtr-uniform">
									     <div class="col-6 col-12-xsmall">

			
				Subjekti:
				<input type="text" name="subjekti" value='<?php echo $subjekti;?>'   required />
				<br>
				Mesazhi:
				<textarea name="mesazhi"  rows="5"> <?php echo $mesazhi; ?></textarea>
                <br>
				Email-i
				<input type="email" name="email" value='<?php echo $email;?>'   required />
				<br >
				<input type="hidden" name="ID_kontakti" value='<?php echo $_GET['ID_kontakti'];?>' />
				<input type="submit" name="modifiko_kontakt" value="Modifiko">
		
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