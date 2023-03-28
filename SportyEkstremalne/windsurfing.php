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
        <title>Windsurfing</title>
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
            <h1>Windsurfing</h1>
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
        <table id="skysurfingopis" class="skysurfingopis">
        <tr>
          <td><img class="imgwindsurfing" src="img/windsurfing.jpg" alt="Skysurfing"></td>
          <td>
            <h3>Co to za sport?</h3>
            <p><b>Windsurfing</b> (również żeglarstwo deskowe) to rodzaj żeglarstwa wodnego, uprawiany przy użyciu deski z żaglem. Dyscyplina ta klasyfikowana jest jako konkurencja żeglarska, rozgrywana na igrzyskach olimpijskich od 1984 roku w konkurencji mężczyzn i od 1992 roku w konkurencji kobiet. Obecna klasa olimpijska to iq foil, który polega na lewitowaniu nad wodą. Po raz pierwszy wejdzie do użytkowania na igrzyskach w roku 2024.</p>

            <p>Sport polegający na żeglowaniu podobnym do jachtowego, lecz przy pomocy innego sprzętu. Deski o wyporności od 60-70 do ponad 300 litrów dzielą się na mieczowe i bezmieczowe (o szerokości dochodzącej do 101 cm, tzw. wide-body lub flapery). Pędnik stanowi zespół masztu, bomu oraz żagla o różnej powierzchni (stosuje się żagle o różnych powierzchniach, zależnie od siły wiatru oraz umiejętności i postury zawodnika, od 0,5 do 12,5 m²). Do połączenia deski z masztem stosuje się przeguby gumowe.</p>

            <h3>Rodzaje żagli windsurfingowych:</h3>
            <p>Współczesne żagle windsurfingowe zbudowane są z dwuwarstwowej folii poliestrowej zbrojonej siatką z wysoko wytrzymałych włókien. Najczęściej jest to monofilm (folia poliestrowa) oraz różne hybrydy polimerów powstających na bazie poliestru. W nowoczesnych konstrukcjach jedynie tak zwane okno żagla wykonuje się z folii PVC (polichlorek winylu).</p>
            <p>Analogicznie jak w przypadku desek, nazwy żagli są często ściśle związane ze stylem uprawiania windsurfingu. Podstawowe modele to:</p>
            <ul class="rozwin">
                <li><b>Wave</b> – Składa się z 4-5 listew idealnie komponujących się z deskami o długości mniejszej niż 3 metry. Aktualnie żagle z typu Wave są budowane bardzo lekko. Ich wymiary mają od 2,5 do 6,0 m². Są bezcambrowe, a spora powierzchnia żagla wzmocniona jest kevlarami. Wave są wyposażone w udogodnienia, które pomagają wykonywać skoki (np. podwyższenie dolnego liku).</li>
                <li><b>Freestyle</b> – Żagiel tego rodzaju ma rozmiar od 4,0 do 7,0 m² i jest zbliżony w budowie do modeli wave. Żagle freestyle różnią się tym, że są bardziej rozbudowane w dolnym liku i mają większą liczbę listew od 5 do 6. Nieznacznie wyróżnia je również maszt.</li>
                <li><b>Freeride</b> – Żagle typu Freeride są wyjątkowo lekkie i uniwersalne. Dedykowane przede wszystkim windsurferom pływającym w celach rekreacyjnych. Powierzchnia żagla wynosi od 4,0 do 9,0 m². Żagle freeride są najczęściej bezcambrowe.</li>
                <li><b>Race</b> – Żagle typu Race to sprzęt wyścigowy, skonstruowany z myślą o szybkościowych konkurencjach sportowych. Rozmiar tych żagli sięga nawet 12,5 m² (największe z nich używane są w klasie Formula Windsurfing). Posiadają one stały, głęboki profil, który uzyskano dzięki zastosowaniu dużej ilości camberów oraz użyciu poszerzonej kieszeni masztowej. Na żaglach race można osiągać dużą prędkość w bardzo krótkim czasie przy stabilnym ciągu.</li>
            </ul>
            <a class="btn1" href="#/">Zwiń</a><a class="btn2" href="#/"> Rozwiń</a>
        </td>
    </tr>
