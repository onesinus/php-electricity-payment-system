<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['daftar_angka'] = $_POST['angka']; // Menyimpan angka yang diinput ke dalam sesi
    echo 'Data telah disimpan.<br>';
    echo '<a href="index.html">Kembali ke Menu</a>';
}
?>
