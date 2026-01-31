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
  $cid = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT, [
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
    redirect_ke('readanggota.php');
  }

  /*
    Ambil data lama dari DB menggunakan prepared statement, 
    jika ada kesalahan, tampilkan penanda error.
  */
  $stmt = mysqli_prepare($conn, "SELECT Nomor, Nama, Jabatan, tanggaljadi, Kemampuan, Gaji, NomorWA, Batalion, BeratBadan, Tinggibadan 
                                    FROM anggota WHERE id = ? LIMIT 1");
  if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('readanggota.php');
  }

  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($res);
  mysqli_stmt_close($stmt);

  if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('readanggota.php');
  }

  #Nilai awal (prefill form)
  $Nomor  = $row['Nomor'] ?? '';
  $Nama = $row['Nama'] ?? '';
  $Tanggaljadi = $row['Tanggaljadi'] ?? '';
  $Jabatan = $row['Jabatan'] ?? '';
  $Kemampuan = $row['Kemampuan'] ?? '';
  $Gaji = $row['Gaji'] ?? '';
  $NomorWA = $row['NomorWA'] ?? '';
  $Batalion = $row['Batalion'] ?? '';
  $Beratbadan = $row['Beratbadan'] ?? '';
  $Tinggibadan = $row['Tinggibadan'] ?? '';

  #Ambil error dan nilai old input kalau ada
  $flash_error = $_SESSION['flash_error'] ?? '';
  $old = $_SESSION['old'] ?? [];
  unset($_SESSION['flash_error'], $_SESSION['old']);
  if (!empty($old)) {
    $Nomor  = $old['Nomor'] ?? $Nomor;
    $Nama = $old['Nama'] ?? $Nama;
    $Tanggaljadi = $old['Tanggaljadi'] ?? $Tanggaljadi;
    $Jabatan  = $old['Jabatan'] ?? $Jabatan;
    $Kemampuan  = $old['kemampuan'] ?? $Kemampuan;
    $Gaji = $old['Gaji'] ?? $Gaji;
    $NomorWA = $old['NomorWA'] ?? $NomorWA;
    $Batalion  = $old['Batalion'] ?? $Batalion;
    $Beratbadan  = $old['Beratbadan'] ?? $Beratbadan;
    $Tinggibadan  = $old['Tinggibadan'] ?? $Tinggibadan;
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

    <section id="anggota">
      <h2>Data Anggota</h2>
      <form action="proses_anggota.php" method="POST">

        <label for="txtNoAng"><span>Nomor Anggota:</span>
          <input type="text" id="txtNoAng" name="txtNoAng"
           placeholder="Masukkan Nomor Anggota" required autocomplete="Nomor anggota"
              value="<?= !empty($Nomor) ? $Nomor : '' ?>">
        </label>

        <label for="txtNmAng"><span>Nama Anggota:</span>
          <input type="text" id="txtNmAng" name="txtNmAng"
           placeholder="Masukkan Nama Anggota" required autocomplete="Nama anggota"
              value="<?= !empty($Nama) ? $Nama : '' ?>">
        </label>

        <label for="txtJabAng"><span>Jabatan Anggota:</span>
          <input type="text" id="txtJabAng" name="txtJabAng" 
          placeholder="Masukkan Jabatan Anggota" required autocomplete="Jabatan"
              value="<?= !empty($Jabatan) ? $Jabatan : '' ?>">
        </label>

        <label for="txtTglJadi"><span>Tanggal Jadi Anggota:</span>
          <input type="text" id="txtTglJadi" name="txtTglJadi"
           placeholder="Masukkan Tanggal Jadi Anggota" required autocomplete="tanggaljadi"
              value="<?= !empty($Tanggaljadi) ? $Tanggaljadi : '' ?>">
        </label>

        <label for="txtSkill"><span>Kemampuan Anggota:</span>
          <input type="text" id="txtSkill" name="txtSkill" 
          placeholder="Masukkan Kemampuan Anggota" required autocomplete="Kemampuan"
              value="<?= !empty($Kemampuan) ? $Kemampuan : '' ?>">
        </label>

        <label for="txtGaji"><span>Gaji Anggota:</span>
          <input type="text" id="txtGaji" name="txtGaji" 
          placeholder="Masukkan Gaji Anggota" required autocomplete="Gaji"
              value="<?= !empty($Gaji) ? $Gaji : '' ?>">
        </label>

        <label for="txtNoWA"><span>Nomor WA:</span>
          <input type="text" id="txtNoWA" name="txtNoWA" 
          placeholder="Masukkan Nomor WA" required autocomplete="NomorWA"
              value="<?= !empty($NomorWA) ? $NomorWA : '' ?>">
        </label>

        <label for="txBatalion"><span>Batalion Anggota:</span>
          <input type="text" id="txBatalion" name="txBatalion" 
          placeholder="Masukkan Batalion Anggota" required autocomplete="Batalion"
              value="<?= !empty($Batalion) ? $Batalion : '' ?>">
        </label>

        <label for="txtBB"><span>Berat Badan:</span>
          <input type="text" id="txtBB" name="txtBB" 
          ="Masukkan Berat Badan" required autocomplete="Beratbadan"
              value="<?= !empty($Beratbadan) ? $Beratbadan : '' ?>">
        </label>

        <label for="txtTB"><span>Tinggi Badan:</span>
          <input type="text" id="txtTB" name="txtTB"
          placeholder="Masukkan Tinggi Badan" required autocomplete="Tinggibadan"
              value="<?= !empty($Tinggibadan) ? $Tinggibadan : '' ?>">
        </label>

        <button type="submit">Kirim</button>
        <button type="reset">Batal</button>
        <a href="readmahasiswa.php" class="reset">Kembali</a>
      </form>
    </section>
    </main>

    <script src="script.js"></script>
  </body>
</html>