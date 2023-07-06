<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cek Pesanan</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Load custom CSS -->
    <link rel="stylesheet" href="style7.css">
</head>
<body>
	<h1>Daftar Pesanan</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Alamat</th>
				<th>Nomor Telepon</th>
				<th>Tanggal Sewa</th>
				<th>Lama Sewa</th>
				<th>Baju Sewa</th>
				<th>Jumlah Sewa</th>
				<th>Metode Pembayaran</th>
				<th>Ukuran Baju</th>
				<th>Total Biaya</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Menghubungkan dengan database
			$db_host = "localhost";
			$db_user = "root"; // Ganti dengan username MySQL Anda
			$db_pass = ""; // Ganti dengan password MySQL Anda
			$db_name = "sewabaju"; // Ganti dengan nama database yang ingin Anda gunakan

			$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			if (!$connection) {
			    die("Koneksi database gagal: " . mysqli_connect_error());
			}

			// Query untuk mengambil data pesanan
			$query = "SELECT * FROM transaksi";
			$result = mysqli_query($connection, $query);

			// Perulangan untuk menampilkan data pesanan
			$no = 1;
			while ($row = mysqli_fetch_assoc($result)) {
			    echo "<tr>";
			    echo "<td>" . $no . "</td>";
			    echo "<td>" . $row['nama'] . "</td>";
			    echo "<td>" . $row['alamat'] . "</td>";
			    echo "<td>" . $row['no_telp'] . "</td>";
			    echo "<td>" . $row['tgl_sewa'] . "</td>";
			    echo "<td>" . $row['lama_sewa'] . "</td>";
			    echo "<td>" . $row['baju_sewa'] . "</td>";
			    echo "<td>" . $row['jumlah_sewa'] . "</td>";
			    echo "<td>" . $row['metode_pembayaran'] . "</td>";
			    echo "<td>" . $row['ukuran_baju'] . "</td>";
			    echo "<td>" . $row['total_biaya'] . "</td>";
			    echo "</tr>";

			    $no++;
			}

			// Menutup koneksi database
			mysqli_close($connection);
			?>
		</tbody>
	</table>
</body
