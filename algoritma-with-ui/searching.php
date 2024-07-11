<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Searching</h1>
    <form action="search_result.php" method="post">
        <div class="form-group">
            <label for="search">Masukkan angka yang dicari:</label>
            <input type="number" class="form-control" id="search" name="search" required>
        </div>
        <button type="submit" class="btn btn-success">Cari</button>
    </form>
    <a href="index.php" class="btn btn-primary mt-3">Kembali ke Menu</a>
</div>
</body>
</html>
