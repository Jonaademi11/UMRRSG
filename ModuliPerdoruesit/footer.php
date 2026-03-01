<footer id="footer">
		
					
					<?php
            $rezultati = mysqli_query($konektimi, "SELECT * FROM tedhenat WHERE PamjaeFaqes='Footer_Kontakti'");
            while ($row = mysqli_fetch_assoc($rezultati)) {

              extract($row);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h2><?php echo $Titulli ?></h2>
							<?php echo $Pershkrimi; ?>
							
							
						</section>
			<?php } ?>
									<?php
            $rezultati = mysqli_query($konektimi, "SELECT * FROM tedhenat WHERE PamjaeFaqes='Footer_Referencat'");
            while ($row = mysqli_fetch_assoc($rezultati)) {

              extract($row);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
				          <section>
							<h2><?php echo $Titulli ?></h2>
							<?php echo $Pershkrimi; ?>
						
						</section>
			<?php } ?>
					
					
					
												<?php
            $rezultati = mysqli_query($konektimi, "SELECT * FROM tedhenat WHERE PamjaeFaqes='Footer_TeDrejtatAutoriale'");
            while ($row = mysqli_fetch_assoc($rezultati)) {

              extract($row);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
					
					
							<?php echo $Pershkrimi; ?>
					
			<?php } ?>
						
				
			</footer>