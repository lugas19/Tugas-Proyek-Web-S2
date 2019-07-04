<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div>

<?php
echo "<head><title>Web Lugas</head></title>";
$fp = fopen("database.txt","a+"); //buka file database.txt untuk memulai sebelum dibaca + ditulis

	$nama = $_POST['nama']; //data dari form bayar disalin ke variabel baru
	$nama_barang = $_POST['nama_barang']; //data dari form bayar disalin ke variabel baru
	$jumlah = $_POST['jumlah']; //data dari form bayar disalin ke variabel baru
	$harga = $_POST['harga']; //data dari form bayar disalin ke variabel baru
	$total = $jumlah*$harga; //data dari form bayar disalin ke variabel baru
	$file = $_FILES["file"]["name"]; //ambil nama dari file upload
	$tempat = $_FILES["file"]["tmp_name"]; //ambil lokasi tempat file upload
	move_uploaded_file($tempat, "/".$file); //pindahkan file ke database xampp

fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$total|$file\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=bayar.php> Isi Buku Tamu </a><br>";
echo "<a class=btn href=index.php> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>