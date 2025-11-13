<?php
session_start();

$sesNIM = "";
if (isset($_SESSION["sesNIM"])):
  $sesNIM = $_SESSION["sesNIM"];
endif;


$sesNama = "";
if (isset($_SESSION["sesNama"])):
  $sesNama = $_SESSION["sesNama"];
endif;

$sesemail = "";
if (isset($_SESSION["sesemail"])):
  $sesemail = $_SESSION["sesemail"];
endif;

$sesTempatlahir = "";
if (isset($_SESSION["sesTempatlahir"])):
  $Tempatlahir = $_SESSION["sesTempatlahir"];
endif;

$sesTanggallahir = "";
if (isset($_SESSION["sesTanggalahir"])):
  $sesTanggallahir = $_SESSION["sesTanggallahir"];
endif;

$sesHobi = "";
if (isset($_SESSION["sesHobi"])):
  $sesHobi = $_SESSION["sesHobi"];
endif;

$sesPasangan = "";
if (isset($_SESSION["sesPasangan"])):
  $sesPasangan = $_SESSION["sesPasangan"];
endif;

$sesPekerjaan = "";
if (isset($_SESSION["sePekerjaan"])):
  $sesPekerjaan = $_SESSION["sesPekerjaan"];
endif;

$sesNamaorangtua = "";
if (isset($_SESSION["sesNamaorangtua"])):
  $sesNamaorangtua = $_SESSION["sesNamaorangtua"];
endif;

$sesNamakakak = "";
if (isset($_SESSION["sesNamakakak"])):
  $sesNamakakak = $_SESSION["sesNamakakak"];
endif;

$sesNamaadik = "";
if (isset($_SESSION["sesNamaadik"])):
  $sesNamaadik = $_SESSION["sesNamaadik"];
endif;


$sespesan = "";
if (isset($_SESSION["sespesan"])):
  $sespesan = $_SESSION["sespesan"];
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <link rel="stylesheet" href="style.css">
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
      <?php
      echo "halo dunia!<br>";
      echo "nama saya irsya";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>
    <from>
          <section id="Biodata">
      <h2>Biodata Sederhana Mahasiwa</h2>
      <form action="proses.php" method="POST">

        <label for="txtNim"><span>NIM:</span>
          <input type="text" id="txtNim" name="txtNim" placeholder="Masukkan nim" required autocomplete="nim">
        </label>

        <label for="txtNama"><span>NAMA LENGKAP:</span>
          <input type="nama" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>EMAIL:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtTempatlahir"><span>TEMPAT LAHIR:</span>
          <input type="tempatlahir" id="txtTempatlahir" name="txtTempatlahir" placeholder="Masukkan tempat lahir" required autocomplete="tempatlahir">
        </label>

        <label for="txtTanggallahir"><span>TANGGAL LAHIR:</span>
          <input type="tanggallahir" id="txtTanggallahir" name="txtTanggallahir" placeholder="Masukkan tanggal lahir" required autocomplete="tanggallahir">
        </label>

        <label for="txtHobi"><span>HOBI:</span>
          <input type="hobi" id="txtHobi" name="txtHobi" placeholder="Masukkan Hobi" required autocomplete="Hobi">
        </label>

        <label for="txtPasangan"><span>PASANGAN:</span>
          <input type="pasangan" id="txtPasangan" name="txtPasangan" placeholder="Masukkan pasangan" required autocomplete="Pasangan">
        </label>

        <label for="txtPekerjaan"><span>PEKERJAAN:</span>
          <input type="pekerjaan" id="txtPekerjaan" name="txtPekerjaan" placeholder="Masukkan pekerjaan" required autocomplete="Pekerjaan">
        </label>

        <label for="txtNamaorangtua"><span>NAMA ORANG TUA:</span>
          <input type="namaorangtua" id="txtNamaorangtua" name="txtNamaorangtua" placeholder="Masukkan nama orang tua" required autocomplete="Namaorangtua">
        </label>

        <label for="txtNamakakak"><span>NAMA KAKAK:</span>
          <input type="namakakak" id="txtNamakakak" name="txtNamakakak" placeholder="Masukkan nama kakak" required autocomplete="Namakakak">
        </label>

        <label for="txtNamaadik"><span>NAMA ADIK:</span>
          <input type="namaadik" id="txtNamaadik" name="txtNamaadik" placeholder="Masukkan nama adik" required autocomplete="Namaadik">
        </label>
