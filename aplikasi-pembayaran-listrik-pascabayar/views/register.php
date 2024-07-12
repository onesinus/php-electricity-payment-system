<?php
// views/register.php
session_start();
require '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $errors = [];

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->execute(['username' => $username]);
    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $errors[] = "Username already exists.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
        $stmt->execute([
            'username' => $username,
            'password' => $hashed_password
        ]);

        header("Location: login.php");
        exit();
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
    <title>Register - Electricity Payment System</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($errors)): ?>
                            <div class="alert alert-danger">
                                <?php foreach ($errors as $error): ?>
                                    <p><?= $error ?></p>
                                <?php endforeach; ?>
                            </div>
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
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                        <p class="mt-3">Already have an account? <a href="login.php">Login here</a>.</p>
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
