<?php
session_start(); // Memulai sesi

if (!isset($_SESSION['daftar_angka'])) {
    $_SESSION['daftar_angka'] = []; // Inisialisasi array angka dalam sesi
}

function inputAngka() {
    echo '<h2>INPUT ANGKA</h2>';
    echo '<form action="input.php" method="post">';
    echo '<label for="jumlah">Masukkan jumlah nilai tugas:</label><br>';
    echo '<input type="number" id="jumlah" name="jumlah" required><br><br>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
}

function sortAngka(&$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
}

function searchAngka($arr, $key) {
    foreach ($arr as $value) {
        if ($value == $key) {
            return true;
        }
    }
    return false;
}

$choice = $_POST['choice']; // Mendapatkan pilihan dari input pengguna
$daftar_angka = &$_SESSION['daftar_angka']; // Referensi ke array angka dalam sesi

if ($choice == 1) {
    inputAngka();
} elseif ($choice == 2) {
    sortAngka($daftar_angka); // Memanggil fungsi sorting
    echo '<h2>TAMPIL HASIL SORTING</h2>';
    echo 'Hasil sorting: ' . implode(", ", $daftar_angka) . '<br>'; // Menampilkan hasil sorting
    echo '<a href="index.html">Kembali ke Menu</a>';
} elseif ($choice == 3) {
    echo '<h2>TAMPIL HASIL SEARCHING</h2>';
    echo '<form action="search.php" method="post">';
    echo '<label for="angka_dicari">Masukkan angka yang dicari:</label><br>';
    echo '<input type="number" id="angka_dicari" name="angka_dicari" required><br><br>';
    echo '<input type="submit" value="Cari">';
    echo '</form>';
} elseif ($choice == 4) {
    session_destroy(); // Menghancurkan sesi
    echo 'Program selesai.<br>';
    echo '<a href="index.html">Kembali ke Menu</a>';
} else {
    echo 'Pilihan tidak valid, silakan coba lagi<br>';
    echo '<a href="index.html">Kembali ke Menu</a>';
}
?>