</from>

<from>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>

        </from>

    <section id="about">
      <?php
      $nim = "25115000012";
      $NIM = "2511500085";
      $email = "irsya@gmail.com"
      $Email = "wilian@gmail.com"
      $nama = "eva";
      $Nama = "irsya eva safitri";
      $Tempatlahir = "BERANG";
      $tempatlahir = "KUNDI";
      $Tanggallahir = "15 juni 2007";
      $tgllahir = "13 agustus 2007";
      $hobi = "masak,game";
      $Hobi = "memasak,bermain game";
      $Pasangan = "ada";
      $psngan = "tidak ada";
      $Pekerjaan = "mahasiswa";
      $pkerjaan = "petani";
      $namaorngtua = "papa : indra, mama : ratna susi";
      $Namaorangtua = "ayah : indra dan ibu : ratna susi";
      $namakakak = "felisha";
      $Namakakak = "-";
      $Namaadik = "syifanuraini";
      $namaadik = "nuraini";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $sesNIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $sesNama;
        ?> &#128526;
      </p>
      <p><strong>EMAIL:</strong>
        <?php
        echo $sesEmail;
        ?>
      </p>
      <p><strong>Tempat Lahir:</strong>
        <?php 
        echo $sesTempatlahir;
        ?>
      </p>
      <p><strong>Tanggal Lahir:</strong>
        <?php 
        echo $sesTanggallahir; 
        ?>
      </p>
      <p><strong>Hobi:</strong> 
        <?php
        echo $sesHobi;
        ?>
      &#127926;</p>
      <p><strong>Pasangan:</strong>
        <?php
        echo $sesPasangan;
        ?>
      &hearts;</p>
      <p><strong>Pekerjaan:</strong> 
        <?php
        echo $sesPekerjaan;
        ?>
       &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong>
        <?php 
        echo $sesNamaorangtua; 
        ?> </p>
      <p><strong>Nama Kakak:</strong> 
        <?php 
        echo $sesNamakakak;
        ?> </p>
      <p><strong>Nama Adik:</strong>
        <?php
        echo $sesNamaadik;
        ?> </p>
    </section>

    <section id="contact">
      <h2>Kontak Kami</h2>
      <form action="proses.php" method="POST">

        <label for="txtNama"><span>Nama:</span>
          <input type="text" id="txtNama" name="txtNama" placeholder="Masukkan nama" required autocomplete="name">
        </label>

        <label for="txtEmail"><span>Email:</span>
          <input type="email" id="txtEmail" name="txtEmail" placeholder="Masukkan email" required autocomplete="email">
        </label>

        <label for="txtPesan"><span>Pesan Anda:</span>
          <textarea id="txtPesan" name="txtPesan" rows="4" placeholder="Tulis pesan anda..." required></textarea>
          <small id="charCount">0/200 karakter</small>
        </label>


        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
      </form>
        
      <?php if (!empty($sesnama)): ?>
        <br><hr>
        <h2>Yang menghubungi kami</h2>
        <p><strong>Nama :</strong> <?php echo $sesnama ?></p>
        <p><strong>Email :</strong> <?php echo $sesemail ?></p>
        <p><strong>Pesan :</strong> <?php echo $sespesan ?></p>
      <?php endif; ?>



    </section>
  </main>

  <footer>
    <p>&copy; 2025 irsya eva safitri [2511500085]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>