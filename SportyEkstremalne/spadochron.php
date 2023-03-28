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
        <title>Spadochroniarstwo</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="spadochrony.png" type="image/x-icon">
    </head>
    <body class="spadochron">
        <header>
            <h1>Spadochroniarstwo</h1>
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
                    <p><b>Spadochroniarstwo</b> to sport polegający na wykonywaniu skoków spadochronowych, w których ocenie podlega element składowy skoku, zależnie od dyscypliny, na przykład wykonywanie akrobacji w swobodnym spadaniu, wykonanie akrobacji na otwartej czaszy lub precyzja lądowania.</p>
                    <p>Spadochroniarstwo jest sportem młodym. W miarę zdobywania przez skoczków coraz większych umiejętności i doświadczenia doskonalono zasady rywalizacji sportowej w spadochroniarstwie, zwiększano stopień trudności w uprawianych dotąd dyscyplinach lub wprowadzano nowe. Duży wpływ na zmiany regulaminów zawodów spadochronowych miało także doskonalenie konstrukcji spadochronu sportowego.</p>
                    <h3>Sytuacje awaryjne w spadochroniarstwie:</h3>
                    <p>Każdy skoczek spadochronowy niezależnie od metody wyszkolenia (static–line czy AFF) przyswaja procedury bezpieczeństwa związane z możliwym wystąpieniem sytuacji awaryjnej. Metodologia nauczania o sytuacjach awaryjnych zależna jest od poszczególnych ośrodków, choć źródłem wiedzy o takich sytuacjach są serwisy edukacyjne działające w oparciu o wkład społeczności spadochronowej.</p>
                    <p>Wg największej organizacji spadochronowej na świecie USPA (United States Parachute Association) sytuacje można podzielić na trzy kategorie:</p>
                    <ul>
                        <li>Sytuacje na dużej prędkości (przed otwarciem spadochronu)</li>
                        <li>Sytuacje na małej prędkości (po otwarciu spadochronu)</li>
                        <li>Dwie czasze otwarte</li>
                    </ul>
                    <p>Do każdej sytuacji awaryjnej ustalona jest procedura bezpieczeństwa, która w zdecydowanej większości przypadków jest taka sama (wypięcie spadochronu głównego i otwarcie zapasowego). Skoczkowie, którzy biorą udział w kursie AFF muszą zdać egzamin zawierający elementy procedur bezpieczeństwa (tzw. KWT – Kontrola Wiadomości Teoretycznych) przed wykonaniem pierwszego skoku w kursie AFF. Większość stref spadochronowych w Polsce na początku sezonu organizuje tzw. „Dzień Bezpieczeństwa”, podczas którego omawiane są te procedury również dla skoczków samodzielnych, którzy po przerwie zimowej chcą odświeżyć wiedzę.</p></td>
                    <td><img class="imgspadochron" src="img/spadochron.jpg" alt="Spadochron"></td>
                </tr>
            </table>
            <hr>
            <div class="tekstspadochron">
                <h3>Dyscypliny sportu spadochronowego:</h3>
                <ul class="spadochronul">
                        <li>celność lądowania</li>
                        <li>akrobacja</li>
                        <li>para-ski – obecnie bardzo rzadko uprawiane</li>
                        <li>formacje w swobodnym spadaniu w pozycji płaskiej (RW)</li>
                        <li>formacje w swobodnym spadaniu w pozycji wertykalnej (VFS)</li>
                        <li>formacje na czaszach (CRW)</li>
                        <li>dyscypliny artystyczne (freestyle, skysurfing, freeflying)</li>
                        <li>pilotowanie czaszami (canopy piloting)</li>
                        <li>latanie w wingsuicie (wingsuiting)</li>
                </ul>
        <div class="awaryjnetable1">
        <h3>Sytuacje awaryjne w spadochroniarstwie:</h3>
        <table class="awaryjnetable">
            <tr>
                <th>Sytuacje na dużej prędkości</th>
                    <th>Sytuacje na małej prędkości</th>
                    <th>Dwie czasze otwarte</th>
                </tr>
                <tr>
                    <td>Zgubiony uchwyt</td>
                    <td>Slider w połowie linek</td>
                    <td>Jeden za drugim (tzw. „Etażerka”)</td>
                </tr>
                <tr>
                    <td>Twardy uchwyt</td>
                    <td>Węzły samozaciskowe</td>
                    <td>Jeden obok drugiego (tzw. „Banan”)</td>
                </tr>
                <tr>
                    <td>Przyssanie pilocika</td>
                    <td>Linki nad czaszą (tzw. „Kalafior”)</td>
                    <td>Wariat</td>
                </tr>
                <tr>
                    <td>Holowanie pilocika</td>
                    <td>Uszkodzona czasza</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Podkowa</td>
                    <td>Zwolnienie sterówki</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Zamknięta paczka (tzw. „Kicha”)</td>
                    <td>Zerwanie sterówki</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Zawiązanie czaszy (tzw. „Grucha”)</td>
                    <td>Skręcenie linek.</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Przedłużające się otwarcie</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        </div>
        <div class="awaryjnetab">
        <h3>Sytuacje awaryjne w spadochroniarstwie:</h3>
        <table class="awaryjnetable2">
            <tr>
                <th>Sytuacje na dużej prędkości</th>
                </tr>
                <tr>
                    <td>Zgubiony uchwyt</td>
                </tr>
                <tr>
                    <td>Twardy uchwyt</td>
                </tr>
                <tr>
                    <td>Przyssanie pilocika</td>
                </tr>
                <tr>
                    <td>Holowanie pilocika</td>
                </tr>
                <tr>
                    <td>Podkowa</td>
                </tr>
                <tr>
                    <td>Zamknięta paczka (tzw. „Kicha”)</td>
                </tr>
                <tr>
                    <td>Zawiązanie czaszy (tzw. „Grucha”)</td>
                </tr>
                <tr>
                    <td>Przedłużające się otwarcie</td>
                </tr>
        </table>
        <table class="awaryjnetable3">
            <tr>
                    <th>Sytuacje na małej prędkości</th>
                </tr>
                <tr>
                    <td>Slider w połowie linek</td>
                </tr>
                <tr>
                    <td>Węzły samozaciskowe</td>
                </tr>
                <tr>
                    <td>Linki nad czaszą (tzw. „Kalafior”)</td>
                </tr>
                <tr>
                    <td>Uszkodzona czasza</td>
                </tr>
                <tr>
                    <td>Zwolnienie sterówki</td>
                </tr>
                <tr>
                    <td>Zerwanie sterówki</td>
                </tr>
                <tr>
                    <td>Skręcenie linek.</td>
                </tr>
        </table>
        <table class="awaryjnetable4">
            <tr>
                    <th>Dwie czasze otwarte</th>
                </tr>
                <tr>
                    <td>Jeden za drugim (tzw. „Etażerka”)</td>
                </tr>
                <tr>
                    <td>Jeden obok drugiego (tzw. „Banan”)</td>
                </tr>
                <tr>
                    <td>Wariat</td>
        </table>
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