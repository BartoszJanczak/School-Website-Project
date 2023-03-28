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
        <title>Skysurfing</title>
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
            <h1>Skysurfing</h1>
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
        <div class="skysurfingopisy">
        <table id="skysurfingopis" class="skysurfingopis">
        <tr>
          <td><img class="imgskysurfing" src="img/skysurfing3.jpg" alt="Skysurfing"></td>
          <td>
            <h3>Co to za sport?</h3>
            <p>Akrobacje powietrzne na desce, także sky surfing, <b>skysurfing</b> – dyscyplina sportowa, w której zadaniem zawodnika jest skok z samolotu, a następnie lot ślizgowy w powietrzu na desce surfingowej. Zawodnik spada z szybkością ok. 200 km/h z ok. 4 tys. m. Ma na wykonanie ewolucji ok. 50 s. Spadochron otwiera się na wysokości ok. 1312 m (według norm amerykańskich). Jednak w skokach eksperymentalnych dopuszczalna jest minimalna wysokość otwarcia spadochronu na 1150-820 m.</p>

            <p>Do figur wykonywanych podczas skoku można zaliczyć m.in.: młynek ze skrętami w lewo i prawo, helikopter lub lot głową w dół. Ewolucje oceniane są pod względem stopnia trudności i wrażeń estetycznych. Ocena dokonywana jest na podstawie filmu z lotu zarejestrowanego kamerą umieszczoną w kasku kamerzysty, który leci razem z zawodnikiem. Pięciu sędziów ocenia każdy skok w skali 0-10. Podczas lotu zawodnik ma obowiązek zademonstrować dwie rundy z 4 ewolucjami obowiązkowymi i 5 rund z układami dowolnymi.</p>
            
           <p>Konkurencja różni się od freestyle układami figur i sekwencji oraz tym, że zawodnik wyskakuje z przypiętą deską do nóg.</p>
            <h3>Sprzęt:</h3>
            <p>Minimalne wymiary deski do skoków to: 110 cm długości i 22 szerokości. Ważny jest też stosunek długości deski do wzrostu zawodnika, który powinien wynosić 0,75. Każdy ze skoczków jest wyposażony w spadochron z systemem automatycznego otwierania na określonej wysokości.</p>
            <h3>Mistrzowie świata w skysurfingu: <a onclick="show()" id="btnID">Pokaż tabele</a><a onclick="hide()" id="btnID2">Schowaj tabele</a></h3>
            <table id="mistrzowiesky" class="mistrzowiesky2">
                <tr>
                    <th>Mężczyźni</th>
                    <th>Kobiety</th>
                </tr>
                <tr>
                    <td>1994 - Stany Zjednoczone</td>
                    <td>1995 - Szwajcaria</td>
                </tr>
                <tr>
                    <td>1995 - Stany Zjednoczone</td>
                    <td>1997 - Szwajcaria</td>
                </tr>
                <tr>
                    <td>1997 - Szwajcaria</td>
                    <td>1999 - Stany Zjednoczone</td>
                </tr>
                <tr>
                    <td>1999 - Rosja</td>
                    <td>2001 - Stany Zjednoczone</td>
                </tr>
                <tr>
                    <td>2001 - Francja</td>
                    <td>2003 - Rosja</td>
                </tr>
                <tr>
                    <td>2003 - Rosja</td>
                    <td>2004 - Francja</td>
                </tr>
                <tr>
                    <td>2004 - Rosja</td>
                    <td>2006 - Rosja</td>
                </tr>
            </table>
            <table id="mistrzowiesky2" class="mistrzowiesky2">
                <tr>
                    <th>Mężczyźni</th>
                </tr>
                <tr>
                    <td>1994 - Stany Zjednoczone</td>
                </tr>
                <tr>
                    <td>1995 - Stany Zjednoczone</td>
                </tr>
                <tr>
                    <td>1997 - Szwajcaria</td>
                </tr>
                <tr>
                    <td>1999 - Rosja</td>
                </tr>
                <tr>
                    <td>2001 - Francja</td>
                </tr>
                <tr>
                    <td>2003 - Rosja</td>
                </tr>
                <tr>
                    <td>2004 - Rosja</td>
                </tr>
            </table>
            <table id="mistrzowiesky3" class="mistrzowiesky2">
                <tr>
                    <th>Kobiety</th>
                </tr>
                <tr>
                    <td>1995 - Szwajcaria</td>
                </tr>
                <tr>
                    <td>1997 - Szwajcaria</td>
                </tr>
                <tr>
                    <td>1999 - Stany Zjednoczone</td>
                </tr>
                <tr>
                    <td>2001 - Stany Zjednoczone</td>
                </tr>
                <tr>
                    <td>2003 - Rosja</td>
                </tr>
                <tr>
                    <td>2004 - Francja</td>
                </tr>
                <tr>
                    <td>2006 - Rosja</td>
                </tr>
            </table>
          </td>
        </tr>
    </table>
    </div>
    <hr>
    <div class="tekstskysurfing">
    <h3>Historia: </h3>
    <p>Dyscyplina powstała na początku lat 80. w Kalifornii. Najpierw wykorzystywano do skoków zwykłe deski surfingowe. Francuz Joel Cruciani był pierwszym, który skoczył na desce surfingowej wyposażonej w wiązania do snowboardingu. Nagranie z tego skoku zostało wykorzystane w filmie "Hibernator". Natomiast w 1988 r. L. Bouquet (również Francuz) wykonał skok na szerokiej desce z trwałym umocowaniem stóp. Inny Francuz Patrick de Gayardon stworzył system wiązań pozwalający na wypięcie deski w sytuacji zagrożenia lub w chwili rozwijania się spadochronu.</p>

    <p>W 1990 r. miały miejsce pierwsze Mistrzostwa Świata World Freestyle Federation (WFF) w Teksasie, podczas których rozgrywana była konkurencja akrobacji powietrznych na desce. Wówczas prezes WFF zaproponował, aby ocena ewolucji odbywała się przy udziale kamery.</p>

   <p>W 1992 r. Francuska Federacja Spadochronowa jako pierwsza uznała akrobacje powietrzne na desce za dyscyplinę sportową. Powstała również firma Surflite specjalizująca się w produkcji sprzętu służącego do uprawiania tego sportu. Otworzył ją Amerykanin J. Loftis.</p>

    <p>W 1993 r. odbyły się pierwsze Mistrzostwa Świata w tej dyscyplinie. Pierwszy złoty medal zdobyła amerykańska grupa Gus Wings, w której skład wchodził także Patrick de Gayardon. Dyscyplina była wówczas popularna w USA (szczególnie w Kalifornii i Illinois) oraz we Francji i Niemczech. W 1994 r. do krajów zajmujących się jej popularyzacją przystąpiła Belgia. W tym samym roku utworzono też oddzielną sekcję dla kobiet uprawiających akrobacje powietrzne na desce. W 1995 r. podczas Igrzysk Sportów Ekstremalnych do współzawodnictwa wystartowało 10 drużyn uprawiających ten sport.</p>

    <p>Zawodników i działaczy akrobacji powietrznych na desce zrzesza Skysportif International.</p>

    <p>W Polsce sport ten zaczął być uprawiany w drugiej połowie lat 90.</p>
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
        <script src="js/pokaztabele.js"></script>
        <script src="js/scrolltotop.js"></script>
    </body>
</html>