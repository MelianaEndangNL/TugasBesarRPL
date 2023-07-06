<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Load Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Load custom CSS -->
  <link rel="stylesheet" href="style4.css">
  <title>Transaksi Sewa Baju - Form</title>
</head>
<body>
  <div class="container">
    <header>
      <h1>Transaksi Sewa Baju</h1>
      <form method="POST" action="detailtransaksi.php">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="no_telp">Nomor Telepon:</label>
          <input type="tel" class="form-control" id="no_telp" name="no_telp" required>
        </div>
        <div class="form-group">
          <label for="tgl_sewa">Tanggal Sewa:</label>
          <input type="date" class="form-control" id="tgl_sewa" name="tgl_sewa" required>
        </div>
        <div class="form-group">
          <label for="lama_sewa">Lama Sewa (hari):</label>
          <input type="number" class="form-control" id="lama_sewa" name="lama_sewa" required>
        </div>
        <div class="form-group">
          <label for="baju_sewa">Baju yang Disewa:</label>
          <select class="form-control" id="baju_sewa" name="baju_sewa" required>
            <option value="baju_pesta">Baju Pesta</option>
            <option value="baju_kasual">Baju Kasual</option>
            <option value="baju_formal">Baju Formal</option>
          </select>
        </div>
        <div class="form-group">
          <label for="jumlah_sewa">Jumlah Sewa:</label>
          <input type="number" class="form-control" id="jumlah_sewa" name="jumlah_sewa" required>
        </div>
        <div class="form-group">
          <label for="metode_pembayaran">Metode Pembayaran:</label>
          <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="transfer_bank">Transfer Bank</option>
            <option value="kartu_kredit">Kartu Kredit</option>
            <option value="cash">Cash</option>
          </select>
        </div>
        <div class="form-group">
          <label for="ukuran_baju">Pilih ukuran baju:</label>
          <select class="form-control" id="ukuran_baju" name="ukuran_baju" required>
            <option value="">Pilih Ukuran</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
          </select>
        </div>
        <div class="form-group">
          <label for="total_biaya">Total Biaya Sewa:</label>
          <input type="text" class="form-control" id="total_biaya" name="total_biaya" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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
