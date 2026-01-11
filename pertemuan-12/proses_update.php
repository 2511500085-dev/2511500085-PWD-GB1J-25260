<?php
session_start();
require __DIR__.'/koneksi.php';
require_once __DIR__.'/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $_SESSION['flash_error'] = 'akses tidak valid.';
    redirect_ke('read.php');
}

$cid = filter_input(INPUT_POST, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

if (!$cid) {
    $_SESSION['flash_error'] = 'CID tidak valid.';
    redirect_ke('edit.php?cid='.(int)$cid);
}

$cnama = bersihkan($_POST['txtNamaEd'] ?? '');
$cmail = bersihkan($_POST['txtEmailEd'] ?? '');
$cpesan = bersihkan($_POST['txtPesanEd'] ?? '');
$captcha = bersihkan($_POST['txtCaptcha'] ?? '');

if ($nama === '') {
    $errors[] = 'nama wajib di isi.';
}
if ($mail === '' ) {
    $errors[] = 'email tidak valid.';
} elseif (!filter_var($cmail, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email tidak valid.';
}
if ($pesan === '') {
    $errors[] = 'pesan wajib di isi.';
}
if ($captcha === '') {
    $errors[] = 'jawaban captcha salah.';
}
if (mb_strlen($cnama) < 3) {
    $errors[] = 'nama minimal 3 karakter.';
}
if (mb_strlen($cpesan) < 10) {
    $errors[] = 'pesan minimal 10 karakter.';
}
if ((int)$captcha !== 6) {
    $errors[] = 'jawaban '. $captcha. 'captcha salah';
}

if (!empty($errors)) {
    $_SESSION['flash_error'] = implode('<br>', $errors);
    $_SESSION['old'] = [
        'cnama' => $cnama,
        'cmail' => $cmail,
        'cpesan' => $cpesan
    ];
    redirect_ke('edit.php?cid='.(int)$cid);
}

$stmt = mysqli_prepare($conn, "UPDATE tbl_tamu 
                                SET cnama = ?, cmail = ?, cpesan = ?
                                WHERE cid = ?");
if (!$stmt) {
    $_SESSION['flash_error'] = 'query tidak benar.';
    redirect_ke('edit.php?cid='.(int)$cid);
}

mysqli_stmt_bind_param($stmt, "sssi", $cnama, $cmail, $cpesan, $cid);

if (mysqli_stmt_execute($stmt)) {
unset ($_SESSION['old']);
    $_SESSION['flash_sukses'] = 'terimakasih data anda sudah diperbaharui.';
    redirect_ke('read.php');
} else {
    $_SESSION['old'] = [
        'cnama' => $cnama,
        'cmail' => $cmail,
        'cpesan' => $cpesan,
    ]; 
    $_SESSION['flash_error'] = 'data gagal diperbaharui.silahkan coba lagi.';
    redirect_ke('edit.php?cid='.(int)$cid);
}
mysqli_stmt_close($stmt);
redirect_ke('edit.php?cid='.(int)$cid);
