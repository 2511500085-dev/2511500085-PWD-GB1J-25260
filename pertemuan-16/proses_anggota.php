<?php
session_start();
require __DIR__ . './koneksi.php';
require_once __DIR__ . '/fungsi.php';


#cek method form, hanya izinkan POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $_SESSION['flash_error'] = 'Akses tidak valid.';
  redirect_ke('indexanggota.php#anggota');
}

#ambil dan bersihkan nilai dari form
$Nomor  = bersihkan($_POST['txtNoAng']  ?? '');
$Nama = bersihkan($_POST['txtNmAng'] ?? '');
$Jabatan = bersihkan($_POST['txtJabAng'] ?? '');
$Tanggaljadi = bersihkan($_POST['txtTglJadi'] ?? '');
$Kemampuan = bersihkan($_POST['txtSkill'] ?? '');
$Gaji  = bersihkan($_POST['txtGaji']  ?? '');
$NomorWA  = bersihkan($_POST['txtNoWA']  ?? '');
$Batalion  = bersihkan($_POST['txBatalion']  ?? '');
$Beratbadan = bersihkan($_POST['txtBB']  ?? '');
$Tinggibadan = bersihkan($_POST['txtTB']  ?? '');

#Validasi sederhana
$errors = []; #ini array untuk menampung semua error yang ada


if ($Nomor === '') {
  $errors[] = 'Nomor wajib diisi.';
}

if ($Nama === '') {
  $errors[] = 'Nama wajib diisi.';
}

if ($Tanggaljadi === '') {
  $errors[] = 'Tanggal wajib diisi.';

if ($Jabatan === '') {
  $errors[] = 'Jabatan wajib diisi.';
}

if ($Kemampuan === '') {
  $errors[] = 'skill wajib diisi.';
}

if ($Gaji === '') {
  $errors[] = 'gaji wajib diisi.';
}
if ($NomorWA === '') {
  $errors[] = 'NoWA wajib diisi.';
}
if ($Batalion === '') {
  $errors[] = 'batalion wajib diisi.';
}
if ($Beratbadan === '') {
  $errors[] = 'BB wajib diisi.';
}

if ($Tinggibadan === '') {
  $errors[] = 'TB wajib diisi.';
}

if (mb_strlen($Nama) < 3) {
  $errors[] = 'Nama minimal 5 karakter.';
}

if (mb_strlen($Tanggaljadi) < 10) {
  $errors[] = 'tanggal minimal 8 karakter.';
}


/*
kondisi di bawah ini hanya dikerjakan jika ada error, 
simpan nilai lama dan pesan error, lalu redirect (konsep PRG)
*/
if (!empty($errors)) {
  $_SESSION['old'] = [
    'Nomor'  => $Nomor,
    'Nama' => $Nama,
    'Jabatan' => $Jabatan,
    'Tanggaljadi' => $Tanggaljadi,
    'Kemampuan' => $Kemampuan,
    'Gaji' => $Gaji,
    'NomorWA' => $NomorWA,
    'Batalion' => $Batalion,
    'Beratbadan' => $Beratbadan,
    'Tinggibadan' => $Tinggibadan,
  ];

  $_SESSION['flash_error'] = implode('<br>', $errors);
  redirect_ke('indexanggota.php#biodata');
}

#menyiapkan query INSERT dengan prepared statement
$sql = "INSERT INTO anggota (Nomor, Nama, Jabatan, Tanggaljadi, Kemampuan, Gaji, NommorWA, Batalion, Beratbadan, Tinggibadan) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
  #jika gagal prepare, kirim pesan error ke pengguna (tanpa detail sensitif)
  $_SESSION['flash_error'] = 'Terjadi kesalahan sistem (prepare gagal).';
  redirect_ke('indexanggota.php#anggota');
}
#bind parameter dan eksekusi (s = string)
mysqli_stmt_bind_param($stmt, "ssssssssss", $Nomor, $Nama, $Jabatan, $Kemampuan, $Gaji, $NomorWA, $Batalion, $Beratbadan, $Tinggibadan);

if (mysqli_stmt_execute($stmt)) { #jika berhasil, kosongkan old value, beri pesan sukses
  unset($_SESSION['old']);
  $_SESSION['flash_sukses'] = 'Terima kasih, data Anda sudah tersimpan.';
  redirect_ke('indexanggota.php#anggota'); #pola PRG: kembali ke form / halaman home
} else { #jika gagal, simpan kembali old value dan tampilkan error umum
  $_SESSION['old'] = [
    'Nomor'  => $Nomor,
    'Nama' => $Nama,
    'Jabatan' => $Jabatan,
    'Tanggaljadi' => $Tanggaljadi,
    'Kemampuan' => $Kemampuan,
    'Gaji' => $Gaji,
    'NomorWA' => $NomorWA,
    'Batalion' => $Batalion,
    'Beratbadan' => $Beratbadan,
    'Tinggibadan' => $Tinggibadan,
    
    
  ];
  $_SESSION['flash_error'] = 'Data gagal disimpan. Silakan coba lagi.';
  redirect_ke('indexanggota.php#anggota');
}
#tutup statement
mysqli_stmt_close($stmt);
/*
	ikuti cara penulisan proses.php untuk validasi, sanitasi, RPG, data old
	dan insert ke tbl_tamu termasuk flash message ke index.php#anggota
	bedanya, kali ini diterapkan untuk anggota dosen bukan tamu
*/

$arrAnggota = [
  "noang" => $_POST["txtNoAng"] ?? "",
  "nama" => $_POST["txtNmAng"] ?? "",
  "jabatan" => $_POST["txtJabAng"] ?? "",
  "tanggal" => $_POST["txtTglJadi"] ?? "",
  "skill" => $_POST["txtSkill"] ?? "",
  "gaji" => $_POST["txtGaji"] ?? "",
  "nowa" => $_POST["txtNoWA"] ?? "",
  "batalion" => $_POST["txBatalion"] ?? "",
  "bb" => $_POST["txtBB"] ?? "",
  "tb" => $_POST["txtTB"] ?? ""
];
$_SESSION["anggota"] = $arrAnggota;

header("location: indexanggota.php#anggota");
