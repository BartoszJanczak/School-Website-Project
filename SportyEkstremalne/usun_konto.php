<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sporty";

$login = $_SESSION["login"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete records from 'uzytkownicy' and 'konta' tables where login matches
$sql1 = "DELETE k, u FROM konta k JOIN uzytkownicy u ON k.id_konta = u.id_Konta WHERE login='$login'";

if ($conn->query($sql1) === TRUE) {
    $_SESSION['zalogowany'] = false;
} else {
    echo "Error deleting record: " . $conn->error;
}

$_SESSION['pousunieciu'] = '<span style="color:red">Konto zostało usunięte. Możesz się zarejestrować.</span>';

$conn->close();

header('Location: rejestracja.php');
exit;
?>