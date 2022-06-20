<footer id="footer">
						<?php
            $rezultati = mysqli_query($lidh_i, "CALL SelektoInformacione()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_rezultati($rezultati);

            ?><section>
            	<h2><?php echo $Titulli; ?></h2>
							<?php echo $Pershkrimi; ?>
							</section><?php } ?>
						<?php
            $rezultati = mysqli_query($lidh_d, "CALL SelektoTeDhenaMeRendesi()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_rezultati($rezultati);

            ?>
						<section>
							<h2><?php echo $Titulli; ?></h2>
							<?php echo $Pershkrimi; ?><?php } ?>
							
						<?php
            $rezultati = mysqli_query($lidh_rr, "CALL SelektoRrjeteSociale()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_rezultati($rezultati);

            ?><?php echo $Pershkrimi; ?><?php } ?>
						</section>
						
						<?php
            $rezultati = mysqli_query($lidh_dr, "CALL SelektoTeDrejtaTeRezervuara()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  
			  
if($rezultati==null)
  mysqli_free_rezultati($rezultati);

            ?>
						<?php echo $Pershkrimi; ?>
						<?php } ?>
					</footer>