<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah = $_POST['jumlah']; // Mendapatkan jumlah angka yang akan diinput
    echo '<h2>INPUT ANGKA</h2>';
    echo '<form action="save_input.php" method="post">';
    for ($i = 1; $i <= $jumlah; $i++) {
        echo '<label for="angka' . $i . '">Angka ' . $i . ':</label><br>';
        echo '<input type="number" id="angka' . $i . '" name="angka[]" required><br><br>';
    }
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}
?>
