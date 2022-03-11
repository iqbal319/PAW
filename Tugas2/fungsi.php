<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="">
	<title>Belajar Fungsi</title>
</head>
<body>
	<h1>Belajar Function</h1>
	
	<?php

	// membuat fungsi 1
	function perkenalan(){
		 echo "Assalamulaikum, ";
		 echo "Perkenalkan, nama saya Ardianta<br/>";
		 echo "Senang berkenalan dengan anda<br/>";
	}

	// memanggil fungsi yang sudah dibuat
	perkenalan();

	echo "<hr>";

	// membuat fungsi 2
	function hitungUmur($thn_lahir, $thn_sekarang){
	  $umur = $thn_sekarang - $thn_lahir;
	  return $umur;
	}

		echo "Umur saya adalah ". hitungUmur(1994, 2015) ." tahun";

	echo "<hr>";

	// membuat fungsi 3
	function faktorial($angka) {
	  if ($angka < 2) {
	    return 1;
	  } else {
	  // memanggil dirinya sendiri
	  return ($angka * faktorial($angka-1));
	  }
	}

	// memanggil fungsi
	echo "faktorial 5 adalah " . faktorial(5);
	?>

</body>
</html>