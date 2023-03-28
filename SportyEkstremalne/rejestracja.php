<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <title>Rejestracja</title>
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
    <body>
        <header>
            <h1>Rejestracja</h1>
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
            if (isset($_SESSION['pousunieciu'])) {
            echo $_SESSION['pousunieciu'];
            unset($_SESSION['pousunieciu']);
            }
            if (isset($_SESSION['poduplikacji'])) {
            echo $_SESSION['poduplikacji'];
            unset($_SESSION['poduplikacji']);
            }
            ?>
            </div>
            <br><br>
            <form action="rejestracja2.php" method="post" enctype="multipart/form-data">
                <div class="container3">
                    <h1>Zarejestruj się</h1>
                    <p>Wypełnij formularz żeby założyć konto</p>
                    <hr>
                    <label for="login"> Login: </label>
                    <div class="input-container">
                    <i class="fa fa-user icon"></i>
                    <input class="input-field" id="login" name="login" type="text" size="30" required>
                    </div>
                    <label for="haslo"> Haslo: </label>
                    <div class="input-container">
                    <i class="fa fa-key icon"></i>
                    <input class="input-field" id="haslo" name="haslo" type="password" size="30" required>
                    </div>
                    <label for="email"> Email: </label>
                    <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" id="email" name="email" type="text" size="30" required>
                    </div>
                    <label for="imie"> Imie: </label>
                    <div class="input-container">
                    <i class="fa fa-address-card-o icon"></i>
                    <input class="input-field" id="imie" name="imie" type="text" size="30" required>
                    </div>
                    <label for="nazwisko"> Nazwisko: </label>
                    <div class="input-container">
                    <i class="fa fa-user-circle-o icon"></i>
                    <input class="input-field" id="nazwisko" name="nazwisko" type="text" size="30" required>
                    </div>
                    <label for="plec">Wybierz płeć:</label>
                    <div class="input-container2">
                    <i class="fa fa-mars icon"></i>
                    <input type="radio" name="plec" value="Mężczyzna" required> Mężczyzna
                    <input type="radio" name="plec" value="Kobieta" required> Kobieta
                    <i class="fa fa-venus icon"></i>
                    </div>
                    <br>
                    <label for="data_urodzenia"> Data urodzenia: </label>
                    <div class="input-container">
                    <i class="far fa-calendar-alt icon"></i>
                    <input class="input-field" id="data_urodzenia" name="data_urodzenia" type="date" size="30" value="2003-07-22" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; margin-top: 6px; margin-bottom: 16px; resize: none;">
                    </div>
                    <label for="sporty">Wybierz twój ulubiony sport: </label>
                    <div class="input-container">
                    <i class='fas fa-skiing icon'></i>
                    <select name="sporty" id="sporty">
                        <option value="Spadochroniarstwo">Spadochroniarstwo</option>
                        <option value="Skysurfing">Skysurfing</option>
                        <option value="Lotniarstwo">Lotniarstwo</option>
                        <option value="Windsurfing">Windsurfing</option>
                        <option value="Highlining">Highlining</option>
                    </select>
                </div>
                <label for="file"> Dodaj zdjecie profilowe: </label> 
                <div class="input-container">
                    <input type="file" name="file">
                    </div>
                    <br>
                    <input type="submit" value="Zarejestruj się" name="register_submitted">
                    <hr>
                    <p>Zakładając konto, akceptujesz nasz <a href="#" id="myBtn">Regulamin. </a> Przeczytaj naszą politykę prywatności.</p> 
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    
                      <!-- Modal content -->
                      <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Regulamin</h3>
                        <p>Niniejszy Regulamin („Regulamin”) obowiązuje podczas tworzenia u nas konta lub robienia zakupów oraz przeglądania naszych witryn, korzystania z aplikacji, a także innych ofert i usług („Usługi”) i spółek należących do grupy. Korzystanie z naszych Usług jest bezpłatne – w przeciwnym razie pojawi się wyraźna informacja na ten temat.</p>

                            <p>Prosimy o zapoznanie się z niniejszym Regulaminem, ponieważ reguluje on sposób korzystania z naszych Usług i robienia zakupów w naszym serwisie. Więcej informacji na temat praw przysługujących Ci w związku z zamawianiem produktów za pośrednictwem naszej witryny można znaleźć w Standardowych warunkach sprzedaży, z kolei w razie chęci zapoznania się ze sposobem gromadzenia i przetwarzania udostępnianych nam danych osobowych w związku z naszymi Usługami należy zapoznać się z naszą Polityką prywatności. W razie dalszych pytań prosimy o kontakt z zespołem ds. obsługi klienta.</p>
                            
                            <p>Zastrzegamy sobie prawo do rozwiązania niniejszej umowy, jeśli naruszysz jej Warunki, lub w innym przypadku z uwzględnieniem 4-miesięcznego okresu wypowiedzenia. Masz prawo rozwiązać niniejszą umowę w dowolnym momencie, żądając usunięcia swojego konta.</p>
                            <h3>Aby założyć konto, robić zakupy lub mieć dostęp do naszych witryn, aplikacji, korzyści i usług, trzeba:</h3>
                            <ul>
                                    <li>mieć przynajmniej 16 lat.</li>
                                    <li>przekazać poprawne dane na swój temat i nie przekazywać danych innych osób bez ich zgody.</li>
                                    <li>korzystać z naszych Usług wyłącznie do celów osobistych, niezwiązanych z handlem, biznesem ani działalnością zawodową.</li>
                                    <li>mieć tylko jedno konto na naszej stronie. Zastrzegamy sobie prawo do usuwania kolejnych kont tego samego użytkownika.</li>
                                    <li>upewnić się, że nie dochodzi do niewłaściwego korzystania z naszych witryn lub aplikacji, lub innych usług, w postaci świadomego wprowadzania wirusów, koni trojańskich, robaków, bomb logicznych oraz innych materiałów złośliwych lub szkodliwych pod względem technologicznym podczas korzystania z naszych witryn. Zabronione jest korzystanie z systemów zautomatyzowanych, skryptów i usług stron trzecich do tworzenia konta, zakupu produktów lub korzystania z naszych usług w Twoim imieniu. Zabrania się pobierania, instalowania lub w inny sposób używania naszego oprogramowania, takiego jak aplikacje mobilne, do celów innych niż zamierzone przeznaczenie, zgodnie z informacjami przedstawionymi powyżej, zwłaszcza do opracowania narzędzi umożliwiających obejście ograniczeń w zakresie użytkowania konta, takich jak ograniczenia zawarte w niniejszych Warunkach.</li>
                            </ul>
                      </div>
                    </div>
                </div> 
            </form>
            <div class="zaloguj">
                <p>Masz już konto? <a href="logowanie.php">Zaloguj się</a>.</p>
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
    <script>
    var message = document.getElementById("message");
    message.style.display = "block";
  </script>
    <script src="js/modal.js"></script>
    </body>
</html>