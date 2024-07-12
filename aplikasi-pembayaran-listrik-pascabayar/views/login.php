<?php
// views/login.php
session_start();
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_level'] = $user['id_level'];
        header("Location: ../index.php");
        exit();
    } else {
        $error = "Username or password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $baseUrl = '/sertifikasi/aplikasi-pembayaran-listrik-pascabayar';
    ?>
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/custom.css">
    <title>Login - Electricity Payment System</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($error)): ?>
                            <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <div class="mt-3">
                            <a href="<?= $baseUrl ?>/views/register.php">Register a new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= $baseUrl ?>/js/jquery-3.7.1.min.js"></script>
    <script src="<?= $baseUrl ?>/js/bootstrap.min.js"></script>
    <script src="<?= $baseUrl ?>/js/custom.js"></script>
</body>
</html>
