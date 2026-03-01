<?php

	include('kyqu.php');
	if ((isset($_SESSION['perdoruesi_umrrsg']) != '')) 
	{
		header('Location: ballina.php');
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
		
				<script src="jquery.js"></script>

	<script>
    $(document).ready(function () {
        $.getJSON("test.json", function (data) {

            var arrItems = [];      // THE ARRAY TO STORE JSON ITEMS.
            $.each(data, function (index, value) {
                arrItems.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });

            // EXTRACT VALUE FOR TABLE HEADER.
            var col = [];
            for (var i = 0; i < arrItems.length; i++) {
                for (var key in arrItems[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            // CREATE DYNAMIC TABLE.
            var table = document.createElement("table");

            // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

            var tr = table.insertRow(-1);                   // TABLE ROW.

           /* for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");      // TABLE HEADER.
                th.innerHTML = col[i];
                tr.appendChild(th);
            }*/

            // ADD JSON DATA TO THE TABLE AS ROWS.
            for (var i = 0; i < arrItems.length; i++) {

                tr = table.insertRow(-1);

                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = arrItems[i][col[j]];
                }
            }

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("shfaqe");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        });
    }); </script>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					
                <?php include_once("header.php"); ?>


				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
									 <div class="row">
									 <div class="col-6 col-12-medium">
										
											<h3>UDHËZIM</h3>
										
										<blockquote id=shfaqe></blockquote>
										</div>
										
									<div class="col-6 col-12-medium">
										<h3>KYCJA NE UEBAPLIKACION</h3>
										    <form method="post" action="#">
											<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
													<input type="text" name="perdoruesi" id="demo-name" placeholder="Përdoruesi" /></div>
											<div class="col-6 col-12-xsmall">
													<input type="password" name="fjalekalimi" id="demo-password" placeholder="Fjalëkalimi" /></div>
												<div class="col-12">
													<ul class="actions">
														<li><input type="submit" name="submit" value="Kyçu"/></li>
														
													</ul>
												</div>
									</div>
									</form>
									</div>
								</div>
								</div>
								</div>
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