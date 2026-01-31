<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';

#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('index.php#biodata');
}

#ambil dan bersihkan nilai dari form
  $kodepengunjung = bersihkan ($_POST['txtKodePen'] ?? '' );
  $namapengunjung = bersihkan ($_POST['txtNmPengunjung'] ?? '');
  $alamatrumah = bersihkan ($_POST['txtAlRmh'] ?? '');
  $tanggalkunjungan = bersihkan ($_POST['txtTglKunjungan'] ?? '');
  $hobi = bersihkan ($_POST['txtHobi'] ?? '');
  $asalSLTA = bersihkan ($_POST['txtAsalSMA'] ?? '');
  $pekerjaan = bersihkan ($_POST['txtKerja'] ?? '');
  $namaorangtua =  bersihkan ($_POST['txtNmOrtu'] ?? '');
  $namapacar = bersihkan ($_POST['txtNmPacar'] ?? '');
  $namamantan = bersihkan ($_POST['txtNmMantan'] ?? '');


#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada

if ($kodepengunjung === '') {
  $errors[] = 'kode wajib diisi.';
}

if ($namapengunjung === '') {
  $errors[] = 'nama wajib diisi.';
}

if ($alamatrumah === '') {
  $errors[] = 'alamat wajib diisi.';
}

if ($tanggalkunjungan === '') {
  $errors[] = 'tanggal wajib diisi.';
}

if ($hobi === '') {
  $errors[] = 'hobi wajib diisi.';
}

if ($asalSLTA === '') {
  $errors[] = 'asalSLTA wajib diisi.';
}

if ($pekerjaan === '') {
  $errors[] = 'pekerjaan wajib diisi.';
}

if ($namaorangtua === '') {
  $errors[] = 'namaortu wajib diisi.';
}

if ($namapacar === '') {
  $errors[] = 'namapacar wajib diisi.';
}

if ($namamantan === '') {
  $errors[] = 'namamantan wajib diisi.';
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
  redirect_ke('index.php#biodata');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO tbl_pengunjung 
(kodepengunjung, namapengunjung, alamatrumah, tanggalkunjungan, hobi, asalSLTA, pekerjaan, namaorangtua, namapacar, namamantan)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('index.php#biodata');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "ssssssssss", $kodepengunjung, $namapengunjung, $alamatrumah, $tanggalkunjungan, $hobi, $asalSLTA, $pekerjaan, $namaorangtua, $namapacar, $namamantan );

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data biodata Anda sudah tersimpan.';
  redirect_ke('index.php#biodata'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum

  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('index.php#biodata');
}
#tutup statement
mysqli_stmt_close($stmt);

$arrBiodata = [
  "kodepen" => $_POST["txtKodePen"] ?? "",
  "nama" => $_POST["txtNmPengunjung"] ?? "",
  "alamat" => $_POST["txtAlRmh"] ?? "",
  "tanggal" => $_POST["txtTglKunjungan"] ?? "",
  "hobi" => $_POST["txtHobi"] ?? "",
  "slta" => $_POST["txtAsalSMA"] ?? "",
  "pekerjaan" => $_POST["txtKerja"] ?? "",
  "ortu" => $_POST["txtNmOrtu"] ?? "",
  "pacar" => $_POST["txtNmPacar"] ?? "",
  "mantan" => $_POST["txtNmMantan"] ?? ""
];
$_SESSION["biodata"] = $arrBiodata;

header("location: index.php#about");
