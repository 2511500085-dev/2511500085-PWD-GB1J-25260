<?php
$HOBBY = ["Memasak", "Bermain Game"];

echo "<h3>Daftar Hobi Saya:</h3>";
for ($i = 0; $i < count($HOBBY); $i++) {
echo ($i + 1) . ". " . $HOBBY[$i] . "<br>";
}

echo "<hr>";
echo "<h4>Hasil print_r():</h4>";
echo "<pre>";
print_r($HOBBY);
echo "</pre>";

echo "<h4>Hasil var_dump():</h4>";
echo "<pre>";
var_dump($HOBBY);
echo "</pre>";
?>