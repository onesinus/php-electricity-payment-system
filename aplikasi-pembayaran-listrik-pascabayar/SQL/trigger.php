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

// Membuat trigger
$sql = "
CREATE TRIGGER after_insert_penggunaan
AFTER INSERT ON penggunaan
FOR EACH ROW
BEGIN
    DECLARE jumlah_meter INT;
    SET jumlah_meter = NEW.meter_akhir - NEW.meter_awal;
    INSERT INTO tagihan (id_penggunaan, bulan, tahun, jumlah_meter, status)
    VALUES (NEW.id_penggunaan, NEW.bulan, NEW.tahun, jumlah_meter, 'Belum Lunas');
END
";

if ($conn->query($sql) === TRUE) {
    echo "Trigger created successfully";
} else {
    echo "Error creating trigger: " . $conn->error;
}

$conn->close();
?>
