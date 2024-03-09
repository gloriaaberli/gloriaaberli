<!DOCTYPE html>
<html>
<head>
    <title>InspireDaily - Frase del Giorno</title>
</head>
<body>
    <?php
    session_start(); // Avvia la sessione PHP
    $connection = mysqli_connect("localhost", "root", "", "inspiredaily");

    if (!$connection) {
        die("Connessione fallita: " . mysqli_connect_error());
    }

    $query = "SELECT frase FROM Frasi ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Frase del Giorno:</h2>";
        echo "<p>" . htmlspecialchars($row['frase']) . "</p>";
    } else {
        echo "Nessuna frase è presente nel database.";
    }

    mysqli_close($connection);

    // Controlla se l'utente è loggato come amministratore
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
        echo '<br><a href="add.php">Aggiungi una nuova frase.</a>';
        // Il link per eliminare frasi può essere aggiunto qui se necessario
    }
    ?>
</body>
</html>
