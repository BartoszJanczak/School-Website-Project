<?php
    session_start();
    $login = $_SESSION["login"];
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
        <title>Profil</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
        
        <style>
            /* body{
            background-image: url('skysurfing.jpg');
            background-color: rgba(255,255,255,0.4);
            background-blend-mode: lighten;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        } */
        </style>
    </head>
    <body class="skysurfing">
        <header>
            <h1>Profil</h1>
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
<div class="tekstskysurfing">
<h2>Dane użytkownika <?php echo $login; ?></h2>
    <?php
    $con = mysqli_connect('localhost','root');
    if($con != NULL)
    {
        //echo 'polaczono<br>';
        if(mysqli_select_db($con,'sporty'))
	    {
            {
			    $wynik_zapytania = mysqli_query($con,"SELECT u.login, k.imie, k.nazwisko, k.data_urodzenia, if(k.pelnoletnosc = 1, 'Tak', 'Nie') as pelnoletnosc, k.plec, k.email, s.nazwa_sportu, k.zdjecie FROM konta k JOIN uzytkownicy u ON k.id_konta = u.id_Konta JOIN sporty s ON u.id_Sportu = s.id_sportu WHERE u.login = '{$_SESSION['login']}';");
		    }
	?>
    <table class="profil" style="border-radius: 15px; background-color: #f2ffff; padding: 20px; width: 44%; margin: auto; margin-left: 28%; margin-bottom: 2%; font-size: 20px;">
			<tbody>
			<?php
			while($wiersz_danych = mysqli_fetch_row($wynik_zapytania))
			{
				?>
				<tr>
                    <td><b>Login</b></td>
					<td><?php echo $wiersz_danych[0] ?></td>
                </tr>
                <tr>
                    <td><b>Imie</b></td>
                    <td><?php echo $wiersz_danych[1] ?></td>
                </tr>
                <tr>
                    <td><b>Nazwisko</b></td>
                    <td><?php echo $wiersz_danych[2] ?></td>
                </tr>
                <tr>
                    <td><b>Data urodzenia</b></td>
                    <td><?php echo $wiersz_danych[3] ?></td>
                </tr>
                <tr>
                    <td><b>Pełnoletność</b></td>
                    <td><?php echo $wiersz_danych[4] ?></td>
                </tr>
                <tr>
                    <td><b>Płeć</b></td>
                    <td><?php echo $wiersz_danych[5] ?></td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td><?php echo $wiersz_danych[6] ?></td>
                </tr>
                <tr>
                    <td><b>Ulubiony sport</b></td>
                    <td><?php echo $wiersz_danych[7] ?></td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><b>Zdjecie profilowe</b></td>
                    <td><img src="<?php echo $wiersz_danych[8] ?>" alt="zdjecie" width="200" height="150"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input name="wyloguj" type="button" value="Wyloguj się" onclick="location.href='wyloguj.php';"></td>
                    <td><input name="usun_konto" type="button" value="Usuń konto" onclick="location.href='usun_konto.php';"></td>
                </tr>
				<?php
			}
			?>
			</tbody>
        </table>
        </div>
			<?php
	}
	else echo 'nie ma takiej bazy danych';
}
?>
    </div>
    <i onclick="scrollToTop()" id="scrollBtn" class="fa fa-sort-asc icon" title="Skocz na góre strony"></i>
        <footer>
            <div class="flex-center">
                <a href="https://www.twitter.com/home"><i class="fa fa-twitter fa-4x icon-3d"></i></a>
                <a href="https://www.facebook.com"><i class="fa fa-facebook fa-4x icon-3d"></i></a>
                <a href="https://www.instagram.com"><i class="fa fa-instagram fa-4x icon-3d"></i></a>
                <a href="https://www.google.com"><i class="fa fa-google fa-4x icon-3d"></i></a>
              </div>
        </footer>
        <script src="js/dropdown.js"></script>
        <script src="js/rozwin.js"></script>
        <script src="js/obrocdeske.js"></script>
        <script src="js/scrolltotop.js"></script>
    </body>
</html>