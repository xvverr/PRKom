<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRKom</title>
</head>
<body>
    <h2>Wpisz komunikat w pole poniżej</h2>
    <form method="post">
        <input type="text" name="textInput" required>
        <button type="submit">Ustaw</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = $_POST['textInput'];
        file_put_contents("kom.txt", $text);
        echo "<p>Ustawiono komunikat</p>";
    }
    ?>
</body>
</html>
