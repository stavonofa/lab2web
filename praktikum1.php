<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h2>Form Input</h2>
    <form method="post">
        <label for="fNama">Nama: </label><br>
        <input type="text" id="fNama" name="nama"><br>
        <label for="fTanggal">Tanggal:</label> <br>
        <input type="date" name="tanggal" id="fTanggal"><br>
        <label for="fPekerjaan">Pekerjaan: </label><br>
        <select name="pekerjaan" id="fPekerjaan">
            <option value="Tidak ada">Tidak ada</option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Karyawan">Karyawan</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Kirim">
    </form>
    <?php

    if (isset($_POST["submit"])) {
        echo '<h2>Hasil</h2>';
        echo 'Selamat Datang ' . $_POST['nama'] . '<br>';
        echo 'Tanggal :' . $_POST["tanggal"] . '<br>';
        echo 'Pekerjaan :' . $_POST["pekerjaan"] . '<br>';
        echo 'Umur :' . date_diff(date_create($_POST["tanggal"]), date_create('today'))->y . "<br>";
        if ($_POST["pekerjaan"] == "Mahasiswa") {
            echo 'Gaji: RP. 0 <br>';
        } else if ($_POST["pekerjaan"] == "Karyawan") {
            echo 'Gaji: RP. 5000000 <br>';
        } else {
            echo 'Gaji: RP. 0 <br>';
        }
    }
    ?>
    </form>
</body>

</html>