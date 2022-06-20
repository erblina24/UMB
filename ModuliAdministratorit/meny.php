<nav id="nav">
	<?php
            $rezultati = mysqli_query($lidh_meny,"CALL SelektoMenyAdm()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_rezultati($rezultati);

			}
            ?>
        </nav>