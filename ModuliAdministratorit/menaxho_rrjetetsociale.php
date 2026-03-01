<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
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
							<h3>SHTO TË DHËNAT E RRJETIT SOCIAL</h3>
							<div class="table-wrapper">
							<form enctype="multipart/form-data" action="shtorrjetiSocial.php" method="post" name="form">
							<table><tr>
													<select name="ID_grupmosha_umrrsg" id="demo-category">
														
														<option selected="selected">-Zgjedh Grupmoshen-</option>
														<?php
														$res=mysqli_query($konektimi,"SELECT * FROM grupmoshat_umrrsg");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['ID_grupmosha_umrrsg']; ?>"><?php echo $row['grupmosha_umrrsg']; ?></option>
															<?php
														}
														?> 
													</select></tr>
												
														
												
												<tr><td>Rrjeti Social</td>
												<td><input type="text" name="rrjetiSocial_umrrsg"></td>
												</tr>
												<tr><td>Viti Themelimit</td>
													<td><input type="text" name="vitiThemelimit_umrrsg"></td>
												</tr>
												<tr><td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
												</tr>
												

												<!--<tr>
													<td><input type="submit" name="addStudent" value="Shto" class="primary" ></td>
												</tr>-->
												
											</table>
											<input type="submit" name="shtorrjetiSocial" value="Shto" class="primary" >
														
													
										</form></div><br>
							
	
								<form method="post" action="#">	<table>
	                            <tr>
	                            <h2>KËRKO TË DHËNAT E RRJETIT SOCIAL PËR MENAXHIM</h2>
								</tr>
	                            <tr>
								<td>Shkruaj:</td>
	                            <td><input type="text" name="rrjetiSocial" id="demo-name" value="%"  />
                                </td>
                                <td> <input type="submit" value="Kërko" /></td>
                                </tr>
											
								</table></form>
								<div class="table-wrapper">
								<table>
								<tbody>
								<tr>
									<td>Rrjeti Social</td>
									<td>Viti Themelimit</td>
									<td>Grupmosha</td>
									<td>Foto</td>
									<td>Emri file-it</td>
									<td>Modifiko</td>
									<td>Fshije</td>
								</tr>
								<?php
                                        if (!empty($_REQUEST['rrjetiSocial'])) {

                                            $rrjetiSocial = mysqli_real_escape_string($konektimi, $_REQUEST['rrjetiSocial']);

                                            $sql = mysqli_query($konektimi,
                                                "SELECT
                                                    r.ID_rrjetiSocial_umrrsg,
                                                    r.rrjetiSocial_umrrsg,
                                                    r.vitiThemelimit_umrrsg,
                                                    g.grupmosha_umrrsg,
                                                    r.foto,
                                                    r.emri
                                                FROM
                                                    rrjetetsociale_umrrsg r
                                                INNER JOIN 
                                                    grupmoshat_umrrsg g ON r.ID_grupmosha_umrrsg = g.ID_grupmosha_umrrsg
                                                WHERE
                                                    r.rrjetiSocial_umrrsg LIKE '%".$rrjetiSocial."%' OR r.vitiThemelimit_umrrsg LIKE '%".$rrjetiSocial."%'
                                                ORDER BY
                                                r.ID_rrjetiSocial_umrrsg DESC"
                                            );

                                            while ($row = mysqli_fetch_array($sql)) {
                                                echo "<tr>";
                                                echo "<td>".$row['rrjetiSocial_umrrsg']."</td>";
                                                echo "<td>".$row['vitiThemelimit_umrrsg']."</td>";
                                                echo "<td>".$row['grupmosha_umrrsg']."</td>";
                                                echo "<td><img src=data:image/jpeg;base64,".base64_encode($row['foto']) . " width='80' height='100'/></td>";
                                                echo "<td>".$row['emri']."</td>";
                                                echo "<td><a href=\"modifiko_rrjetetsociale.php?ID_rrjetiSocial_umrrsg=$row[ID_rrjetiSocial_umrrsg]\" class='button' class='button primary'>Modifiko</a></td>";
                                                echo "<td><a href=\"fshije_rrjetetsociale.php?ID_rrjetiSocial_umrrsg=$row[ID_rrjetiSocial_umrrsg]\" onClick=\"return confirm('A jeni te sigurt se deshironi te fshini te dhenen?')\" class='button' class='button primary'>Fshijë</a></td>";
                                                echo "</tr>";
                                            }
                                        }
                                        ?>
								
								



											
											</tbody></table></section></div></div>

					

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