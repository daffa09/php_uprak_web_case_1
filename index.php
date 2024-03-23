<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ujian Praktek Web Semeter 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Ujian Praktek Web Semeter 2 Kasus 1</h1>

    <div class="kotak_login">

        <p class="tulisan_login">Form Registrasi</p>


        <form action="hasil.php" method="get">
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" class="form_login">
            </li>
            <li>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat" id="alamat" class="form_login">
            </li>
            <li>
                <label for="tgl_lahir">Tanggal Lahir : </label>
                <input type="date" name="tgl_lahir" id="tgl_lahir" class="form_login">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form_login">
                    <option value="#">pilih jurusan...</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                    <option value="Tehnik Komputer Jaringan">Tehnik Komputer Jaringan</option>
                </select>
            </li>
            <li>
                <label for="gender">Jenis Kelamin :</label>
                <input type="radio" name="gender" id="gender" value="Laki - Laki">
                <label for="gender">Laki-Laki</label>
                <input type="radio" name="gender" id="gender" value="Perempuan">
                <label for="gender" class="form_login">Perempuan</label>
            </li>
            <li>
                <br>
                <label for="telepon">No Telepon :</label>
                <input type="text" name="telepon" id="telepon" class="form_login">
            </li>
            <button type="submit" name="submit" class="tombol_login">Kirim</button>
        </form>

    </div>
</body>

</html>