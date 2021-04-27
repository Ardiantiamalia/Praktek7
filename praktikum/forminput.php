<html>
<head>
<title>Tambah Kontak</title>
</head>
<body>
<h2>Tambahkan Kontak</h2>
    <form method="post" action="simpann.php"> <!--perintah untuk memanggil file simpan.php-->
    <table> <!--untuk mneginputkan data baru-->
        <tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
        <tr><td>JENIS KELAMIN</td><td>
            <input type="radio" name="jenis_kelamin" value="L">Laki-laki
            <input type="radio" name="jenis_kelamin" value="P">Perempuan
        </td></tr>
        <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
        <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
        <tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
        <tr><td>PESAN</td><td><input type="text" name="pesan"></td></tr>
        <tr><td colspan="2"><button type="submit" value="simpann">SIMPAN</button></td></tr>
</table>
</form>
</body>
</html>