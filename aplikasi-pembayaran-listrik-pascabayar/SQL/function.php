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

// Membuat function
$sql = "
CREATE FUNCTION getTotalPenggunaanBulanan(bulan VARCHAR(20), tahun INT) RETURNS INT
BEGIN
    DECLARE total INT;
    SELECT SUM(meter_akhir - meter_awal) INTO total
    FROM penggunaan
    WHERE bulan = bulan AND tahun = tahun;
    RETURN total;
END;
";

if ($conn->multi_query($sql) === TRUE) {
    echo "Function created successfully";
} else {
    echo "Error creating function: " . $conn->error;
}

$conn->close();
?>
