<?php
  session_start();
  require 'koneksi.php';
  require 'fungsi.php';

  /*
    Ambil nilai cid dari GET dan lakukan validasi untuk 
    mengecek cid harus angka dan lebih besar dari 0 (> 0).
    'options' => ['min_range' => 1] artinya cid harus ≥ 1 
    (bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
  */
  $cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);
  /*
    Skrip di atas cara penulisan lamanya adalah:
    $cid = $_GET['cid'] ?? '';
    $cid = (int)$cid;

    Cara lama seperti di atas akan mengambil data mentah 
    kemudian validasi dilakukan secara terpisah, sehingga 
    rawan lupa validasi. Untuk input dari GET atau POST, 
    filter_input() lebih disarankan daripada $_GET atau $_POST.
  */

  /*
    Cek apakah $cid bernilai valid:
    Kalau $cid tidak valid, maka jangan lanjutkan proses, 
    kembalikan pengguna ke halaman awal (read.php) sembari 
    mengirim penanda error.
  */
  if (!$cid) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
  }

  /*
    Ambil data lama dari DB menggunakan prepared statement, 
    jika ada kesalahan, tampilkan penanda error.
  */
  $stmt = mysqli_prepare($conn, "SELECT kodepengunjung, namapengunjung, alamatrumah, tanggalkunjungan, hobi, asalSLTA, pekerjaan, namaorangtua, namapacar, namamantan,
                                    FROM tbl_pengunjung WHERE cid = ? LIMIT 1");
  if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('read.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $cid);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('read.php');
  }

  #Nilai awal (prefill form)
  $kodepengunjung  = $row['kodepengunjung'] ?? '';
  $namapengunjung = $row['namapengunjung'] ?? '';
  $alamatrumah = $row['alamatrumah'] ?? '';
  $tanggalkunjungan = $row['tanggalkunjungan'] ?? '';
  $hobi = $row['hobi'] ?? '';
  $asalSLTA = $row['asalSLTA'] ?? '';
  $pekerjaan = $row['pekerjaan'] ?? '';
  $namaorangtua = $row['namaorangtua'] ?? '';
  $namapacar = $row['namapacar'] ?? '';
  $namamantan = $row['namamantan'] ?? '';

  #Ambil error dan nilai old input kalau ada
  $flash_error = $_SESSION['flash_error'] ?? '';
  $old = $_SESSION['old'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old']);
  if (!empty($old)) {
  $kodepengunjung  = $row['kodepengunjung'] ?? '';
  $namapengunjung = $row['namapengunjung'] ?? '';
  $alamatrumah = $row['alamatrumah'] ?? '';
  $tanggalkunjungan = $row['tanggalkunjungan'] ?? '';
  $hobi = $row['hobi'] ?? '';
  $asalSLTA = $row['asalSLTA'] ?? '';
  $pekerjaan = $row['pekerjaan'] ?? '';
  $namaorangtua = $row['namaorangtua'] ?? '';
  $namapacar = $row['namapacar'] ?? '';
  $namamantan = $row['namamantan'] ?? '';

  }
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
      echo "nama saya hadi";
      ?>
      <p>Ini contoh paragraf HTML.</p>
    </section>

    <section id="biodata">
      <h2>Biodata Pengunjung</h2>
      <form action="proses.php" method="POST">

        <label for="txtKodePen"><span>Kode Pengunjung:</span>
          <input type="text" id="txtKodePen" name="txtKodePen" 
          placeholder="Masukkan Kode Pengunjung" required autocomplete="txtKodePen"
           value="<?= !empty($kodepengunjung) ? $kodepengunjung : '' ?>">
        </label>

        <label for="txtNmPengunjung"><span>Nama Pengunjung:</span>
          <input type="text" id="txtNmPengunjung" name="txtNmPengunjung"
           placeholder="Masukkan Nama Pengunjung" required autocomplete="name"
           value="<?= !empty($namapengunjung) ? $namapengunjung : '' ?>">
        </label>

        <label for="txtAlRmh"><span>Alamat Rumah:</span>
          <input type="text" id="txtAlRmh" name="txtAlRmh"
           placeholder="Masukkan Alamat Rumah" required autocomplete="txtAlrmh"
           value="<?= !empty($alamatrumah) ? $alamatrumah : '' ?>">
        </label>

        <label for="txtTglKunjungan"><span>Tanggal Kunjungan:</span>
          <input type="text" id="txtTglKunjungan" name="txtTglKunjungan"
           placeholder="Masukkan Tanggal Kunjungan" required autocomplete="txtKunjungan"
           value="<?= !empty($tanggalkunjungan) ? $tanggalkunjungan : '' ?>">
        </label>

        <label for="txtHobi"><span>Hobi:</span>
          <input type="text" id="txtHobi" name="txtHobi" 
          placeholder="Masukkan Hobi" required autocomplete="txtHobi"
           value="<?= !empty($hobi) ? $hobi : '' ?>">
        </label>

        <label for="txtAsalSMA"><span>Asal SLTA:</span>
          <input type="text" id="txtAsalSMA" name="txtAsalSMA" 
          placeholder="Masukkan Asal SLTA" required autocomplete="txtAsalSMA"
           value="<?= !empty($asalSLTA) ? $asalSLTA : '' ?>">
        </label>

        <label for="txtKerja"><span>Pekerjaan:</span>
          <input type="text" id="txtKerja" name="txtKerja" 
          placeholder="Masukkan Pekerjaan" required autocomplete="txtKerja"
           value="<?= !empty($pekerjaan) ? $pekerjaan : '' ?>">
        </label>

        <label for="txtNmOrtu"><span>Nama Orang Tua:</span>
          <input type="text" id="txtNmOrtu" name="txtNmOrtu" 
          placeholder="Masukkan Nama Orang Tua" required autocomplete="txtNmOrtu"
           value="<?= !empty($namaorangtua) ? $namaorangtua : '' ?>">

        </label>

        <label for="txtNmPacar"><span>Nama Pacar:</span>
          <input type="text" id="txtNmPacar" name="txtNmPacar" 
          placeholder="Masukkan Nama Pacar" required autocomplete="txtNmPacar"
           value="<?= !empty($namapacar) ? $namapacar : '' ?>">
        </label>

        <label for="txtNmMantan"><span>Nama Mantan:</span>
          <input type="text" id="txtNmMantan" name="txtNmMantan" 
          placeholder="Masukkan Nama Mantan" required autocomplete="txtNmMantan"
           value="<?= !empty($namamantan) ? $namamantan : '' ?>">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
        <a href="read.php" class="reset">Kembali</a>
        </form>
      </section>
    </main>

    <script src="script.js"></script>
  </body>
</html>