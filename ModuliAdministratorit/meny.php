<?php
            $rezultati = mysqli_query($konektimi, "SELECT * FROM tedhenat WHERE PamjaeFaqes='MenyAdmin'");
            while ($row = mysqli_fetch_assoc($rezultati)) {

              extract($row);
			  	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>