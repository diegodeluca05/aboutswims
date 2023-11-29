<?php
// Connessione al database MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$database = "nomedeldatabase";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}

// Verifica se il modulo di registrazione è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $email = $_POST["email"];

    // Esegui un'eventuale validazione dei dati dell'utente qui

    // Esegui l'inserimento dei dati nel database
    $sql = "INSERT INTO utenti (username, password, email) VALUES ('$username', '$password', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registrazione avvenuta con successo";
    } else {
        echo "Errore durante la registrazione: " . $conn->error;
    }
}

$conn->close();
?>

