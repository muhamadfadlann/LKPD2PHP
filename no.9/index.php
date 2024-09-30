<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HitungPecahan</title>
</head>
<body>
<?php
function hitungPecahan($jumlahUang) {
    // Daftar pecahan uang yang tersedia
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50];
    $hasil = [];

    echo "Uang: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br>";
    echo "Lembar Rupiah:<br>";

    // Menghitung jumlah lembar untuk setiap pecahan
    foreach ($pecahan as $uang) {
        if ($jumlahUang >= $uang) {
            $jumlahLembar = floor($jumlahUang / $uang);
            $jumlahUang -= $jumlahLembar * $uang;
            $hasil[$uang] = $jumlahLembar;
        }
    }

    // Menampilkan hasil
    foreach ($hasil as $uang => $jumlahLembar) {
        echo "Rp. " . number_format($uang, 0, ',', '.') . " : " . $jumlahLembar . "<br>";
    }
}

// Contoh penggunaan fungsi
hitungPecahan(1500800);
?>

</body>
</html>