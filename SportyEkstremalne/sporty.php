<?php
    session_start();
    if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){
        $napis = "Profil";
    } else {
        $napis = "Logowanie";
    }

    class KonkursyOperacje {
        public  $array;

        public function __construct($array) {
            $this->array = $array;
        }

        public function add($element) {
            array_push($this->array, $element);
        }

        public function clear() {
            $this->array = [];
        }

        public function sortByDate() {
            usort($this->array, function($a, $b) {
                return strtotime($a[4]) - strtotime($b[4]);
            });
        }
        public function remove($index) {
            unset($this->array[$index]);
            $this->array = array_values($this->array);
        }

        public function shuffle() {
            shuffle($this->array);
        }
    }
    
    if(isset($_POST['usun']))
    {
        $_SESSION['array']->remove(count($_SESSION['array']->array) - 1);
    }
    elseif(isset($_POST['sortuj']))
    {
        $_SESSION['array']->sortByDate();
    }
    if (isset($_POST['dodaj']))
    {          
        $temp = [$_POST['nazwa'],$_POST['miejsce'],$_POST['imie'], $_POST['nagrody'],$_POST['data']];
        $_SESSION['array']->add($temp);
    }
    if (isset($_POST['mieszaj']))
    {
        $_SESSION['array']->shuffle();
    }
    if(isset($_POST['wyczysc'])) {
        $_SESSION['array']->clear();
    }
    if (!isset($_SESSION['array']))
    {
        $_SESSION['array'] =new KonkursyOperacje([['Windsurfing','Poznań','Andrzej Kowalski','10000$','2023-02-10'], ['Skysurfing','Szczecin','Adam Bartkowiak', '17000$','2023-03-02'], ['Highlining','Warszawa','Jerzy Wawrzyniak','13000$','2023-02-17'], ['Spadochroniarstwo','Katowice','Kamil Jankowski', '15000$','2023-03-01'], ['Lotniarstwo','Gdańsk','Jan Andrzejewski','12000$','2023-02-22']]);
    }

?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konkursy</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
    </head>
    <body class="logowanie">
        <header>
            <h1>Konkursy</h1>
        </header>
        <nav>
            <ul>
              <li><a href="index.php">Strona główna</a>
              <div class="dropdown">
              <button onclick="myFunction()" class="dropbtn">Sporty <i class="fa fa-caret-down"></i></button>  
                  <div id="myDropdown" class="dropdown-content">
                      <a href="spadochron.php">Spadochroniarstwo</a>
                      <a href="skysurfing.php">Skysurfing</a>
                      <a href="lotniarstwo.php">Lotniarstwo</a>
                      <a href="windsurfing.php">Windsurfing</a>
                      <a href="highlining.php">Highlining</a>
                  </div>
                </div>         
                <a href="sporty.php">Konkursy</a>
                <a href="logowanie.php"><?php echo $napis ?></a>
                <a href="formularzkontaktowy.php">Formularz kontaktowy</a></li> 
          </ul>
            </nav>
            <hr>
        <div style="float:left; border-radius: 15px; background-color: #f2ffff; padding: 20px; width: 35%; margin: auto; font-size: 20px; margin-left: 7%;">
        <form id="form" method="post">
        <div class="container4">
        <h1>Dodaj konkurs</h1>
        <label for="nazwa">Nazwa sportu:</label>
        <div class="input-container">
        <input type="text" class="input-field" name="nazwa">
        </div>
        <label for="miejsce">Miejsce:</label>
        <div class="input-container">
        <input type="text" class="input-field" name="miejsce">
        </div>
        <label for="imie">Imie i Nazwisko:</label>
        <div class="input-container">
        <input type="text" class="input-field" name="imie">
        </div>
        <label for="imie">Nagrody:</label>
        <div class="input-container">
        <input type="text" class="input-field" name="nagrody">
        </div>
        <label for="data">Data:</label>
        <div class="input-container">
        <input type="date" class="input-field" name="data" value="2023-02-02" style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: none;">
        </div>
        <hr>
        <input type="submit" value="Wyślij" class="button" name ="dodaj">
        </div>
    </div>
    <div style="float:right; border-radius: 15px; background-color: #f2ffff; padding: 20px; width: 43%; margin: auto; margin-bottom:8%; font-size: 20px; margin-right: 7%;">
    <table style="border: 1px solid black; width: 100%; text-align:center; font-size: 20px;">
    <a style="text-align:center; font-size: 25px; margin-left:18%; margin-right:auto;"><b>Lista konkusów w najbliższym czasie</b></a>
    <tr>
        <th style="border: 1px solid black; background-color: darkcyan; color: white;">Nazwa sportu</th>
        <th style="border: 1px solid black; background-color: darkcyan; color: white;">Miejsce</th>
        <th style="border: 1px solid black; background-color: darkcyan; color: white;">Imie i Nazwisko</th>
        <th style="border: 1px solid black; background-color: darkcyan; color: white;">Nagroda</th>
        <th style="border: 1px solid black; background-color: darkcyan; color: white;">Data</th>
    </tr>
    <?php 
    foreach($_SESSION['array']->array as $value)
    {
        ?>
        <tr>
            <td style="border: 1px solid black;"><?php echo $value[0] ?></td>
            <td style="border: 1px solid black;"><?php echo $value[1] ?></td>
            <td style="border: 1px solid black;"><?php echo $value[2] ?></td>
            <td style="border: 1px solid black;"><?php echo $value[3] ?></td>
            <td style="border: 1px solid black;"><?php echo $value[4] ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <table style="width:100%; margin-top: 2%;">
        <tr>
        <td><form method="post">
            <input type="submit" name='sortuj' value="Sortuj"></input>
        </form></td>
            <td>
        <form method="post">
        <input type="submit" name='mieszaj' value="Pomieszaj"></input>
        </form></td>
            <td><form method="post">
            <input type="submit" name='usun' value="Usuń"></input>
        </form></td>
        <td>
        <form method="post">
        <input type="submit" name='wyczysc' value="Wyczyść"></input>
        </form></td>
        </tr>
        </table>
</div>  
</form>
    </body>
</html>