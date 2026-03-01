<?php
    include("kontrollo.php");
?>
<?php

include_once("konfig.php");

$rezultati = mysqli_query($konektimi, "SELECT * FROM kontakti");
?>

<!DOCTYPE html>
<html>
<head>
		<title>Menaxhimi i kontaktit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <!-- Wrapper -->
<div id="wrapper">

<!-- Header -->
    <?php include("header.php"); ?>

<!-- Nav -->
    <?php include("meny.php"); ?>

    <!-- Main -->
    <div id="main">
    <section id="intro" class="main">
        
         
                <div class="table-wrapper">

                     <form method="post" action="#">
								<table>
	                              <tr>
	                              <h2>MENAXHIMI I TË DHËNAVE TË KONTAKTIT</h2>
								  </tr>

	                            <tr>
								<td>
	                            Shkruaj:
	                            </td>
	                            <td>
	                            <input type="text" name="kontakt" id="demo-name" value="%"/>
                                </td>
                                <td> <input type="submit" value="Kërko" /></td>
                                </tr>
											
								</table></form>
								<div class="table-wrapper">
								<table>
								<tbody>
								<tr>
									<td>Subjekti</td>
									<td>Mesazhi</td>
									<td>Email-i</td>
									<td>Modifiko</td>
									<td>Fshijë</td>
									
								</tr>
<?php
if (!empty($_REQUEST['kontakt'])) {
$kontakt = mysqli_real_escape_string
($konektimi,$_REQUEST['kontakt']);     
$databaza = mysqli_query($konektimi,
"SELECT * FROM kontakti 
WHERE subjekti LIKE '%".$kontakt."%' 
OR  email LIKE '%".$kontakt."%'"); 
while($rreshti = mysqli_fetch_array($databaza)) { 		
		echo "<tr>";
		echo "<td>".$rreshti['subjekti']."</td>";
		echo "<td>".$rreshti['mesazhi']."</td>";
		echo "<td>".$rreshti['email']."</td>";	
		echo "<td><a href=\"modifiko_kontakt.php?ID_kontakti=$rreshti[ID_kontakti]\" class='button' class='button primary'>Modifiko</a></td>";
		echo "<td><a href=\"fshije_kontakt.php?ID_kontakti=$rreshti[ID_kontakti]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini perdoruesin?')\" class='button' class='button primary'>Fshijë</a>
		</td></tr>";			
	}

}

?>
</tbody></table></div></section></div>

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