					<?php
            $rezultati = mysqli_query($konektimi, "SELECT * FROM tedhenat WHERE PamjaeFaqes='MenyPerdoruesi'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>
						