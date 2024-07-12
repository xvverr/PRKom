<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['text'])) {
        $text = $_POST['text'];

        $file = 'kom.txt';

        file_put_contents($file, $text);

        echo 'Plik został zapisany';
    } else {
        echo 'Brak danych do zapisania';
    }
} else {
    echo 'Nieprawidłowe żądanie';
}
?>
