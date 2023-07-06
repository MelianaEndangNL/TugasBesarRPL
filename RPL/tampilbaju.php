<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Tampilan Gambar Baju</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
	<header>
		<h1>Tampilan Gambar Baju</h1>
	</header>

	<section>
		<h2>Baju Pesta</h2>
		<img src="img/baju2.jpg" alt="Baju Pesta">
		<p>Deskripsi: Baju pesta dengan desain elegan dan terbuat dari bahan sutra berkualitas tinggi.</p>
		<p>Harga: Rp. 100.000/hari</p>
		<label for="ukuran">Ukuran</label>
		<select id="ukuran" name="ukuran">
			<option value="S">S</option>
			<option value="M">M</option>
			<option value="L">L</option>
			<option value="XL">XL</option>
		</select>
		<a href="pilihbaju.php" class="button"> Sewa Sekarang </a>
	</section>

	<section>
		<h2>Baju Kasual</h2>
		<img src="img/baju1.jpg" alt="Baju Kasual">
		<p>Deskripsi: Baju kasual dengan desain simpel dan nyaman dipakai sehari-hari.</p>
		<p>Harga: Rp. 30.000/hari</p>
		<a href="pilihbaju.php" class="button"> Sewa Sekarang </a>
		<label for="ukuran">Ukuran</label>
		<select id="ukuran2" name="ukuran">
			<option value="S">S</option>
			<option value="M">M</option>
			<option value="L">L</option>
			<option value="XL">XL</option>
		</select>
	</section>

	<section>
		<h2>Baju Formal</h2>
		<img src="img/baju1.jpg" alt="Baju Formal">
		<p>Deskripsi: Baju formal dengan desain klasik dan cocok untuk acara formal.</p>
		<p>Harga: Rp. 50.000/hari</p>
		<label for="ukuran">Ukuran</label>
		<select id="ukuran3" name="ukuran">
			<option value="S">S</option>
			<option value="M">M</option>
			<option value="L">L</option>
			<option value="XL">XL</option>
		</select>
		<a href="pilihbaju.php" class="button"> Sewa Sekarang </a>
	</section>

</body>
</html>
