<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa - TI UNIMUS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="tambah-page">
    <header>
        <h1>WEB TI UNIMUS</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="mahasiswa.php">Data Mahasiswa</a>
        </nav>
    </header>

    <main>
        <h2>Tambah Data Mahasiswa</h2>

        <div class="card">
            <form action="mahasiswa.php" method="post">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" required>
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" required>
                </div>

                <div class="form-group">
                    <label>Prodi</label>
                    <input type="text" name="prodi" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>

                <div class="form-group">
                    <label>No HP</label>
                    <input type="tel" name="no_hp" required>
                </div>

                <div class="form-group">
                    <label>Foto</label>
                    <input type="file" name="foto" accept="image/*" required>
                </div>

                <button type="submit">Submit</button>

            </form>
        </div>
    </main>

    <footer align="center">
        <p>© 2026 TI UNIMUS</p>
    </footer>

</body>
</html>