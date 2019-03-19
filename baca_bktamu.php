<!DOCTYPE HTML PUBLIC>
<html>
<head>
    <title>Data Buku Tamu</title>
</head>
<body>
<h1>Data Buku Tamu</h1>
<?php
// Membaca buku tamu
$fp=fopen("bukutamu.dat","r");
while (!feof($fp)){
    $baris=fgets($fp,80);
    echo $baris;
    echo "<br>";
}
fclose($fp);
?>
</body>
</html>