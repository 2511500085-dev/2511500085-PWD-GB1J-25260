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
            $nilaiAkhir1 = "";
            $nilaiAkhir2 = "";
            $nilaiAkhir3 = "-";
            $nilaiAkhir4 = "-";
            $nilaiAkhir5 = "";
            $grade1 = "";
            $grade2 = "";
            $grade3 = "-";
            $grade4 = "-";
            $grade5 = "";
            $mutu1 = "";
            $mutu2 = "";
            $mutu3 = "-";
            $mutu4 = "-";
            $mutu5 = "";
            $bobot1 = "";
            $bobot2 = "";
            $bobot3 = "-";
            $bobot4 = "-";
            $bobot5 = "";
            $status1 = "";
            $status2 = "";
            $status3 = "-";
            $status4 = "-";
            $status5 = "";
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
                 if (isset($_POST['submit'])) {

             <?php
            // Data input
            $namaMatkul1 = $_POST "Algoritma dan Struktur Data";
            $sksMatkul1 = $_POST 4;
            $nilaiHadir1 = $_POST 90;
            $nilaiTugas1 = $_POST 60;
            $nilaiUTS1= $_POST 80;
            $nilaiUAS1 = $_POST 70;

            // Hitung Nilai Akhir
            $nilaiAkhir = (0.1 * $nilaiHadir1) + (0.2 * $nilaiTugas1) + (0.3 * $nilaiUTS1) + (0.4 * $nilaiUAS1);

            //Tentukan Grade
            if ($nilaiHadir1 > 70) {
                 $grade1 = "A+";
            } elseif ($nilaiAkhir1 >= 90) {
                $grade1 = "A+";
            } else {
                $grade1 = "B";
            }

            // Tentukan Status
            if (in_array($grade1, ["A", "A-", "B+", "B", "B-", "C+", "C", "C-"])) {
            $status1 = "Lulus";  
            } else {    
            $status1 = "Tidak Lulus";
            }

            // Tentukan Angka Mutu dan Bobot
            switch ($grade1) {
                case "A+" : $mutu1 * $sksMatkul1; break;
            }
            
            $bobot1 = $mutu1 * $sksMatkul1;
            

             // Tampilkan hasil

            echo "<h2>Hasil Perhitungan nilai</h2>";
            echo "Mata Kuliah: $namaMatkul1 <br>";
            echo "SKS: $sksMatkul1 <br>";
            echo "Nilai Akhir: $nilaiAkhir1 <br>";
            echo "Grade: $grade1 <br>";
            echo "Mutu (Angka Mutu): $mutu1 <br>";
            echo "Bobot: $bobot1 <br>";
            echo "Status: <b style='color:" . ($status == 'LULUS' ? 'green' : 'red') . "'>$status</b><br>";

            ?> }
             </hr>
    </section>
    </main>
    <footer>
        <p>&copy; &#9786; 2025 IRSYA EVA SAFITRI 2511500085</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>