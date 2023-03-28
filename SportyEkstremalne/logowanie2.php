<?php
if(isset($_POST['login']) && isset($_POST['haslo'])){
  //połączenie z bazą danych
  $login = $_POST['login'];
  $password = $_POST['haslo'];
  $conn = new mysqli('localhost', 'root', '', 'sporty'  );
  //jeśli wystąpi błąd połączenia z bazą danych
  if($conn->connect_error){
    die('Błąd połączenia z bazą danych: ' . $conn->connect_error);
  }
  
  //zapytanie do bazy danych
  $stmt = $conn->prepare("SELECT haslo FROM `uzytkownicy` WHERE login = ?");
  $stmt->bind_param("s", $login);

  $stmt->execute();
  $result = $stmt->get_result();
  $user = $result->fetch_assoc();
  //jeśli podany email i hasło istnieją w bazie danych
  if($user && password_verify($password, $user['haslo'])){
    //ustawienie sesji i przekierowanie
    if($login == 'admin' and $password == 'admin'){
      session_start();
      $_SESSION['admin'] = true;
      header('location: profil.php');
    }
    session_start();
    unset($_SESSION['error']);
    $_SESSION['user'] = $user;
    $_SESSION["login"] = $login; 
    $_SESSION['zalogowany'] = true;
    header('location: profil.php');
  }else{
    session_start();
    $_SESSION['error'] = '<span style="color:red">Niepoprawny login lub hasło!</span>';
    header('location: logowanie.php');
  }
}
?>