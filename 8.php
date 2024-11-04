<?php
function hitungKemunculan($data, $cari) {
    // Menghitung jumlah kemunculan angka yang dicari
    $jumlah = array_count_values($data);
    
    // Menampilkan hasil
    $jumlahKemunculan = isset($jumlah[$cari]) ? $jumlah[$cari] : 0;
    echo "Jumlah angka $cari = $jumlahKemunculan";
}

// Contoh data
$data = [80, 90, 75, 100, 85, 100, 66];
$cari = 75;

// Memanggil fungsi
hitungKemunculan($data, $cari);
?>
