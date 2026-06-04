<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa - TI UNIMUS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <h1>WEB TI UNIMUS</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <a href="mahasiswa.html">Data Mahasiswa</a>
        </nav>
    </header>

    <main>
        <h2>Data Mahasiswa</h2>

        <!-- Tombol tambah -->
        <a href="tambahdata.html">
            <button>Tambah Data</button>
        </a>

        <!-- Container card -->
        <div class="container">

            <!-- Mahasiswa 1 -->
            <div class="card">
                <img src="assets/image/meme bahlil.jpg" alt="Bahlil">
                <div class="biodata">
                    <p><strong>Nama:</strong> Bahlil Lahadalia</p>
                    <p><strong>NIM:</strong> 123456789</p>
                    <p><strong>UTS:</strong> 80</p>
                    <p><strong>UAS:</strong> 90</p>
                    <p><strong>Tugas:</strong> 100</p>
                </div>
            </div>

            <!-- Mahasiswa 2 -->
            <div class="card">
                <img src="assets/image/fajar sadboy.jpg" alt="Fajar">
                <div class="biodata">
                    <p><strong>Nama:</strong> Fajar Sadboy</p>
                    <p><strong>NIM:</strong> 987654321</p>
                    <p><strong>UTS:</strong> 100</p>
                    <p><strong>UAS:</strong> 90</p>
                    <p><strong>Tugas:</strong> 80</p>
                </div>
            </div>

        </div>
    </main>
        <hr>
        <table align="center" border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2"></td>
                <!-- <td>2,3</td> -->
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <!-- <td>3,2</td> -->
                <!-- <td>3,3</td> -->
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>
    <footer align="center">
    <p>© 2026 TI UNIMUS</p>
    </footer>
</body>
</html>