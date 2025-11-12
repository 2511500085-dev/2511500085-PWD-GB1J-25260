<?php 
    session_start();
    $sesnama = $_GET["txtNama"];
    $sesemail = $_GET["txtEmail"];
    $sespesan = $_GET["txtPesan"];
    $_SESSION["sesnama"] = $sesnama;
    $_SESSION["sesemail"] = $sesemail;
    $_SESSION["sespesan"] = $sespesan;
    header("location: get.php");
?>