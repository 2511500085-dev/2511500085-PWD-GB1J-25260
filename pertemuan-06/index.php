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
            $nim = "2511500222";
            $Nim = "";
            $NAMA = "IRSYA EVA SAFITRI";
            $nama = "irsya eva safitri";
            $TEMPAT_LAHIR = "Desa Berang";
            $TANGGAL_LAHIR = "15 JUNI 2007";
            $HOBBY = "Memasak, Bermain Game";
            $PASANGAN = "ada";
            $PEKERJAAN = "Mahasiswa";
            $NAMA_ORANGTUA = " AYAH : Indra &hearts; dan IBU : Ratna susi &hearts;";
            $NAMA_ADIK = "Syifa Nuraini";
            $NAMA_KAKAK = "-";
            ?>
            <h2>Tentang Saya</h2>
            <p><strong>NIM :</strong>
             <?php echo $NIM
              ?></p>
            <p><strong>NAMA :</strong> 
            <?php echo $NAMA ?>
            &#128525;</p>
            <p><strong>TEMPAT LAHIR :</strong>
             <?php echo $TEMPAT_LAHIR ?></p>
            <p><strong>TANGGAL LAHIR :</strong>
             <?php echo $TANGGAL_LAHIR ?></p>
            <p><strong>HOBBY :</strong> 
            <?php echo $HOBBY ?></p>
            <p><strong>PASANGAN :</strong>
             <?php echo $PASANGAN ?>
             &hearts;</p>
            <p><strong>PEKERJAAN :</strong> 
            <?php echo $PEKERJAAN ?></p>
            <p><strong>NAMA ORANGTUA :</strong>
             <?php echo $NAMA_ORANGTUA ?></p>
            <p><strong>NAMA ADIK :</strong>
            <?php echo $NAMA_ADIK ?> 
            &hearts;</p>
            <p><strong>NAMA KAKAK :</strong>
            <?php echo $NAMA_KAKAK ?></p>
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

        <section id="ipk"> 
            <?php
            $namaMatkul1 = "Algoritma dan Struktur Data";  
            $namaMatkul2 = "Agama";
            $namaMatkul3 = "-";
            $namaMatkul4 = "-";
            $namaMatkul5 = "Pemrograman Web dasar";
            
            $sksMatkul1 = "4";
            $sksMatkul2 = "2";
            $sksMatkul3 = "-";
            $sksMatkul4 = "-";
            $sksMatkul5 = "3";
            
            $nilaiHadir1 = "90";
            $nilaiHadir2 = "70";
            $nilaiHadir3 = "-";
            $nilaiHadir4 = "-";
            $nilaiHadir5 = "69";
            
            $nilaiTugas1 = "60";
            $nilaiTugas2 = "50";
            $nilaiTugas3 = "-";
            $nilaiTugas4 = "'-";
            $nilaiTugas5 = "80";
            
            $nilaiUTS1 = "80";
            $nilaiUTS2 = "60";
            $nilaiUTS3 = "-";
            $nilaiUTS4 = "-";
            $nilaiUTS5 = "90";
            
            $nilaiUAS1 = "70";
            $nilaiUAS2 = "80";
            $nilaiUAS3 = "-";
            $nilaiUAS4 = "-";
            $nilaiUAS5 = "100";
            
            $nilaiAkhir1 = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);
            $nilaiAkhir2 = (0.1 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
            $nilaiAkhir3 = "-";
            $nilaiAkhir4 = "-";
            $nilaiAkhir5 = (0.1 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
            
            $grade1 = "A-";
            $grade2 = "B-";
            $grade3 = "-";
            $grade4 = "-";
            $grade5 = "A-";
            
            $mutu1 = "3,70";
            $mutu2 = "2,70";
            $mutu3 = "-";
            $mutu4 = "-";
            $mutu5 = "3,70";

            $bobot1 = 3,70 * 4;
            $bobot2 = 2,70 * 2;
            $bobot3 = "-";
            $bobot4 = "-";
            $bobot5 =  3,70 * 3;

            $status1 = "Lulus";
            $status2 = "Lulus";
            $status3 = "-";
            $status4 = "-";
            $status5 = "Lulus";

            $totalBobot = "";
            $totalSKS = "";
            $IPK = "";
            
            ?>
           
            <h2>NILAI SAYA</h2>
            <p><strong> Nama Matakuliah ke-1:</strong>
             <?php echo $namaMatkul1 ?></p>
             <p><strong> SKS :</strong>
             <?php echo $sksMatkul1 ?></p>
             <p><strong> Kehadiran :</strong>
             <?php echo $nilaiHadir1 ?>
            </p><p><strong> Tugas :</strong>
             <?php echo $nilaiTugas1 ?></p>
             <p><strong> UTS :</strong>
             <?php echo $nilaiUTS1 ?></p>
             <p><strong> UAS :</strong>
             <?php echo $nilaiUAS1 ?></p>
             <p><strong> Nilai Akhir :</strong>
             <?php echo $nilaiAkhir1 ?></p>
             <p><strong> Grade :</strong>
             <?php echo $grade1 ?></p>
             <p><strong> Angka Mutu :</strong>
             <?php echo $mutu1 ?></p>
             <p><strong> Bobot :</strong>
             <?php echo $bobot1 ?></p>
             <p><strong> status :</strong>
             <?php echo $status1 ?></p>

            <hr>

            <p><strong> Nama Matakuliah ke-2:</strong>
             <?php echo $namaMatkul2 ?></p>
             <p><strong> SKS :</strong>
             <?php echo $sksMatkul2 ?></p>
             <p><strong> Kehadiran :</strong>
             <?php echo $nilaiHadir2 ?>
            </p><p><strong> Tugas :</strong>
             <?php echo $nilaiTugas2 ?></p>
             <p><strong> UTS :</strong>
             <?php echo $nilaiUTS2 ?></p>
             <p><strong> UAS :</strong>
             <?php echo $nilaiUAS2 ?></p>
             <p><strong> Nilai Akhir :</strong>
             <?php echo $nilaiAkhir2 ?></p>
             <p><strong> Grade :</strong>
             <?php echo $grade2 ?></p>
             <p><strong> Angka Mutu :</strong>
             <?php echo $mutu2 ?></p>
             <p><strong> Bobot :</strong>
             <?php echo $bobot2 ?></p>
             <p><strong> status :</strong>
             <?php echo $status2 ?></p>

            <hr>

            <p><strong> Nama Matakuliah ke-5:</strong>
             <?php echo $namaMatkul5 ?></p>
             <p><strong> SKS :</strong>
             <?php echo $sksMatkul5 ?></p>
             <p><strong> Kehadiran :</strong>
             <?php echo $nilaiHadir5 ?>
            </p><p><strong> Tugas :</strong>
             <?php echo $nilaiTugas5 ?></p>
             <p><strong> UTS :</strong>
             <?php echo $nilaiUTS5 ?></p>
             <p><strong> UAS :</strong>
             <?php echo $nilaiUAS5 ?></p>
             <p><strong> Nilai Akhir :</strong>
             <?php echo $nilaiAkhir5 ?></p>
             <p><strong> Grade :</strong>
             <?php echo $grade5 ?></p>
             <p><strong> Angka Mutu :</strong>
             <?php echo $mutu5 ?></p>
             <p><strong> Bobot :</strong>
             <?php echo $bobot5 ?></p>
             <p><strong> status :</strong>
             <?php echo $status5 ?></p>


    </section>
    </main>
    <footer>
        <p>&copy; &#9786; 2025 IRSYA EVA SAFITRI 2511500085</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>