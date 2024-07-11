<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka_dicari = $_POST['angka_dicari']; // Mendapatkan angka yang dicari dari input pengguna
    $daftar_angka = $_SESSION['daftar_angka'];

    function searchAngka($arr, $key) {
        foreach ($arr as $value) {
            if ($value == $key) {
                return true;
            }
        }
        return false;
    }

    if (searchAngka($daftar_angka, $angka_dicari)) {
        echo 'Angka ditemukan<br>';
    } else {
        echo 'Angka tidak ditemukan<br>';
    }
    echo '<a href="index.html">Kembali ke Menu</a>';
}
?>
