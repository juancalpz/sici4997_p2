<?php
require_once 'header.php';
?>
  <div class="">
    <div class="container">

          <div class="col-md-4 h-50 consola" style="height:300px">
          <img src="https://s.aolcdn.com/hss/storage/midas/9750d914c6bd7f7c99ca0a962fd0336a/204374529/anniversary-29-ed.jpg" height="300px" width="100%">
          <h3 class="consoleLabel"> PS4 </h3>
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
            showGame(9);
            showGame(10);
            showGame(11);
            showGame(12);
            showGame(13);
        ?>

        </div>
      </div>
    </div>
  </div>




<?php
    require_once 'footer.php';
?>
