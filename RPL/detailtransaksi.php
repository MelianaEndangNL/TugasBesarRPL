<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style4.css">
  <title>Transaksi Sewa Baju - Detail Transaksi</title>
</head>
<body>
  <div class="container">
    <header>
      <h1>Transaksi Sewa Baju</h1>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Include file koneksi database
        include 'connection.php';

        // Ambil data dari form
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $alamat = $_POST["alamat"];
        $no_telp = $_POST["no_telp"];
        $tgl_sewa = $_POST["tgl_sewa"];
        $lama_sewa = $_POST["lama_sewa"];
        $baju_sewa = $_POST["baju_sewa"];
        $jumlah_sewa = $_POST["jumlah_sewa"];
        $metode_pembayaran = $_POST["metode_pembayaran"];
        $ukuran_baju = $_POST["ukuran_baju"];

        // Hitung total biaya
        $harga_sewa = 0;
        switch ($baju_sewa) {
          case 'baju_pesta':
            $harga_sewa = 100000;
            break;
          case 'baju_kasual':
            $harga_sewa = 30000;
            break;
          case 'baju_formal':
            $harga_sewa = 50000;
            break;
        }
        $total_biaya = $jumlah_sewa * $harga_sewa;

        // Tampilkan hasil transaksi
        echo "<h2>Detail Transaksi</h2>";
        echo "<table class='table'>";
        echo "<tr><th>Nama:</th><td>" . $nama . "</td></tr>";
        echo "<tr><th>Email:</th><td>" . $email . "</td></tr>";
        echo "<tr><th>Alamat:</th><td>" . $alamat . "</td></tr>";
        echo "<tr><th>Nomor Telepon:</th><td>" . $no_telp . "</td></tr>";
        echo "<tr><th>Tanggal Sewa:</th><td>" . $tgl_sewa . "</td></tr>";
        echo "<tr><th>Lama Sewa:</th><td>" . $lama_sewa . " hari</td></tr>";
        echo "<tr><th>Baju yang Disewa:</th><td>" . $baju_sewa . "</td></tr>";
        echo "<tr><th>Jumlah Sewa:</th><td>" . $jumlah_sewa . "</td></tr>";
        echo "<tr><th>Metode Pembayaran:</th><td>" . $metode_pembayaran . "</td></tr>";
        echo "<tr><th>Ukuran Baju:</th><td>" . $ukuran_baju . "</td></tr>";
        echo "<tr><th>Total Biaya:</th><td>" . $total_biaya . "</td></tr>";
        echo "</table>";

        // Simpan data transaksi ke database atau lakukan tindakan lain sesuai kebutuhan
        // ...

        // Insert data transaksi ke dalam tabel
        $query = "INSERT INTO transaksi (nama, email, alamat, no_telp, tgl_sewa, lama_sewa, baju_sewa, jumlah_sewa, metode_pembayaran, ukuran_baju, total_biaya) VALUES 
          ('$nama','$email','$alamat','$no_telp','$tgl_sewa','$lama_sewa','$baju_sewa','$jumlah_sewa','$metode_pembayaran','$ukuran_baju','$total_biaya')";

        if (mysqli_query($connection, $query)) {
          echo "<p class='success-message'>Transaksi berhasil!</p>";
        } else {
          echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
      }
      ?>
    </header>
  </div> <!-- Closing container div -->
  <script>
    // Fungsi untuk menghitung total biaya sewa
    function hitungTotalBiaya() {
      var bajuSewa = document.getElementById("baju_sewa").value;
      var jumlahSewa = document.getElementById("jumlah_sewa").value;
      var hargaSewa = 0;

      switch (bajuSewa) {
        case "baju_pesta":
          hargaSewa = 100000;
          break;
        case "baju_kasual":
          hargaSewa = 30000;
          break;
        case "baju_formal":
          hargaSewa = 50000;
          break;
      }

      var totalBiaya = jumlahSewa * hargaSewa;
      document.getElementById("total_biaya").value = totalBiaya;
    }

    // Panggil fungsi hitungTotalBiaya saat terjadi perubahan pada input baju_sewa atau jumlah_sewa
    document.getElementById("baju_sewa").addEventListener("change", hitungTotalBiaya);
    document.getElementById("jumlah_sewa").addEventListener("change", hitungTotalBiaya);
  </script>
</body>
</html>
