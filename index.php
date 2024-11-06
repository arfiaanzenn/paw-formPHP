<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa | Kampus Suka Merdeka</title>
</head>
<body>
    <h2>Masukkan Data Kamu Dengan Jujur!</h2>
    
    <!-- Form Input Data Mahasiswa -->
    <form action="index.php" method="post">
        <label for="nim">NIM (Nomor Induk Mahasiswa):</label><br>
        <input type="text" id="nim" name="nim" required><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="jenis_kelamin">Gender:</label><br>
        <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan">Perempuan</label><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="3" required></textarea><br><br>

        <label for="no_hp">Nomor WA Aktif (+62 xxx xxxx xxxx):</label><br>
        <input type="tel" id="no_hp" name="no_hp" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" name="post" value="Simpan">
    </form>

    <?php
    // Jika form disubmit, simpan data ke file CSV
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];
        $email = $_POST['email'];

        $data = "\nNIM: $nim<br> Nama: $nama<br> Gender: $jenis_kelamin<br> Alamat: $alamat<br> No. HP: $nim<br> Email: $email<br>";

        // Buat/buka, tulis, tutup file
        $file = fopen("data.csv", "a");
        fwrite($file, $data);
        fclose($file);
    }
    ?>

    <hr>
    <a href="lihat.php" style="text-decoration: none; color: black">Lihat Data</a><br><br>
    <a href="data.csv" download style="text-decoration: none; color: black">Download Data</a>

</body>
</html>