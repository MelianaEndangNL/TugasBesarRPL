<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrasi</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

	<header>
		<div class="container">
			<h1>Penyewaan Baju</h1>
		</div>
	</header>
<section id="registrasi">
    <div class="container">
        <h2>Registrasi Member</h2>
        <form action="#" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <label for="email">Email</label>
            <input type="email" id="email2" name="email" required>
            <br>
            <label for="password">Password</label>
            <input type="password" id="password2" name="password" required>
            <br>
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>
            <button type="submit">Registrasi</button>
        </form>
        <h1>Registrasi Admin Sewa Baju</h1>
        <form method="POST" action="registrasi_admin.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama2" name="nama" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="username">Username:</label>
            <input type="text" id="username2" name="username" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="passwordd" name="password" required><br><br>

            <button type="submit">Registrasi</button>
        </form>
    </div>
</section>

</body>
</html>
