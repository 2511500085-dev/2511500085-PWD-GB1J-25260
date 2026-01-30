<?php
  session_start();
  require __DIR__ . '/koneksi.php';
  require_once __DIR__ . '/fungsi.php';

  #cek method form, hanya izinkan POST
  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
  }

  #validasi cid wajib angka dan > 0
  $cid = filter_input(INPUT_POST, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
  ]);

  if (!$cid) {
    $_SESSION['flash_error'] = 'CID Tidak Valid.';
    redirect_ke('edit.php?cid='. (int)$cid);
  }

  #ambil dan bersihkan (sanitasi) nilai dari form
  $kodepengunjung = bersihkan ($_POST['txtKodePen'] ?? '' );
  $namapengunjung = bersihkan ($_POST['txtNmPengunjung'] ?? '');
  $alamatrumah = bersihkan ($_POST['txtAlRmh'] ?? '');
  $tanggalkunjungan = bersihkan ($_POST['txtTglKunjungan'] ?? '');
  $hobi = bersihkan ($_POST['txtHobi'] ?? '');
  $asalSLTA = bersihkan ($_POST['txtAsalSMA'] ?? '');
  $pekerjaan = bersihkan ($_POST['txtKerja'] ?? '');
  $namaorangtua =  bersihkan ($_POST['txtNmOrtu'] ?? '');
  $namapacar = berrsihkan ($_POST['txtNmPacar'] ?? '');
  $namamantan = bersihkan ($_POST['txtNmMantan'] ?? '');

  #Validasi sederhana
  $errors = []; #ini array untuk menampung semua error yang ada

  if ($nama === '') {
    $errors[] = 'Nama wajib diisi.';
  }

  if ($email === '') {
    $errors[] = 'Email wajib diisi.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format e-mail tidak valid.';
  }

  if ($pesan === '') {
    $errors[] = 'Pesan wajib diisi.';
  }

  if ($captcha === '') {
    $errors[] = 'Pertanyaan wajib diisi.';
  }

  if (mb_strlen($nama) < 3) {
    $errors[] = 'Nama minimal 3 karakter.';
  }

  if (mb_strlen($pesan) < 10) {
    $errors[] = 'Pesan minimal 10 karakter.';
  }

  if ($captcha!=="6") {
    $errors[] = 'Jawaban '. $captcha.' captcha salah.';
  }

  /*
  kondisi di bawah ini hanya dikerjakan jika ada error, 
  simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
  */
  if (!empty($errors)) {
    $_SESSION['old'] = [
    'kodepengunjung'  => $kodepengunjung,
    'namapengunjung' => $namapengunjung,
    'alamatrumah' => $alamatrumah,
    'tanggalkunjungan' => $tanggalkunjungan,
    'hobi' => $hobi,
    'asalSLTA' => $asalSLTA,
    'pekerjaan' => $pekerjaan,
    'namaorangtua' => $namaorangtua,
    'namapacar' => $namapacar,
    'namamantan' => $namamantan,
    ];

    $_SESSION['flash_error'] = implode('<br>', $errors);
    redirect_ke('edit.php?cid='. (int)$cid);
  }

  /*
    Prepared statement untuk anti SQL injection.
    menyiapkan query UPDATE dengan prepared statement 
    (WAJIB WHERE cid = ?)
  */
  $stmt = mysqli_prepare($conn, "UPDATE tbl_pengunjung
                                SET kodepengunjung = ?, namapengunjung = ?, alamatrumah = ? tanggalkunjungan = ? hobi = ? asalSLTA = ? pekerjaan = ? namaorangtua = ? namapacar = ? namamantan = ?
                                WHERE cid = ?");
  if (!$stmt) {
    #jika gagal prepare, kirim pesan error (tanpa detail sensitif)
    $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
    redirect_ke('edit.php?cid='. (int)$cid);
  }

  #bind parameter dan eksekusi (s = string, i = integer)
  mysqli_stmt_bind_param($stmt, "sssi",$kodepengunjung, $namapengunjung, $alamatrumah, $tanggalkunjungan, $hobi, $asalSLTA, $pekerjaan, $namaorangtua, $namapacar, $namamantan);

  if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value
    unset($_SESSION['old']);
    /*
      Redirect balik ke read.php dan tampilkan info sukses.
    */
    $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah diperbaharui.';
    redirect_ke('read.php'); #pola PRG: kembali ke data dan exit()
  } else { #jika gagal, simpan kembali old value dan tampilkan error umum
    $_SESSION['old'] = [
    'kodepengunjung'  => $kodepengunjung,
    'namapengunjung' => $namapengunjung,
    'alamatrumah' => $alamatrumah,
    'tanggalkunjungan' => $tanggalkunjungan,
    'hobi' => $hobi,
    'asalSLTA' => $asalSLTA,
    'pekerjaan' => $pekerjaan,
    'namaorangtua' => $namaorangtua,
    'namapacar' => $namapacar,
    'namamantan' => $namamantan,
    ];
    $_SESSION['flash_error'] = 'Data gagal diperbaharui. Silakan coba lagi.';
    redirect_ke('edit.php?cid='. (int)$cid);
  }
  #tutup statement
  mysqli_stmt_close($stmt);

  redirect_ke('edit.php?cid='. (int)$cid);