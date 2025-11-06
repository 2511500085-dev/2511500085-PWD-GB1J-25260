<?php
session_start();
$_SESSION["nama"] = $POST["txtNama"];
$_SESSION["email"] = $POST["txtEmail"];
$_SESSION["pesan"] = $POST["txtPesan"];
echo $_SESSION["nama"] . " " .  $_SESSION["email"] . " " .  $_SESSION["pesan"];
header("Location: proses.php");
?>