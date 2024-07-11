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

// Menggunakan commit dan rollback
$conn->autocommit(FALSE); // Disable autocommit

try {
    // Insert data tarif
    $sql1 = "INSERT INTO tarif (daya, tarifperkwh) VALUES (2200, 1699)";
    $conn->query($sql1);

    // Commit transaction
    $conn->commit();
    echo "Data tarif inserted successfully and committed.";
} catch (Exception $e) {
    // Rollback transaction
    $conn->rollback();
    echo "Error inserting data tarif: " . $e;
}