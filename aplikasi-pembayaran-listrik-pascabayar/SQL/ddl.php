<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pembayaran_listrik";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Membuat tabel
$sql = "
CREATE TABLE IF NOT EXISTS level (
    id_level INT AUTO_INCREMENT PRIMARY KEY,
    nama_level VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nama_admin VARCHAR(50),
    id_level INT,
    FOREIGN KEY (id_level) REFERENCES level(id_level)
);

CREATE TABLE IF NOT EXISTS tarif (
    id_tarif INT AUTO_INCREMENT PRIMARY KEY,
    daya INT NOT NULL,
    tarifperkwh DECIMAL(10,2) NOT NULL
);

CREATE TABLE IF NOT EXISTS pelanggan (
    id_pelanggan INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    nomor_kwh VARCHAR(50) NOT NULL,
    nama_pelanggan VARCHAR(50) NOT NULL,
    alamat VARCHAR(100),
    id_tarif INT,
    FOREIGN KEY (id_tarif) REFERENCES tarif(id_tarif)
);

CREATE TABLE IF NOT EXISTS penggunaan (
    id_penggunaan INT AUTO_INCREMENT PRIMARY KEY,
    id_pelanggan INT,
    bulan VARCHAR(20) NOT NULL,
    tahun INT NOT NULL,
    meter_awal INT NOT NULL,
    meter_akhir INT NOT NULL,
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan(id_pelanggan)
);

CREATE TABLE IF NOT EXISTS tagihan (
    id_tagihan INT AUTO_INCREMENT PRIMARY KEY,
    id_penggunaan INT,
    bulan VARCHAR(20) NOT NULL,
    tahun INT NOT NULL,
    jumlah_meter INT NOT NULL,
    status VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_penggunaan) REFERENCES penggunaan(id_penggunaan)
);

CREATE TABLE IF NOT EXISTS pembayaran (
    id_pembayaran INT AUTO_INCREMENT PRIMARY KEY,
    id_tagihan INT,
    tanggal_pembayaran DATE NOT NULL,
    biaya_admin DECIMAL(10,2) NOT NULL,
    total_bayar DECIMAL(10,2) NOT NULL,
    id_user INT,
    FOREIGN KEY (id_tagihan) REFERENCES tagihan(id_tagihan),
    FOREIGN KEY (id_user) REFERENCES user(id_user)
);";

if ($conn->multi_query($sql) === TRUE) {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?>
