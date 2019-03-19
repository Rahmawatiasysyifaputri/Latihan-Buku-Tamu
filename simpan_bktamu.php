<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>Simpan Data Buku Tamu</title>
</head>
<body>
<?php
//Hapus Blok Perintah ini, jika versi PHP < 4.2.0
//Blok membaca data daei form dengan method POST
$nama=$_POST["nama"];
$email=$_POST["email"];
$komentar=$_POST["komentar"];
//Akhir Hapus Blok
?>
<h1>Proses Simpan Buku Tamu</h1>
<hr>
Nama Anda       : <?php echo $nama;?>
<br>
Email Addres    : <?php echo $email; ?>
<br>
Komentar        :
<textarea name="komentar" cols="40" rows="5"><?php echo 
$komentar?></textarea>
<?php
// Proses simpan
$fp=fopen("bukutamu.dat","a+");
fputs($fp,$nama." | ".$email." | ".$komentar."\n");
fclose($fp);
?>
<p>Simpan telah berhasil dilakukan!</p>
</body>
</html>