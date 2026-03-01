<header id="header" class="alt">
				
				
			
		
				<?php
            $rezultati = mysqli_query($konektimi, "SELECT * FROM tedhenat WHERE PamjaeFaqes='Header'");
            while ($row = mysqli_fetch_assoc($rezultati)) {

              extract($row);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
			
					
					<h1><?php echo $Pershkrimi ?></h1>
			
		<?php } ?>
		</header>