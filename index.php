<?php
function angkaRomawi($angka)
{
	 $angka = intval($angka);
	 $result = '';
	 
	 $array = array('M' => 1000,
	 'CM' => 900,
	 'D' => 500,
	 'CD' => 400,
	 'C' => 100,
	 'XC' => 90,
	 'L' => 50,
	 'XL' => 40,
	 'X' => 10,
	 'IX' => 9,
	 'V' => 5,
	 'IV' => 4,
	 'I' => 1);
	 
	 foreach($array as $roman => $value){
	  $matches = intval($angka/$value);
	 
	  $result .= str_repeat($roman,$matches);
	 
	  $angka = $angka % $value;
	 }
	 
	 return $result;
}

?>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8" />
	<meta name="description" content="Romawi" />
	<meta name="keywords" content="Romawi" />
	<title>Praktikum 6</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="judul">
		<h1>Pratikum 6 Pemweb</h1>
	</div>
	<div class="home">
		<h1 class="heading">
			Konversi Angka Romawi
		</h1>
		<p class="nama">by Robi Hardinata</p>
		<form action="#" method="POST" align="center">
			Masukkan Angka : <input type="number" name="angka"><br><br>
			<h2>Romawi : <?php error_reporting(0); echo angkaRomawi($_POST["angka"]); ?><br></h2>
			<button type="submit">Konversi</button>
		</form>
	</div>
</body>

</html>