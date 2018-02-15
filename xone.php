<?php
require_once 'header.php';
?>
  <div class="">
    <div class="container">
          <div class="col-md-4 h-50 consola" style="height:300px">
          <img src="https://news.xbox.com/en-us/wp-content/uploads/Xbox-One-X_CnslCntlr_Hrz_ANRTlt_GrdBG_96PPI_V2_RGB.jpg" height="300px" width="100%">
          <h3 class="consoleLabel"> Xbox One </h3>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <h4 style="background-color: #202d42; color: white; height: 40px; " class=""> Juegos Reconocidos </h4>
      <div class="row" style="margin-bottom: 10px; background-color:white; padding-bottom: 20px;">

        <?php
            showGame(14);
            showGame(15);
            showGame(16);
            showGame(17);
            showGame(18);
        ?>

        </div>
      </div>
    </div>
  </div>




<?php
    require_once 'footer.php';
?>
