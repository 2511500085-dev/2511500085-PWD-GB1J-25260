<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>judul halaman</title>
   <link rel="stylesheet" href="style.css">.
</head>

<body>
    <header>
        <h1>Ini Header</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>ini contoh paragraf HTML.</p>
             <?php
           echo "Halo Dunia!<br>";
           echo "Nama saya irsya eva safitri";
            ?>
        </section>
        <section id="about">
            <?php
            $NIM = "2511500085";
            $nim = "2511500085";
            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM :</strong> <?php echo $NIM ?></p>
            <p><strong>NAMA :</strong>IRSYA EVA SAFITRI&#128525;</p>
            <p><strong>TEMPAT LAHIR :</strong>Desa Berang</p>
            <p><strong>TANGGAL LAHIR :</strong>15 JUNI 2007</p>
            <p><strong>HOBBY :</strong>Memasak ,Bermain Game</p>
            <p><strong>PASANGAN :</strong>ada&hearts;</p>
            <p><strong>PEKERJAAN :</strong>Mahasiswa</p>
            <p><strong>NAMA ORANGTUA :</strong> AYAH : Indra&hearts; dan IBU : Ratna susi&hearts;</p>
            <p><strong>NAMA ADIK :</strong>Syifa Nuraini&hearts;</p>
        </section>
        <section id="contact">
            <h2>Kontak Saya</h2>
            <form action="" method="GET">
                <label for="txtNama"><span>Nama:</span>
                <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
                </label>
                <label for="txtEmail"><span>Email:</span>
                <input type="Email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
                </label>
                <label for="txtPesan"><span>Pesan Anda:</span>
                <textarea name="txtPesan" id="txtPesan" rows="4" placeholder="Tulis pesan anda"></textarea>
                <small id="charCount">0/200 karakter</small>
                </label>
                <button type="submit">Kirim</button>
                <button type="reset">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; &#9786; 2025 IRSYA EVA SAFITRI 2511500085</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>