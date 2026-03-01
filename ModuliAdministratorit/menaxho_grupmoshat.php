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

						<!-- Introduction -->
							<section id="intro" class="main">
							
								<h2>SHTO TË DHËNAT E GRUPMOSHËS</h2>
							<div class="table-wrapper">
	                            <form method="post" action="shtoGrupmosha.php">
								    
								        <div class="row gtr-uniform">
								<div class="col-6 col-12-xsmall">
								<input type="text" name="Grupmosha" id="Grupmosha" value="" placeholder="Grupmosha" />
								</div>
								<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="shtoGrupmosha" value="Shto" class="primary" /></li>
												
												</ul>
											</div></form></div></div><br>
											<form method="post" action="#">	<table>
	                            <tr>
	                            <h2>KËRKO TË DHËNAT E GRUPMOSHËS PËR MODIFIKIM OSE FSHIRJE</h2>
								</tr>
	                            <tr>
								<td>Shkruaj:</td>
	                            <td><input type="text" name="grupmosha" id="demo-name" value="%" placeholder="Grupmoshen" />
                                </td>
                                <td> <input type="submit" value="Kërko" /></td>
                                </tr>
											
								</table></form>
								<div class="table-wrapper">
								<table>
								<tbody>
								<tr>
									<td>Grupmosha</td>
									<td>Modifiko</td>
									<td>Fshije</td>
								</tr>
								
								
<?php
if (!empty($_REQUEST['grupmosha'])) {
$grupmosha = mysqli_real_escape_string
($konektimi,$_REQUEST['grupmosha']);     
$sql = mysqli_query($konektimi,
"SELECT * FROM grupmoshat_umrrsg 
WHERE grupmosha_umrrsg LIKE '%".$grupmosha."%' 
ORDER BY ID_grupmosha_umrrsg DESC"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['grupmosha_umrrsg']."</td>";
		echo "<td><a href=\"modifiko_grupmosha.php?ID_grupmosha_umrrsg=$row[ID_grupmosha_umrrsg]\" class='button' class='button primary'>
Modifiko</a></td>";
		echo "<td><a href=\"fshije_grupmosha.php?ID_grupmosha_umrrsg=$row[ID_grupmosha_umrrsg]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini Grupmoshen?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";		
	}

}

?>
											
											</tbody></table></section></div>

					

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