<?php

echo "<h2>Latihan For</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Pertemuan ke-$i<br>";
}

echo "<h2>Latihan While</h2>";

$i = 1;

while ($i <= 5) {
    echo "Nomor antrean: $i<br>";
    $i++;
}

echo "<h2>Latihan Do-While</h2>";

$i = 1;

do {
    echo "Percobaan ke-$i<br>";
    $i++;
} while ($i <= 5);

?>