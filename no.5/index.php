<?php
$bil1 = [80, 91, 65, 89, 55, 12, 90, 86];
$bil2 = [91, 99, 55, 81, 45, 90, 91, 98];

// Menggunakan array ini untuk mendapatkan bilangan yang ada di kedua variabel
$bilanganSama = array_intersect($bil1, $bil2);

// Menggunakan array dif untuk mendapatkan bilangan yang hanya ada di bil1
$bilanganTidakSama = array_diff($bil1, $bilanganSama);

// Menampilkan hasil
echo "Bilangan yang ada di kedua variabel:<br>";
echo implode('.', $bilanganSama) . "<br><br>";

echo "Bilangan yang tidak ada di kedua variabel:<br>";
echo implode(',', $bilanganTidakSama) . "<br>";
?>
