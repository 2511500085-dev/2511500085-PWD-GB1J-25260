<?php
$nilai = 80;
if ($nilai >= 90) {
echo "A";
} elseif ($nilai >= 80) {
echo "B";
} else {
echo "C";
}
?>

<?php
$hari = "Senin";
switch ($hari) {
case "Senin": echo "Awal Minggu!"; break;
case "Jumat": echo "Hampir weekend!"; break;
default: echo "Hari biasa.";
}
?>