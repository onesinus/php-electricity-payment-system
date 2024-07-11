<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Angka</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1 class="mt-5">Input Angka</h1>
    <form action="input_process.php" method="post">
        <div class="form-group">
            <label for="jumlah">Masukkan jumlah nilai tugas:</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div id="inputContainer"></div>
        <button type="button" class="btn btn-primary" id="generateFields">Generate Fields</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<script>
    document.getElementById('generateFields').onclick = function() {
        var jumlah = document.getElementById('jumlah').value;
        var container = document.getElementById('inputContainer');
        container.innerHTML = '';
        for (var i = 1; i <= jumlah; i++) {
            container.innerHTML += '<div class="form-group"><label for="angka'+i+'">Angka ' + i + ':</label><input type="number" class="form-control" id="angka'+i+'" name="angka'+i+'" required></div>';
        }
    };
</script>
</body>
</html>
