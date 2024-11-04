<?php
// Mengulangi dari 10 hingga 1 untuk baris pertama
for ($j = 1; $j <= 2; $j++) {
    for ($i = 10; $i >= 1; $i--) {
        $hasil = $i * $j;
        echo "$i x $j = $hasil<br>";
    }
    // Menambahkan baris kosong antara set hasil
    echo "<br>";
}
?>
