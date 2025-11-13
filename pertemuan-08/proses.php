<?php
session_start();
$sesNIM = $_POST["txtNim"];
$sesNama = $_POST["txtNama"];
$sesEmail = $_POST["txtEmail"];
$sesTempatlahir = $_POST["txtTempatlahir"];
$sesTanggallahir = $_POST["txtTanggallahir"];
$sesHobi = $_POST["txtHobi"];
$sesPasangan = $_POST["txtPasangan"];
$sesPekerjaan = $_POST["txtPekerjaan"];
$sesNamaorangtua = $_POST["txtNamaorangtua"];
$sesNamakakak = $_POST["Namakakak"];
$sesNamaadik = $_POST["Namaadik"];
$sespesan = $_POST["txtPesan"];

$_SESSION["sesNim"] = $sesNIM;
$_SESSION["sesNama"] = $sesNama;
$_SESSION["sesEmail"] = $sesEmail;
$_SESSION["sesTempatlahir"] = $sesTempatlahir;
$_SESSION["sesTanggallahir"] = $sesTanggallahir;
$_SESSION["sesHobi"] = $sesHobi;
$_SESSION["sesPasangan"] = $sesPasangan;
$_SESSION["sesPekerjaan"] = $sesPekerjaan;
$_SESSION["sesNamaorangtua"] = $sesNamaorangtua;
$_SESSION["sesNamakakak"] = $sesNamakakak;
$_SESSION["sesNamaadik"] = $sesNamaadik;
$_SESSION["sespesan"] = $sespesan;

header("location: index.php");
?>

<?php

?>