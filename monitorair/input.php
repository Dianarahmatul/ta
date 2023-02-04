<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Data</title>
</head>
<body>

<?php 
	include('koneksi.php');

	date_default_timezone_set('Asia/Jakarta');
	$waktu = date("H:i:s");
	$tanggal = date("d F Y");
	$phair = $_GET ['phair'];
	$keterangan = $_GET ['keterangan'];

	$kirim = mysqli_query($koneksi, "INSERT INTO tbmonitor (waktu,tanggal,phair,keterangan) VALUES ('$waktu','$tanggal','$phair','$keterangan')");

	if ($kirim) {
		echo "Data berhasil diinputkan...!";
	} else {
		echo "Gagal di inputkan...!";
	}
	

 ?>

</body>
</html>