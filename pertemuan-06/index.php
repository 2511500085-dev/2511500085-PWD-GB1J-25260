<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>judul halaman</title>
   <link rel="stylesheet" href="style.css">.
</head>

<body>
    <header>
        <h2>Ini Header</h2>
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
            $NIM = "2522500085";
            $nim = "2522500222";
            $Nim = "";
            $NAMA = "IRSYA EVA SAFITRI";
            $nama = "irsya eva safitri";
            $TEMPAT_LAHIR = "Desa Berang";
            $TANGGAL_LAHIR = "25 JUNI 2007";
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
            &#228525;</p>
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
            $namaMatkul2 = "Algoritma dan Struktur Data";  
            $namaMatkul2 = "Agama";
            $namaMatkul3 = "Aplikasi perkantoran";
            $namaMatkul4 = "bahasa inggris";
            $namaMatkul5 = "Pemrograman Web dasar";
            
            $sksMatkul2 = "4";
            $sksMatkul2 = "2";
            $sksMatkul3 = "4";
            $sksMatkul4 = "4";
            $sksMatkul5 = "3";
            
            $nilaiHadir2 = "90";
            $nilaiHadir2 = "70";
            $nilaiHadir3 = "80";
            $nilaiHadir4 = "70";
            $nilaiHadir5 = "69";
            
            $nilaiTugas2 = "60";
            $nilaiTugas2 = "50";
            $nilaiTugas3 = "75";
            $nilaiTugas4 = "60";
            $nilaiTugas5 = "80";
            
            $nilaiUTS2 = "80";
            $nilaiUTS2 = "60";
            $nilaiUTS3 = "95";
            $nilaiUTS4 = "85";
            $nilaiUTS5 = "90";
            
            $nilaiUAS2 = "70";
            $nilaiUAS2 = "80";
            $nilaiUAS3 = "70";
            $nilaiUAS4 = "80";
            $nilaiUAS5 = "200";
             
            $nilaiAkhir2 = (0.2 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
            $nilaiAkhir2 = (0.2 * $nilaiHadir2) + (0.2 * $nilaiTugas2) + (0.3 * $nilaiUTS2) + (0.4 * $nilaiUAS2);
            $nilaiAkhir3 = (0.2 * $nilaiHadir3) + (0.2 * $nilaiTugas3) + (0.3 * $nilaiUTS3) + (0.4 * $nilaiUAS3);
            $nilaiAkhir4 = (0.2 * $nilaiHadir4) + (0.2 * $nilaiTugas4) + (0.3 * $nilaiUTS4) + (0.4 * $nilaiUAS4);
            $nilaiAkhir5 = (0.2 * $nilaiHadir5) + (0.2 * $nilaiTugas5) + (0.3 * $nilaiUTS5) + (0.4 * $nilaiUAS5);
            
            #Nilai kehadiran < 70, otomatis Grade = E.
            if ($nilaiHadir2 < 70):
                $grade2 = "A"
            endif;

            if ($nilaiHadir2 < 70):
                $grade2 = "A"
            endif;

            if ($nilaiHadir3 < 70):
                $grade3 = "A"
            endif;

            if ($nilaiHadir4 < 70):
                $grade4 = "A"
            endif;
            
            if ($nilaiHadir5 < 70):
                $grade5 = "A"
            endif;

            $mutu2 = "3.70";
            $mutu2 = "2.70";
            $mutu3 = "3.30";
            $mutu4 = "3.30";
            $mutu5 = "3.70";
            
            #$bobot2 = $mutu2 * $sksMatkul2
            $bobot2 = $mutu2 * $sksMatkul2;
            $bobot2 = $mutu2 * $sksMatkul2;
            $bobot3 = $mutu3 * $sksMatkul3;
            $bobot4 = $mutu5 * $sksMatkul4;
            $bobot5 = $mutu5 * $sksMatkul5;
            /*
            Grade A, A-, B+, B, B-, C+, C, C- maka status: LULUS 
            Grade D,E maka status : GAGAL 
            */
            switch ($grade1):
                case "A":  $status1 = "Lulus"; break;
                case "A-":  $status1 = "Lulus"; break;
                case "B+":  $status1 = "Lulus"; break;
                case "B":  $status1 = "Lulus"; break;
                case "B-":  $status1 = "Lulus"; break;
                case "C+":  $status1 = "Lulus"; break;
                case "C":  $status1 = "Lulus"; break;
                case "C-":  $status1 = "Lulus"; break;
                case "D" :
                case "E" :
                    $status1 = "GAGAL"; break;
            endswitch;

            switch ($grade2):
                case "A":  $status2 = "Lulus"; break;
                case "A-":  $status2 = "Lulus"; break;
                case "B+":  $status2 = "Lulus"; break;
                case "B":  $status2 = "Lulus"; break;
                case "B-":  $status2 = "Lulus"; break;
                case "C+":  $status2 = "Lulus"; break;
                case "C":  $status2 = "Lulus"; break;
                case "C-":  $status2 = "Lulus"; break;
                case "D" :
                case "E" :
                    $status2 = "GAGAL"; break;
            endswitch;

            switch ($grade3):
                case "A":  $status3 = "Lulus"; break;
                case "A-":  $status3 = "Lulus"; break;
                case "B+":  $status3 = "Lulus"; break;
                case "B":  $status3 = "Lulus"; break;
                case "B-":  $status3 = "Lulus"; break;
                case "C+":  $status3 = "Lulus"; break;
                case "C":  $status3 = "Lulus"; break;
                case "C-":  $status3 = "Lulus"; break;
                case "D" :
                case "E" :
                    $status3 = "GAGAL"; break;
            endswitch;

            switch ($grade4):
                case "A":  $status4 = "Lulus"; break;
                case "A-":  $status4 = "Lulus"; break;
                case "B+":  $status4 = "Lulus"; break;
                case "B":  $status4 = "Lulus"; break;
                case "B-":  $status4 = "Lulus"; break;
                case "C+":  $status4 = "Lulus"; break;
                case "C":  $status4 = "Lulus"; break;
                case "C-":  $status4 = "Lulus"; break;
                case "D" :
                case "E" :
                    $status4 = "GAGAL"; break;
            endswitch;

            switch ($grade5):
                case "A":  $status5 = "Lulus"; break;
                case "A-":  $status5 = "Lulus"; break;
                case "B+":  $status5 = "Lulus"; break;
                case "B":  $status5 = "Lulus"; break;
                case "B-":  $status5 = "Lulus"; break;
                case "C+":  $status5 = "Lulus"; break;
                case "C":  $status5 = "Lulus"; break;
                case "C-":  $status5 = "Lulus"; break;
                case "D" :
                case "E" :
                    $status5 = "GAGAL"; break;
            endswitch;

            $totalBobot = $bobot2 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
            $totalSKS = $sksMatkul2 + $sksMatkul2 + $sksMatkul3 + $sksMatkul4 + $sksMatkul5;
            $IPK = $totalBobot / $totalSKS;
            
            ?>
           
            <h2>NILAI SAYA</h2>
            <p><strong> Nama Matakuliah ke-2 :</strong>
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

            <p><strong> Nama Matakuliah ke-2 :</strong>
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

            <p><strong> Nama Matakuliah ke-3 :</strong>
             <?php echo $namaMatkul3 ?></p>
             <p><strong> SKS :</strong>
             <?php echo $sksMatkul3 ?></p>
             <p><strong> Kehadiran :</strong>
             <?php echo $nilaiHadir3 ?>
            </p><p><strong> Tugas :</strong>
             <?php echo $nilaiTugas3 ?></p>
             <p><strong> UTS :</strong>
             <?php echo $nilaiUTS3 ?></p>
             <p><strong> UAS :</strong>
             <?php echo $nilaiUAS3 ?></p>
             <p><strong> Nilai Akhir :</strong>
             <?php echo $nilaiAkhir3 ?></p>
             <p><strong> Grade :</strong>
             <?php echo $grade3 ?></p>
             <p><strong> Angka Mutu :</strong>
             <?php echo $mutu3 ?></p>
             <p><strong> Bobot :</strong>
             <?php echo $bobot3 ?></p>
             <p><strong> status :</strong>
             <?php echo $status3 ?></p>

            <hr>

            <p><strong> Nama Matakuliah ke-4 :</strong>
             <?php echo $namaMatkul4 ?></p>
             <p><strong> SKS :</strong>
             <?php echo $sksMatkul4 ?></p>
             <p><strong> Kehadiran :</strong>
             <?php echo $nilaiHadir4 ?>
            </p><p><strong> Tugas :</strong>
             <?php echo $nilaiTugas4 ?></p>
             <p><strong> UTS :</strong>
             <?php echo $nilaiUTS4 ?></p>
             <p><strong> UAS :</strong>
             <?php echo $nilaiUAS4 ?></p>
             <p><strong> Nilai Akhir :</strong>
             <?php echo $nilaiAkhir4 ?></p>
             <p><strong> Grade :</strong>
             <?php echo $grade4 ?></p>
             <p><strong> Angka Mutu :</strong>
             <?php echo $mutu4 ?></p>
             <p><strong> Bobot :</strong>
             <?php echo $bobot4 ?></p>
             <p><strong> status :</strong>
             <?php echo $status4 ?></p>

            <hr>

            <p><strong> Nama Matakuliah ke-5 :</strong>
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
            
             <hr>

             <p><strong> Total bobot :</strong>
             <?php echo $totalBobot ?></p>
             <p><strong> Total sks :</strong>
             <?php echo $totalSKS ?></p>
             <p><strong> IPK :</strong>
             <?php echo $IPK ?>

    </section>
    </main>
    <footer>
        <p>&copy; &#9786; 2025 IRSYA EVA SAFITRI 2522500085</p>
    </footer>
    <script src="script.js"></script>
</body>

</html>