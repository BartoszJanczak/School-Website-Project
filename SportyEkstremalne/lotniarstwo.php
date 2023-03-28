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
        <title>Lotniarstwo</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
    </head>
    <body class="spadochron">
        <header>
            <h1>Lotniarstwo</h1>
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
        <div class="lotniarstwoopis">
        <table class="spadochronopis">
            <tr>
              <td>
                <h3>Co to za sport?</h3>
                <p><b>Lotniarstwo</b> to sport i forma rekreacji polegająca na lataniu z użyciem lotni. Jest to bardzo popularna forma lotnictwa amatorskiego, niewymagająca specjalnej infrastruktury (lotnisk) ani dużych nakładów finansowych.</p>
                <p>Lotnia jest szybującym płatowcem, którego skrzydło rozpięte jest na stelażu z metalu lub tworzywa sztucznego. Usztywnienie jest główną cechą odróżniającą lotnię od paralotni.</p>
                <p>Motolotnia jest lotnią wyposażoną w napęd oraz w stałe podwozie. Spotyka się także lotnie wyposażone w silnik małej mocy ale bez stałego podwozia (pilot startuje na nogach). Nie jest to jednak wtedy motolotnia lecz jedynie lotnia z napędem. Zazwyczaj jest to silnik spalinowy ze śmigłem, choć dokonano też udanych prób lotu z silnikiem turbinowym.</p>
                <h3>Latanie:</h3>
                <p>Najprostszą formą są zloty, polegające na starcie ze zbocza odpowiednio stromego wzniesienia, a następnie szybowaniu i lądowaniu na niżej położonym terenie.</p>
                <p><b>Loty termiczne:</b></p>
                <p>Niektóre powierzchnie lądu pod wpływem promieni słonecznych nagrzewają się szybciej (np. skały, asfalt, budynki), a następnie nagromadzone ciepło oddają sąsiadującemu powietrzu, które unosi się, tworząc tzw. komin termiczny. Przy słabym wietrze kominy są stałe i ciągłe. Przy silniejszym mogą być przerywane i przenoszone wraz z wiatrem z dala od terenu, nad którym powstały.</p>
                
                <p class="rozwin">Piloci lotni, znajdując komin termiczny, latają wokół jego centrum by jak najdłużej pozostawać w strefie najsilniejszych noszeń. Ponieważ różnice w prędkości wznoszenia są bardzo trudno wyczuwalne dla człowieka, piloci z reguły posiłkują się wariometrem, który za pomocą wyświetlacza i sygnałów dźwiękowych informuje o prędkości i kierunku ruchu w pionie. Dzięki niemu możliwe jest precyzyjne określenie centrum komina i utrzymywanie się w jego bezpośredniej bliskości (tzw. centrowanie komina).</p>
                <a class="btn1" href="#/">Zwiń</a><a class="btn2" href="#/"> Rozwiń</a>
                <p><b>Hole:</b></p>
                <p>W celu uzyskania wysokości lotniarze mogą skorzystać z holu. Może się on odbywać za innym statkiem powietrznym wyposażonym w napęd, samochodem, łodzią motorową, lub za wyciągarką stacjonarną.</p>
                <p>Sterowanie lotnią odbywa się za pomocą sterownicy trzymanej przez pilota. Przesuwając ciężar ciała względem niej, pilot pochyla skrzydło, nadając mu inny kierunek lotu.</p></td>
                <td><img class="lotniarstwo" src="img/lotniarstwo.jpg" alt="Spadochron"></td>
            </tr>
        </table>
        </div>
        <hr>
        <div class="tekstskysurfing">
        <h3>Lotniarstwo w Polsce:</h3>
        <p>W 1973 roku Jerzy Lutkowski oraz inż. Jan Palutkiewicz, zaprojektowali i zbudowali lotnię, był to początek lotniarstwa w Polsce. Jerzy Lutkowski pierwsze loty testowe wykonywał ze zbocza "Osony" dawnego szybowiska Aeroklubu Częstochowskiego a następne udane loty wykonał w Olsztynie, gdzie były lepsze warunki terenowe do wykonywania lotów. W 1975 Jerzy Lutkowski oraz Andrzej Mądrzyk reprezentowali Polskę na pierwszych nieoficjalnych lotniarskich mistrzostwach świata w austriackim Kössen w marcu 1975. We wrześniu 1976 w Wetlinie w Bieszczadach odbyły się pierwsze w Polsce Lotniowe Mistrzostwa Polski, jednak z powodu złej pogody zawodów nie rozegrano, jednak na tych zawodach odbyło się rozstrzygnięcie konkursu "Skrzydła dla każdego" na najlepszą konstrukcję lotni, był to konkurs ogłoszony przez redakcje czasopism Skrzydlatej Polski i Horyzontów Techniki. 
        <h3>Kto skonstruował współczesną lotnię?</h3>
        <p>Prawdziwa historia lotniarstwa rozpoczęła się we wczesnych latach 50-tych, kiedy to Francis Rogallo – syn polskiego emigranta (Mateusza Rogali), opracował projekt skrzydła o kształcie delty, mającego umożliwić powrót na Ziemię lotem ślizgowym lądownikom NASA. Projekt został odrzucony, ale zajęli się nim prywatni pasjonaci – Amerykanie Bill Bennet i Dick Miller oraz Australijczycy Dave Kilbourn i Bill Moyes. Tak się to wszystko zaczęło. Pierwszy lot górski na lotni odbył się z Góry Kościuszki w Australii.</p>
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
        <script src="js/scrolltotop.js"></script>
    </body>
</html>