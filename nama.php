<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    if ($nama == '') {
        $nama = 'Anonymous';
    }
    echo "Selamat datang " . $nama ;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Nama</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