</table>
<hr>
<div class="tekstskysurfing">
    <h2>Deski windsurfingowe:</h2>
    <table class="windsurfingtable">
            <tr>
                <td>
                    <p><b>Freeride</b> – deski przeznaczone głównie do pływania amatorskiego i rekreacyjnego, głównie na spokojnej wodzie. Osiąga się na nich prędkości do 30 węzłów. Do pływania freeride najlepiej nadają się deski o szerokiej rufie, sporej stabilności, a do tego w komplecie z dużym, freerace'owym, 2 lub 3 kamberowym żaglem.</p>
                </td>
                <td><a id="btnIDfreeride"><img class="freeride" src="img/freeride.png" alt="Freeride"></a></td>
            </tr>
            <tr>   
                <td>
                    <p><b>Formula Windsurfing Class</b> – krótkie deski, nie szersze niż 1 metr. Korzysta się z nich w wyścigach Formula Windsurfing.</p>
                </td>
                <td><a id="btnIDformula"><img class="formula" src="img/formula.png" alt="Formula"></a></td>
            </tr>
            <tr>   
                <td>
                    <p><b>Wave</b> – małe, lekkie i łatwo manewrujące deski do pływania na załamujących się falach. Jest to sprzęt o długości nie większej niż 260 cm. Szerokość wynosi od 50 do 60 cm. Deska charakteryzuje się sporym podgięciem dziobu i sztywną konstrukcją. Generalną zasadą przy pływaniu na deskach Wave jest korzystanie ze sprzętu o wyporności (wyrażonej w litrach) zbliżonej do wagi zawodnika (w kilogramach). Wyporność sprzętu wave wynosi najczęściej od 65 do 90 litrów.</p>
                </td>
                <td><a id="btnIDwave"><img class="wave" src="img/wave.png" alt="Wave"></a></td>
            </tr>
            <tr>
                <td>
                    <p><b>Freestyle</b> – szerokie deski o niewielkiej wyporności (maksimum 115 litrów) przeznaczone dla żeglarzy uprawiających sztuczki akrobatyczne (skoki, zwroty, vulkan). Żagle do takich desek muszą być lekkie i manewrowe, co umożliwia błyskawiczne przyspieszenie i pozwala lepiej rotować.</p>
                </td>
                <td><a id="btnIDfreestyle"><img class="freestyle" src="img/freestyle.png" alt="Freestyle"></a></td>
            </tr>
            <tr>
                <td>
                    <p><b>Slalom</b> – krótkie deski o dużej manewrowości. Charakteryzują się mało podgiętym dzióbem i równolegle ułożonymi krawędziami. Często są wyposażone w charakterystyczne wycięcia na rufie (ang. cut outs), które ułatwiają szybsze wejście w ślizg i lepszą prędkość na halsie.</p>
                </td>
                <td><a id="btnIDslalom"><img class="slalom" src="img/slalom.png" alt="Slalom"></a></td>
            </tr>
            <tr>
                <td>
                    <p><b>Speed</b> – grupa desek przeznaczona do uzyskiwania maksymalnych prędkości. Są to deski wąskie , krótkie, które charakteryzują się małą wypornością.</p>
                </td>
                <td><a id="btnIDspeed"><img class="speed" src="img/speed.png" alt="Speed"></a></td>
            </tr>
            <tr>
                <td>
                    <p><b>Super-x</b> – deski przeznaczone do konkurencji Super-X. Deski te łączą w sobie zalety desek slalomowych oraz freestylowych. Charakteryzują się dużą prędkością maksymalną, szybkością wchodzenia w ślizg oraz bardzo dobrą zwrotnością i manewrowością. Przeznaczone do pływania przy umiarkowanym i silnym wietrze.</p>
                </td>
                <td><a id="btnIDsuperx"><img class="superx" src="img/superx.png" alt="Superx"></a></td>
            </tr>
        </table>
        <ul class="deski2">
            <li><b>Freeride</b> – deski przeznaczone głównie do pływania amatorskiego i rekreacyjnego, głównie na spokojnej wodzie. Osiąga się na nich prędkości do 30 węzłów. Do pływania freeride najlepiej nadają się deski o szerokiej rufie, sporej stabilności, a do tego w komplecie z dużym, freerace'owym, 2 lub 3 kamberowym żaglem.</li>
            <li><b>Formula Windsurfing Class</b> – krótkie deski, nie szersze niż 1 metr. Korzysta się z nich w wyścigach Formula Windsurfing.</li>
            <li><b>Wave</b> – małe, lekkie i łatwo manewrujące deski do pływania na załamujących się falach. Jest to sprzęt o długości nie większej niż 260 cm. Szerokość wynosi od 50 do 60 cm. Deska charakteryzuje się sporym podgięciem dziobu i sztywną konstrukcją. Generalną zasadą przy pływaniu na deskach Wave jest korzystanie ze sprzętu o wyporności (wyrażonej w litrach) zbliżonej do wagi zawodnika (w kilogramach). Wyporność sprzętu wave wynosi najczęściej od 65 do 90 litrów.</li>
            <li><b>Freestyle</b> – szerokie deski o niewielkiej wyporności (maksimum 115 litrów) przeznaczone dla żeglarzy uprawiających sztuczki akrobatyczne (skoki, zwroty, vulkan). Żagle do takich desek muszą być lekkie i manewrowe, co umożliwia błyskawiczne przyspieszenie i pozwala lepiej rotować.</li>
            <li><b>Slalom</b> – krótkie deski o dużej manewrowości. Charakteryzują się mało podgiętym dzióbem i równolegle ułożonymi krawędziami. Często są wyposażone w charakterystyczne wycięcia na rufie (ang. cut outs), które ułatwiają szybsze wejście w ślizg i lepszą prędkość na halsie.</li>
            <li><b>Speed</b> – grupa desek przeznaczona do uzyskiwania maksymalnych prędkości. Są to deski wąskie , krótkie, które charakteryzują się małą wypornością.</li>
            <li><b>Super-x</b> – deski przeznaczone do konkurencji Super-X. Deski te łączą w sobie zalety desek slalomowych oraz freestylowych. Charakteryzują się dużą prędkością maksymalną, szybkością wchodzenia w ślizg oraz bardzo dobrą zwrotnością i manewrowością. Przeznaczone do pływania przy umiarkowanym i silnym wietrze.</li>
        </ul>
        <h3>Historia windsurfingu:</h3>
        <p>Za twórców windsurfingu uważa się dwóch Kalifornijczyków: żeglarza i konstruktora lotniczego Jima Drake’a oraz surfera i matematyka Hoyla Schweitzera. To oni przewodzili grupie przyjaciół z Los Angeles, która pod koniec lat sześćdziesiątych stworzyła deskę windsurfingową. Konstruktorzy wykorzystali przy tym komputerowe metody projektowania. Po przeprowadzeniu wielu prób na wodzie, otrzymali ostateczny kształt żagla, masztu, bomu i deski oraz opracowali sposoby łączenia ze sobą poszczególnych elementów.</p>
        
        <p>Trudno jednoznacznie wskazać, kto był wynalazcą windsurfingu. W różnych częściach świata, nie związani ze sobą konstruktorzy już wcześniej pracowali nad połączeniem deski surfingowej z żaglem. W 1965 roku magazyn Popular Mechanics opublikował artykuł Newmana Darby’ego, w którym opisano konstrukcję przypominającą deskę surfingową, zaopatrzoną w kwadratowy żagiel. W Wielkiej Brytanii deskę z żaglem już pod koniec lat pięćdziesiątych łączył Peter Chilvers, a w Australii jeszcze wcześniej zajmował się tym nastolatek Richard Eastaugh.</p>
        
        <p>Jednak to Jim Drake i Hoyle Schweitzer są autorami określenia „windsurfer”, które zostało opatentowane w USA w 1973 roku. Na tym skończyła się wspólna przygoda obu konstruktorów. Drake jako naukowiec nie chciał zajmować się zawodowo handlem, więc odsprzedał wszelkie prawa do patentu Schweitzerowi. Ten w założonej w 1968 roku firmie Windsurfing International produkował, promował i udzielał patentu na deski windsurfingowe. Hoyle Schweitzer w dużej mierze odpowiada za rozpropagowanie sportu na świecie. Paradoksalnie, zamiast w Stanach Zjednoczonych, największą popularność windsurfing zyskał w Europie Zachodniej. Kiedy nowy sport stawał się modny, inni konstruktorzy postanowili produkować deski odwołując się do wcześniejszych konstrukcji. Patent Schweitzera wygasł w 1987 roku.</p>
        
        <p>Boom windsurfingu w latach osiemdziesiątych sprawił, że sport ten awansował do kategorii dyscyplin olimpijskich. Stało się to w roku 1984. W połowie lat dziewięćdziesiątych popularność windsurfingu zmniejszyła się. Nastąpił jednak rozwój sprzętu, który stawał się coraz bardziej wyspecjalizowany.</p>
        
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