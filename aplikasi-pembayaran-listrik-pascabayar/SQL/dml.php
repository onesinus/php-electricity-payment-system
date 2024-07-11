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

// Mengisi tabel level
$sql = "
INSERT INTO level (nama_level) VALUES ('Admin'), ('User');
INSERT INTO user (username, password, nama_admin, id_level) VALUES ('admin', 'adminpass', 'Administrator', 1);
INSERT INTO tarif (daya, tarifperkwh) VALUES (900, 1352), (1300, 1447);
INSERT INTO pelanggan (username, password, nomor_kwh, nama_pelanggan, alamat, id_tarif) VALUES ('john', 'johnpass', '123456', 'John Doe', 'Jl. Kebon Jeruk', 1);
INSERT INTO penggunaan (id_pelanggan, bulan, tahun, meter_awal, meter_akhir) VALUES (1, 'Januari', 2023, 0, 100);
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>
