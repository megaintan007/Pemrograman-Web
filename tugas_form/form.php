<!-- Nama    : MEGA INTAN PRATIWI
     NIM     : 20051397007
     Prodi   : Manajemen Informatika 2020A -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PPDB SMAN 1 XXX</title>
</head>
<body>
    <h1>Formulir Pendaftaran Peserta Didik Baru</h1>
    <h1>SMAN 1 KOTA BAHAGIA</h1>
    <form>
        <div>
            <label> Nama Lengkap : </label>
            <input name="nama" type="text"placeholder="Masukkan nama lengkap anda"
            <br>
        </div>
        <div style="margin-bottom: 1rem;">
            <label>Jenis Kelamin : </label>
            <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki
            <input type="radio" name="jenis_kelamin" value="p"> Perempuan
        </div>
        <div>
            <label> Tempat Lahir : </label>
            <input name="kota" type="text"placeholder="Masukkan tempat lahir anda"
        </div>
        <div>
            <label>Tanggal Lahir : </label>
            <input type="date" name="tanggal_lahir">
        </div>
        <div>
            <label> Nama Orangtua/Wali : </label>
            <input name="name" type="text" placeholder="Masukkan nama">
        </div>
    </form>
</body>
</html>