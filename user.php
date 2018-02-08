<?php
session_start();
require_once 'db.php';
class User {
    public $id = -1;
    public $username;
    public $password;
    public $email;
    
    public static function loadFromID($id) {       
        $records = getResultFromSQL('SELECT * FROM user WHERE id = ?', [$id]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        $u->address = $record['address'];
        
        return $u;
    }
    
    
    
    public static function loadFromUsername($username) {
        $records = getResultFromSQL('SELECT * FROM users WHERE username = ?', [$username]);
        
        if (count($records) == 0) {
            return null;
        }
        
        $record = $records[0];
        $u = new User();
        
        $u->id = $record['id'];
        $u->username = $record['username'];
        $u->password = $record['password'];
        $u->email = $record['email'];
        
        return $u;
    }
    
    public function save() {
        if ($this->id == -1) {
            $sql = "INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`) VALUES (NULL, ?, ?, '', '', ?);";
            
            getResultFromSQL($sql, [$this->username, $this->password, $this->email]);
        }
    }
    
    public function validatePassword($password) {
        return ($password == $this->password);
    }
}

function showGame($id){
        $result = getResultFromSQL('SELECT * FROM games WHERE game_id = ?', [$id]);
        
        if (count($result) == 0) {
            return null;
        }
        
        $result = $result[0];
                
        $gameId = $result['game_id'];
        $gameTitle = $result['game_title'];
        $gamePrice = $result['game_price'];
        $gameDesc = $result['game_desc'];
        $gameImage = $result['game_image'];
        $console = $result['console'];
        
                
        
        echo "
        <div class='col-md-3'>
          <a href='productos.php?game=$gameId'>
            <div style='border:1px solid #a1a4a8; padding: 5px'>
              <img src='$gameImage' height='270px' width='240px' style='margin-left: auto; margin-right:auto;' class='juego'> </div>
          </a>
        </div>
        
        ";
        
        }
        
function showGamePage(){
    
    $id = $_GET['game'];
    
    $result = getResultFromSQL('SELECT * FROM games WHERE game_id = ?', [$id]);
        
        if (count($result) == 0) {
            return null;
        }
        
        $result = $result[0];
        
        $gameTitle = $result['game_title'];
        $gamePrice = $result['game_price'];
        $gameDesc = $result['game_desc'];
        $gameImage = $result['game_image'];
        $console = $result['console'];
    
    echo "<div class='py-5'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-4' style='margin-bottom: 160px;'>
          <img src='$gameImage' height='400px' width='100%'> </div>
        <div class='col-md-8'>
          <h2> $gameTitle($console) </h2>
          <p class='descripcionJuego'> $gameDesc </p>
          <br>
          <br>
          <p>Price: <span><b>$$gamePrice</b></span></p>
          <a href='#' class='btn btn-outline-danger'>Comprar</a>
          <a href='#' class='btn btn-outline-danger'>Anadir a Wishlist</a>
        </div>
      </div>
    </div>
  </div>";
}

?>