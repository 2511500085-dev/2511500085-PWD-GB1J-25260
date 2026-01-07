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

<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>judul halaman</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <h1>ini header</h1>
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation" >
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
            <section id="contact">
                <h2>Edit Data Tamu</h2>
                <?php if (!empty($flash_error)): ?>
                    <div style="padding:10px; margin-bottom:10px;
                    background:#f8d7da; color:#721c24; border-radius:6px;">
                        <?=$flash_error;?>
                    </div>
                <?php endif; ?>
                <form action="proses_update.php" method="POST">
                    <input type="text" name="cid" value="<?= (int)$cid; ?>">
        
                        <label for="txtNama"><span>Nama:</span>
                        <input type="text" id="txtNama" name="txtNamaEd"
                        placeholder="masukkan nama"  required autocomplete="name"
                         value="<?= !empty($nama) ? $nama :'' ?> ">
                        </label>

                        <label for="txtEmail"><span>Email:</span>
                        <input type="Email" id="txtEmail" name="txtEmailEd"
                        placeholder="masukkan email" required autocomplete="email"
                         value="<?= !empty($email) ? $email :'' ?>">
                        </label>

                        <label for="txtPesan"><span>Pesan:</span>
                        <textarea id="txtPesan" name="txtPesanEd" rows="4"
                        placeholder= "tulis pesan anda..."
                         required><?= !empty($pesan) ? $pesan : '' ?></textarea>
                        </label>

                    <div>
                        <button type="submit">Update</button>
                    </div>
                </form>
            
