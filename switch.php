<?php
require_once 'header.php';
?>
  <div class="">
    <div class="container">
     <div class="col-md-4 h-50 consola" style="height:300px" class="center">
          <img src="https://cdn.vox-cdn.com/thumbor/IVK5IRRZsFp9KWOr5SYFlctosVM=/0x0:2040x1360/1200x800/filters:focal(857x517:1183x843)/cdn.vox-cdn.com/uploads/chorus_image/image/57533307/jbareham_1492_170228_0024.0.0.jpg" height="300px" width="100%">
          <h3 class="consoleLabel"> Switch </h3>
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
            showGame(4);
            showGame(19);
            showGame(20);
            showGame(21);
            showGame(22);
            showGame(23);
            showGame(24);
        ?>

        </div>
      </div>
    </div>
  </div>




<?php
    require_once 'footer.php';
?>
