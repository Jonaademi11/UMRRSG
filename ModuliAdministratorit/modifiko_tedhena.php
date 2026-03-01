<?php
    include("kontrollo.php");
?>
<?php

include_once("konfig.php");

$rezultati = mysqli_query($konektimi,"SELECT * FROM tedhenat ORDER BY ID_eDhena DESC");
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
							
								<form method="post" action="#">
								<table>
	                              <tr>
	                              <h2>KËRKO TË DHËNAT PËR MODIFIKIM</h2>
								  </tr>

	                            <tr>
								<td>
	                            Shkruaj:
	                            </td>
	                            <td>
	                            <input type="text" name="titulli" id="demo-name" value="%"/>
                                </td>
                                <td> <input type="submit" value="Kërko" /></td>
                                </tr>
											
								</table></form>
								<div class="table-wrapper">
								<table>
								<tbody>
								<tr>
									<td>Titulli</td>
									<td>Pershkrimi</td>
									<td>Emri file-it</td>
									<td>Pamja e faqes</td>
									<td>Modifiko</td>
									
								</tr>
								<?php
                                        if (!empty($_REQUEST['titulli'])) {

                                            $titulli = mysqli_real_escape_string($konektimi, $_REQUEST['titulli']);

                                            $sql = mysqli_query($konektimi,"SELECT * FROM tedhenat WHERE Titulli LIKE '%".$titulli."%' OR PamjaeFaqes LIKE '%".$titulli."%'");

                                            while ($row = mysqli_fetch_array($sql)) {
                                                echo "<tr>";
                                                echo "<td>".$row['Titulli']."</td>";
                                                echo "<td>".$row['Pershkrimi']."</td>";
                                                echo "<td>".$row['File']."</td>";
                                                echo "<td>".$row['PamjaeFaqes']."</td>";
                                                echo "<td><a href=\"perditeso_tedhenat.php?ID_eDhena=$row[ID_eDhena]\" class='button' class='button primary'>Modifiko</a></td></tr>";
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