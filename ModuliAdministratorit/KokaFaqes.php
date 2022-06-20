<?php
            $rezultati = mysqli_query($lidh_h, "CALL SelektoTitull()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
        
        
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
      <header id="header" class="alt">
            <span class="logo"><img src="images/<?php echo $Dosja ?>.svg" alt="" /></span>
            <h1><?php echo $Titulli ?></h1>
          </header>
    </section>
    <?php } ?>