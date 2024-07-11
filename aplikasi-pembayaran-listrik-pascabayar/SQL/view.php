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

// Membuat view
$sql = "
CREATE VIEW view_penggunaan_listrik AS
SELECT p.nama_pelanggan, pg.bulan, pg.tahun, pg.meter_awal, pg.meter_akhir
FROM penggunaan pg
JOIN pelanggan p ON pg.id_pelanggan = p.id_pelanggan;
";

if ($conn->query($sql) === TRUE) {
    echo "View created successfully";
} else {
    echo "Error creating view: " . $conn->error;
}

$conn->close();
?>
