<?php
// Połączenie z bazą danych
$servername = "localhost";
$username = "root";
$password2 = "";
$dbname = "sporty";

$conn = mysqli_connect($servername, $username, $password2, $dbname);

// Sprawdzenie połączenia
if (!$conn) {
    die("Połączenie nie powiodło się: " . mysqli_connect_error());
}

// Odebranie danych z formularza
$login = isset($_POST['login']) ? $_POST['login'] : '';
$password = isset($_POST['haslo']) ? $_POST['haslo'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$first_name = isset($_POST['imie']) ? $_POST['imie'] : '';
$last_name = isset($_POST['nazwisko']) ? $_POST['nazwisko'] : '';
$birth_date = isset($_POST['data_urodzenia']) ? $_POST['data_urodzenia'] : '';
$file = $_FILES['file']['name'];
$selected_sports = $_POST['sporty'];
$selected_sports = mysqli_real_escape_string($conn, $selected_sports);
$gender = isset($_POST['plec']) ? $_POST['plec'] : '';
$currentYear = date("Y");
$currentMonth = date("m");
$currentDay = date("d");

$birthYear = date("Y", strtotime($birth_date));
$birthMonth = date("m", strtotime($birth_date));
$birthDay = date("d", strtotime($birth_date));

if (($currentMonth > $birthMonth) || ($currentMonth == $birthMonth && $currentDay >= $birthDay)) {
    $age = $currentYear - $birthYear;
  } else {
    $age = $currentYear - $birthYear - 1;
  }
  
  $sql = "SELECT id_sportu FROM sporty WHERE nazwa_sportu='$selected_sports'";
  $result = mysqli_query($conn, $sql);
  $sports = mysqli_fetch_assoc($result);
  $sports_id = $sports['id_sportu'];
  // Haszowanie hasła
  $password_hash = password_hash($password, PASSWORD_DEFAULT);
  
  if ($age >= 18) {
      $pelnoletnosc = true;
    } else {
        $pelnoletnosc = false;
    }

    // Dodawanie pozostałych danych do tabeli konta
    $sql1 = "INSERT INTO konta (email, imie, nazwisko, data_urodzenia, pelnoletnosc, plec, zdjecie)
VALUES ('$email', '$first_name', '$last_name', '$birth_date', '$pelnoletnosc', '$gender' , '$file')";

if (mysqli_query($conn, $sql1)) {
    echo "Dodano dane do tabeli konta<br>";
} else {
    echo "Błąd podczas dodawania danych do tabeli konta: " . mysqli_error($conn) . "<br>";
}

// Pobieranie ostatniego dodanego ID
$last_id = mysqli_insert_id($conn);

// Dodawanie loginu i hasła do tabeli użytkownicy
$sql2 = "INSERT INTO uzytkownicy (`login`, haslo, id_Sportu, id_Konta)
VALUES ('$login', '$password_hash', '$sports_id', '$last_id')";

$check_query = "SELECT login FROM uzytkownicy WHERE login = '$login'";
$check_result = mysqli_query($conn, $check_query);
if (mysqli_num_rows($check_result) > 0) {
    // Login już istnieje, przekieruj użytkownika na stronę rejestracji z komunikatem o błędzie
    session_start();
    $_SESSION['poduplikacji'] = '<span style="color:red">Konto o takim loginie już istnieje!</span>';
    header("Location: rejestracja.php");
} elseif (mysqli_query($conn, $sql2)) {
    echo "Dodano dane do tabeli uzytkownicy<br>";
    session_start();
$_SESSION['register_submitted'] == true;
$_SESSION['porejestracji'] = '<span style="color:red">Dziękujemy za rejestrację, '.$login.'! Możesz teraz się zalogować.</span>';


// Zamknięcie połączenia z bazą danych
mysqli_close($conn);

header("Location: logowanie.php");
exit;
}



?>