<?php
  session_start();
    $sesnama = $_SESSION["sesnama"];
    $sesemail = $_SESSION["sesemail"];
    $sespesan = $_SESSION["sespesan"];

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

    <section id="about">
      <?php
      $nim = 25115000012;
      $NIM = "2511500085";
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
      $pekerjaan = "mahasiswa";
      $pkerjaan = "petani";
      $namaorngtua = "papa : indra, mama : ratna susi";
      $Namaorangtua = "ayah : indra dan ibu : rtana susi";
      $namakakak = "felisha";
      $Namakakak = "-";
      $Namaadik = "syifanuraini";
      $namaadik = "nuraini";
      ?>
      <h2>Tentang Saya</h2>
      <p><strong>NIM:</strong>
        <?php
        echo $NIM;
        ?>
      </p>
      <p><strong>Nama Lengkap:</strong>
        <?php
        echo $Nama;
        ?> &#128526;
      </p>
      <p><strong>Tempat Lahir:</strong>
        <?php 
        echo $Tempatlahir;
        ?>
      </p>
      <p><strong>Tanggal Lahir:</strong>
        <?php 
        echo $Tanggallahir; 
        ?>
      </p>
      <p><strong>Hobi:</strong> 
        <?php
        echo $Hobi;
        ?>
      &#127926;</p>
      <p><strong>Pasangan:</strong>
        <?php
        echo $Pasangan;
        ?>
      &hearts;</p>
      <p><strong>Pekerjaan:</strong> 
        <?php
        echo $pekerjaan;
        ?>
       &copy; 2025</p>
      <p><strong>Nama Orang Tua:</strong>
        <?php 
        echo $Namaorangtua; 
        ?> </p>
      <p><strong>Nama Kakak:</strong> 
        <?php 
        echo $Namakakak;
        ?> </p>
      <p><strong>Nama Adik:</strong>
        <?php
        echo $Namaadik;
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
      
        <h2>yang menghubungi kami</h2>
      <p>
        NAMA : <strong><?php echo $sesnama ?></strong>.
      </p> 
      <p>
        EMAIL : <strong><?php echo $sesemail ?></strong>.
      </p>
      <p>
        PESAN : <strong><?php echo $sespesan ?></strong>.
      </p>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 IRSYA EVA SAFITRI [2511500085]</p>
  </footer>

  <script src="script.js"></script>
</body>

</html>