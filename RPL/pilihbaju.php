<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Penyewaan Baju</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>

	<header>
		<h1>Penyewaan Baju</h1>
	</header>
	<section id="penyewaan">
		<div class="container">
			<h2>Penyewaan</h2>
			<div class="baju">
				<img src="img/baju2.jpg" alt="Baju Pesta">
				<h3>Baju Pesta</h3>
				<p>Harga: Rp. 100.000/hari</p>
				<label for="ukuran">Ukuran</label>
				<select id="ukuran" name="ukuran">
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
				</select>
				<a href="form.php" class="button">Sewa Sekarang</a>
			</div>
			<div class="baju">
				<img src="img/baju1.jpg" alt="Baju Kasual">
				<h3>Baju Kasual</h3>
				<p>Harga: Rp. 30.000/hari</p>
				<label for="ukuran">Ukuran</label>
				<select id="ukuran2" name="ukuran">
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
				</select>
				<a href="form.php" class="button">Sewa Sekarang</a>
			</div>
			<div class="baju">
				<img src="img/baju1.jpg" alt="Baju Formal">
				<h3>Baju Formal</h3>
				<p>Harga: Rp. 50.000/hari</p>
				<label for="ukuran">Ukuran</label>
				<select id="ukuran3" name="ukuran">
					<option value="S">S</option>
					<option value="M">M</option>
					<option value="L">L</option>
					<option value="XL">XL</option>
				</select>
				<a href="transaksi.php" class="button">Sewa Sekarang</a>
			</div>
		</div>
	</section>

</body>
</html>
