<?php
session_start();
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true){
    header('Location: profil.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logowanie</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
        <style>
    #message {display: none; position: absolute; left: 10px; right: 10px; padding: 10px; height: 30px; top: 200px; background-color: rgba(34, 131, 216, 0.01); border-radius: 5px; text-align: center;animation: fadein 2s; font-size: 30px;
    }
    @keyframes fadein {
      from { opacity: 0.2; }
      to   { opacity: 1; }
    }
  </style>
    </head>
    <body class="logowanie">
        <header>
            <h1>Logowanie</h1>
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
                <a href="logowanie.php">Logowanie</a>
                <a href="formularzkontaktowy.php">Formularz kontaktowy</a></li>
          </ul>
            </nav>
            <hr>
            <div id="message">
            <?php 
            if (isset($_SESSION['porejestracji'])) {
            echo $_SESSION['porejestracji'];
            unset($_SESSION['porejestracji']);
            }
            ?>
            </div>
            <form method="POST" action="logowanie2.php">     
            <div class="container2">
            <h1>Zaloguj się</h1>
            <?php
                if(isset($_SESSION['error']))
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
            <hr>
            <label for="login">Login</label>
            <div class="input-container">
            <i class="fa fa-user icon"></i>
            <input class="input-field" type="text" id="login" name="login" placeholder="Twoj login.." required>     
            </div>
            <label for="haslo">Hasło</label>
            <div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" id="haslo" name="haslo" placeholder="Twoje haslo.." required>
            <i class="fa fa-eye icon" id="togglePassword"></i>
            </div>
            <hr>
            <input type="submit" value="Zaloguj">
            <input name="zarejestrujsie" type="button" value="Zarejestruj się" onclick="location.href='rejestracja.php';">
            </div>
            </form>
            <hr>
        <footer>
            <div class="flex-center">
                <a href="https://www.twitter.com/home"><i class="fa fa-twitter fa-4x icon-3d"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-facebook fa-4x icon-3d"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram fa-4x icon-3d"></i></a>
                <a href="https://www.google.com"><i class="fa fa-google fa-4x icon-3d"></i></a>
              </div>
        </footer>
        <script>
    var message = document.getElementById("message");
    message.style.display = "block";

    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#haslo');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
  </script>
        <script src="js/dropdown.js"></script>
        <script src="js/pokazhaslo.js"></script>
        <script src="js/modal.js"></script>
    </body>
</html>