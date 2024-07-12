<?php
// controllers/AuthController.php
session_start();
include('../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_level'] = $user['id_level'];
        header("Location: ../views/home.php");
    } else {
        header("Location: ../views/login.php?error=Invalid credentials");
    }
}
?>
