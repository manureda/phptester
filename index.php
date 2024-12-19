<?php
// Verifica se il modulo è stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni il numero inserito dall'utente
    $numero = (int)$_POST['numero'];

    // Controlla che il numero sia valido
    if ($numero > 0) {
        echo "<h2>Tabellina del numero $numero</h2>";
        // Usa un ciclo for per stampare la tabellina
        for ($i = 1; $i <= 10; $i++) {
            $risultato = $numero * $i;
            echo "$numero x $i = $risultato<br>";
        }
    } else {
        echo "Per favore inserisci un numero maggiore di zero.";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabellina</title>
</head>
<body>
    <h1>Calcola la tabellina</h1>
    <form method="POST" action="">
        <label for="numero">Inserisci un numero: </label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcola</button>
    </form>
</body>
</html>
