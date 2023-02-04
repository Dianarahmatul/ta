<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring pH Air Hujan dan Keterangan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 class="h1" align="center">MONITORING PH AIR HUJAN DAN KETERANGAN LAYAK KONSUMSI</h1>
<p class="ket" align="center">ini adalah website untuk memonitoring pH air hujan untuk mendeteksi layak konsumsi atau tidaknya air hujan. air hujan layak konsumsi ideal berada pada nilai pH 5,6 - 6 dan hujam asam berada pada nilai pH 3-4  </p>

<?php 
	include "koneksi.php";

	$query = mysqli_query($koneksi, "SELECT * FROM tbmonitor ORDER BY id DESC LIMIT 1");
	while ($data = mysqli_fetch_array($query)) {

 ?>


	Waktu update terakhir :	(<?php echo $data['waktu'] ?>) Tanggal : (<?php echo $data['tanggal'] ?>)
		
<div class="container">
	<div class=kotak>
		<h2 class="h2">pH Air</h2>
		<div class="nilai">
		<?php echo $data['phair'] ?>
		</div>
	</div>
	<div class=kotak>
		<h2 class="h2">KETERANGAN</h2>
		<div class="nilai">
		<?php echo $data['keterangan'] ?>
		</div>
	</div>
</div>

<?php } ?>

<a href="hapus.php">Reset Data..!</a> <br><br>
</body>
</html>