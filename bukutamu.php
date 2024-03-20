<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <h2>BUKU TAMU</h2>
    <form method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" id="nama" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="komentar">Komentar:</label><br>
        <textarea name="komentar" id="komentar" required></textarea><br><br>
        
        <button type="submit" name="simpan">Simpan</button>
    </form>

    <?php
    if(isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $data = "Nama: $nama\nEmail: $email\nKomentar: $komentar\n\n";
        file_put_contents('bukutamu.txt', $data, FILE_APPEND);

        echo "<p>Data telah disimpan. Terima kasih atas kunjungan Anda!</p>";
    }
    ?>
</body>
</html>
