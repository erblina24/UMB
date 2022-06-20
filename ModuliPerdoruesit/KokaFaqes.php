<?php
            $result = mysqli_query($lidh_h, "CALL SelektoTitull()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
        
        
if($result==null)
  mysqli_free_result($result);

            ?>
      <header id="header" class="alt">
            <span class="logo"><img src="images/<?php echo $Dosja ?>.svg" alt="" /></span>
            <h1><?php echo $Titulli ?></h1>
          </header>
    </section>
    <?php } ?>