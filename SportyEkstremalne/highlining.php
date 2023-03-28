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
        <title>Highlining</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
    </head>
    <body class="spadochron">
        <header>
            <h1>Highlining</h1>
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
        <table class="spadochronopis">
            <tr>
              <td>
                <h3>Co to za sport?</h3>
                <p><b>Highlining</b> jest spacerem w przestrzeni, gdzie slackliner zwany tu również highlinerem jest zabezpieczony przed upadkiem z wysokości na ziemię. Podstawowe zabezpieczenie to:</p>
                <ol>
                   <li>Backup – taśma lub lina, która jest zawieszana pod taśmą główną, na wypadek jej zerwania i posiada osobne mocowania;</li>
                   <li>Ring – obręcz obejmująca taśmę główną i backup;</li>
                   <li>Leash – lina łącząca ring z uprzężą highlinera. Osoba zajmująca się montażem i zawieszaniem taśmy highline to tzw. rigger (od ang. rigging – montaż konstrukcji). Jest to skomplikowana i bardzo odpowiedzialna dziedzina wiedzy.</li>
                </ol>
                <p>Highline to taśma o długości od kilkunastu metrów do kilku kilometrów, zawieszona na wysokości od kilkunastu do kilkuset metrów (lub nawet wyżej). Szerokość taśmy highline to 2- 2,5 cm. Ze względu na wysokość, długość highline jest ograniczona zasadzie tylko ilością posiadanego sprzętu oraz warunkami atmosferycznymi. Aktualny rekord długości przejścia highline wynosi 2,13 km ( Friedi Kühne, Lukas Irmler, Quirin Herterich and Ruben Langer, 4-6.07.2021r.).</p>
                <p>Z uwagi na swą specyfikę, highline jest trudniejszą odmianą slackline od swoich naziemnych sióstr z kilku względów. Po pierwsze brak tu punktu odniesienia, jakim jest ziemia, co utrudnia utrzymanie równowagi. Po drugie wymiar emocjonalny – adrenalina, lęk przestrzeni i lęk wysokości zaburzają koncentrację i powodują spięcie mięśni, co przekłada się bezpośrednio na drżenie taśmy. Po trzecie należy tu opanować dwie nowe techniki, tj. technika wejścia na taśmę po upadku na leash oraz technikę wstawania z taśmy bez pomocy podłoża.</p>
                <p>Highline jest bardzo widowiskową odmianą slackline i często towarzyszy wszelkiego rodzaju pokazom i eventom. Rozwój technik wytwarzania (elastyczność), zawieszania (bezpieczeństwo) i napinania (sprężystość) taśm dał highlinerowi wręcz nieograniczone możliwości w kombinacji tricków dynamicznych, co spowodowało, że od niedawna stał się on dyscypliną sportową – highline freestyle. </p></td>
                <td><img src="img/highlining.jpg" alt="Highlining"></td>
            </tr>
        </table>
        <hr>
        <div class="tekstskysurfing">
        <h3>Historia:</h3>
        <p>Wszystko zaczęło się w latach 80. ubiegłego wieku w Kalifornii w dolinie Yosemite. Nie od razu do chodzenia nad powierzchnią ziemi używano specjalnych taśm. Początkowo wykorzystywano elementy architektury miejskiej, w tym łańcuchy okalające parking.</p>
        
        <p>Najpopularniejszym celem slacklinerów jest Lost Arrow Spire Highline w Yosemite. Tutaj slackline miało swój początek, dlatego przyciąga rzesze osób, chcących zapieczętować swoją obecność w miejscu, w którym zaczęła się historia. Jedną z dysyplin slackline jest highline.</p>
        <p>Nowe rekordy świata w pokonywaniu długich dystansów w highline ciągle się zmieniają, ale w czołówce najlepszych zawodników znajdują się Pablo Signoret, Samuel Volery, Nathan Paulin czy Danny Mensik. Za sprawą dyfuzji dyscyplina ta szybko przywędrowała do Polski i na inne kontynenty.</p>

        <p>W wielu miastach naszego kraju można zacząć stawiać pierwsze kroki na taśmie. Grono zwolenników tej dyscypliny sportu nieustannie się zwiększa. Lublin jest tym miastem, do którego co roku przyjeżdżają ludzie z całego świata po to, by wziąć udział w Urban Highline Festiwal. Warto wspomnieć o tym, że jest to największa tego typu impreza na świecie, której pierwsza edycja odbyła się w 2008 roku. W te wakacje 305 zawodników z 36 krajów prezentowało swoje umiejętności, przechodzili m.in. na taśmie zawieszonej pomiędzy wieżą Trynitarską a Archikatedrą lubelską.</p>
        </div>
        <div class="teksthighlining">
        <h3>Rodzaje i odmiany highline:</h3>
        <ul>
        <li><b>Midline</b> – niski highline, przeważnie do kilkunastu metrów wysokości;</li>
        <li><b>Urban highline</b> – highline w warunkach miejskich. Aktualny rekord to 350 metrów (Mia Noblet i Friedrich Kühne, 08.09.2019 r.);</li>
        <li><b>Speedline</b> – to szybkościowa forma rywalizacji na highline. Zazwyczaj są to dwie równolegle zawieszone taśmy. Wygrywa slackliner który pierwszy przejdzie swoją taśmę. W innej formie jest to jedna taśma i liczony jest czas przejścia.</li>
        <li><b>Highline rumble</b> – sprawnościowa forma rywalizacji. Dwóch slacklinerów wchodzi na jedną taśmę highline i wygrywa ten, który pierwszy strąci drugiego z taśmy.</li>
        <li><b>Blindfold</b> – highline bez użyci zmysłu wzroku. Aktualny rekord to 1 kilometr (Friedi Kühne, 12.04.2019 r.).</li>
        <li><b>Free solo</b> – highline bez zabezpieczeń. Aktualny rekord to 300 metrów (Philippe Soubies, 06.01.2021 r).</li>
        </ul>
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
        <script src="js/scrolltotop.js"></script>
    </body>
</html>