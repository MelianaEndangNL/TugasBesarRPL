<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Load custom CSS -->
    <link rel="stylesheet" href="style6.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>

    <main>
        <section>
            <br>
            <br>
            <h1>Contact Us</h1>
            <p>For any inquiries or questions, please contact us via email or phone:</p>
            <ul>
                <li>Email: <a href="mailto:sewabaju@gmail.com">sewabaju@gmail.com</a></li>
                <li>Phone: +62 856 248 2125</li>
            </ul>
        </section>
    </main>
    <section id="kontak-kami">
        <div class="container">
            <h2>Kontak Kami</h2>
            <form method="POST" action="proses.php">
                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama-lengkap" name="nama-lengkap" required>
                </div>
                <div class="form-group">
                    <label for="email3">Email</label>
                    <input type="email" class="form-control" id="email3" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea class="form-control" id="pesan" name="pesan" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>

    <br><br><br>
    <footer>
        <p>&copy; 2023 SewaBaju. All rights reserved.</p>
    </footer>

    <!-- Load Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpW1clhV8An4Qf6X9nJZuxKl+4qdh97LlqyO4xAwB/K9U4U+IbbVYUewp5" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
