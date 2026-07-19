<?php
    require 'fungsi.php';
    if(isset($_GET['keyword']) && $_GET['keyword'] != ""){
    $keyword = $_GET['keyword'];

    $query = "SELECT * FROM mahasiswa
              WHERE nama LIKE '%$keyword%'
              OR nim LIKE '%$keyword%'
              OR prodi LIKE '%$keyword%'";
    }else{
        $query = "SELECT * FROM mahasiswa";
    }

    $mahasiswas = tampildata($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - TI UNIMUS</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="mahasiswa-page">

    <header>
        <h1>WEB TI UNIMUS</h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <a href="mahasiswa.php" class="active">Data Mahasiswa</a>
        </nav>

    </header>

    <main>
        <h2>Data Mahasiswa</h2>

            <a href="tambahdata.php" class="btn-tambah">
            + Tambah Data
            </a>

            <div class="search-box">
                <form action="" method="GET">
                    <input type="text"
                        name="keyword"
                        placeholder="Cari nama, NIM, atau prodi..."
                        value="<?= isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">

                    <button type="submit" class="btn-search">Cari</button>
                </form>
            </div>

        <br><br>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php
                $no = 1;
                foreach ($mahasiswas as $mhs)
                {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['no_hp']; ?></td>
                <td>
                    <img src="assets/image/<?= $mhs['foto']; ?>" alt="<?= $mhs['nama']; ?>"
                         width="100">
                </td>
                <td class="aksi">
                    <a href="editdata.php?id=<?= $mhs['id']; ?>" class="btn-edit">
                    Edit
                    </a>

                    <a href="deletedata.php?id=<?= $mhs['id']; ?>" class="btn-hapus"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </a>
                </td>
            </tr>

            <?php
                };
            ?>

        </table>
    </main>

    <br><br>

    <footer align="center">
        <p>&copy; 2026 TI UNIMUS</p>
    </footer>

    <script>
        const keyword = document.querySelector('input[name="keyword"]');

        keyword.addEventListener('input', function () {
            if (this.value.trim() === '') {
                window.location.href = 'mahasiswa.php';
            }
        });
    </script>
</body>
</html>