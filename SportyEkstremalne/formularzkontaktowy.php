<?php
session_start();
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){
    $napis = "Profil";
} else {
    $napis = "Logowanie";
}
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontakt</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
    });
        </script>
    </head>
    <body class="kontakt">
        <header>
            <h1>Formularz kontaktowy</h1>
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
        <div class="container">
            <form> 
            <h1>Formularz kontaktowy</h1>
            <p>Wypełnij formularz i opisz swój problem</p>
            <hr>
            <label for="imie">Imię</label>
            <input class="input-field" type="text" id="imie" name="firstname" placeholder="Twoje imię.." required>       
            <label for="nazwisko">Nazwisko</label>
            <input class="input-field" type="text" id="nazwisko" name="lastname" placeholder="Twoje nazwisko.." required>
            <label for="email">Email</label>
            <input class="input-field" type="email" id="email" name="email" placeholder="Twój email.." required>
            <label for="kraj">Kraj</label>
            <input class="input-field" type="text" id="kraj" name="kraj" placeholder="Twój kraj.." required>
            <label for="tresc">Treść</label>
            <textarea class="input-field" id="tresc" name="tresc" placeholder="Opisz swój problem.." style="height:200px" required></textarea>
            <hr>
            <input type="submit" value="Wyślij">
            </form>
        </div>
        <hr>
        <footer>
            <div class="flex-center">
                <a href="https://www.twitter.com/home"><i class="fa fa-twitter fa-4x icon-3d"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-facebook fa-4x icon-3d"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram fa-4x icon-3d"></i></a>
                <a href="https://www.google.com"><i class="fa fa-google fa-4x icon-3d"></i></a>
              </div>
        </footer>
        <script src="js/dropdown.js"></script>
    </body>
    </html>