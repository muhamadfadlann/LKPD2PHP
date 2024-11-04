<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian</title>
</head>
<body>
    <?php
        function hitungKompensasi($lamaKerja) {
            // Jam kerja standar adalah 8 jam
            $jamKerjaStandar = 8;
            $kompensasi = 0;
        
            // Jika lama kerja lebih dari 8 jam
            if ($lamaKerja > $jamKerjaStandar) {
                $jamLebih = $lamaKerja - $jamKerjaStandar;
        
                // Hitung kompensasi untuk jam pertama
                $kompensasi += 50000;
        
                // Jika lebih dari 1 jam, hitung sisa jam dengan tarif Rp. 25.000 per jam
                if ($jamLebih > 1) {
                    $kompensasi += ($jamLebih - 1) * 25000;
                }
            }
        
            return $kompensasi;
        }
        
        // Contoh penggunaan
        $lamaKerja = 14;  // Misalnya, lama kerja adalah 14 jam
        $jamLebih = $lamaKerja - 8;
        $kompensasi = hitungKompensasi($lamaKerja);
        
        echo "Lama Kerja : $lamaKerja Jam<br>";
        echo "Jam Lebih : $jamLebih Jam<br>";
        echo "Jumlah Kompensasi : Rp. " . number_format($kompensasi, 0, ',', '.') . "<br>";
        ?>
</body>
</html>