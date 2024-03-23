<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujian Praktek Web Semeter 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php if (isset($_GET["submit"])) : ?>
        <div class="kotak-hasil">
            <h3>Nama : <?= $_GET["nama"]; ?></h3>
            <h3>Alamat :<?= $_GET["alamat"]; ?></h3>
            <h3>Tanggal Lahir : <?= $_GET["tgl_lahir"]; ?></h3>
            <h3>Jurusan : <?= $_GET["jurusan"]; ?></h3>
            <h3>Jenis Kelamin : <?= $_GET["gender"]; ?></h3>
            <h3>Nomor Telepon :<?= $_GET["telepon"]; ?></h3>
            <br>
            <a href="index.php">Kembali</a>
        </div>
    <?php endif; ?>



</body>

</html>