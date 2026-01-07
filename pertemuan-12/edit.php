<?php 
    session_start();
    require 'koneksi.php';
    require 'fungsi.php';

    $cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT,[
    'options' => ['min_range' => 1];
    ]);

    if (!$cid) {
        $_SESSION['flash_error'] = 'akses tidak valid.';
        redirect_ke('read.php');
    }

    $stmt = mysqli_prepare($conn, "SELECT cid,cnama,cmail,cpesan 
                                    FROM tbl_tamu WHERE cid = ? LIMIT 1");
    if (!$stmt) {
        $_SESSION['flash_error'] = 'queery tidak benar.';
        redirect_ke('read.php');
    }
    mysqli_stmt_bind_param($stmt, "i", $cid);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($res);
    mysqli_stmt_close($stmt);

    if (!$row) {
        $_SESSION['flash_error'] = 'record tidak ditemukan.';
        redirect_ke('read.php');
    }

    $cnama = $row['cnama'] ?? '';
    $cmail = $row['cmail'] ?? '';
    $cpesan = $row['cpesan'] ?? '';

    $flash_error = $_SESSION['flash_error'] ?? '';
    $old = $_SESSION['old'] ?? [];
    unset($_SESSION['flash_error'], $_SESSION['old']);
    if (!empty($old)) {
        $cnama = $old['cnama'] ?? $cnama;
        $cmail = $old['cmail'] ?? $cmail;
        $cpesan = $old['cpesan'] ?? $cpesan;
    }
?>
