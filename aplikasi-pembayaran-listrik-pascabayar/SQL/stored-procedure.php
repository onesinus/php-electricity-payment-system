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

// Membuat stored procedure
$sql = "
CREATE PROCEDURE getPelanggan900Watt()
BEGIN
    SELECT p.nama_pelanggan, t.daya
    FROM pelanggan p
    JOIN tarif t ON p.id_tarif = t.id_tarif
    WHERE t.daya = 900;
END
";

if ($conn->query($sql) === TRUE) {
    echo "Stored Procedure created successfully";
} else {
    echo "Error creating stored procedure: " . $conn->error;
}

$conn->close();
?>
