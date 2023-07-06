<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login dan Registrasi</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

	<header>
		<div class="container">
			<h1>Penyewaan Baju</h1>
		</div>
	</header>
	<section id="login">
		<div class="container">
			
			<h1>Login Pengguna</h1>
			<form method="POST" action="login.php">
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" required><br><br>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password" required><br><br>
			<a href="tampilbaju.php" class="button" onclick="submit"> Login </a>
			</form>
			<h1> Login Admin</h1>
			<form method="POST" action="login.php">
				<label for="username">Username:</label>
				<input type="text" id="username2" name="username" required><br><br>
				<label for="password">Password:</label>
				<input type="password" id="password2" name="password" required><br><br>
			<a href="cekpesan.php" class="button" onclick="submit"> Login </a>
			</form>
		</div>
	</section>
	<script>
		// Ambil form dan popup
		var form = document.querySelector('form');
		var popup = document.querySelector('.popup');
		var overlay = document.querySelector('.overlay');

		// Tambah event listener pada form ketika data berhasil dikirim
		form.addEventListener('submit', function(event) {
			event.preventDefault(); // Mencegah form submit secara default
			popup.classList.add('show-popup'); // Menampilkan popup
			overlay.style.display = 'block'; // Menampilkan overlay

			// Tambah event listener pada tombol close-popup
			var closePopup = document.querySelector('.close-popup');
			closePopup.addEventListener('click', function() {
				popup.classList.remove('show-popup'); // Menutup popup
				overlay.style.display = 'none'; // Menutup overlay
			});
		});
	</script>

	
</body>
</html>
