<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            /* width: 90%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px; */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007bff;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: black;
            color: white;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: rgba(8, 85, 8, 0.979);
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            line-height: 1.6;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
                width: 95%;
            }

            input[type="text"], 
            input[type="submit"] {
                font-size: 14px;
                padding: 8px;
            }

            .result {
                font-size: 16px;
            }
        }
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                width: 90%;
            }

            input[type="text"], 
            input[type="submit"] {
                font-size: 15px;
                padding: 9px;
            }

            .result {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>
    <form method="post">
        <label for="nama1">Nama 1:</label><br>
        <input type="text" id="nama1" name="nama1" required><br>
        <label for="nama2">Nama 2:</label><br>
        <input type="text" id="nama2" name="nama2" required><br>
        <input type="submit" value="Bandingkan">
    </form>

    <?php
    function bandingkanNama($nama1, $nama2) {
        // Menghitung panjang karakter dari dua nama
        $panjangNama1 = strlen($nama1);
        $panjangNama2 = strlen($nama2);

        // Menentukan nama dengan jumlah karakter lebih banyak dan selisihnya
        if ($panjangNama1 > $panjangNama2) {
            $namaPanjang = $nama1;
            $namaPendek = $nama2;
            $selisih = $panjangNama1 - $panjangNama2;
        } elseif ($panjangNama2 > $panjangNama1) {
            $namaPanjang = $nama2;
            $namaPendek = $nama1;
            $selisih = $panjangNama2 - $panjangNama1;
        } else {
            echo "Kedua nama memiliki jumlah karakter yang sama.<br>";
            return;
        }

        echo "\"" . $namaPanjang . "\" memiliki jumlah karakter lebih banyak dari \"" . $namaPendek . "\" : Selisih " . $selisih . " karakter<br>";
    }

    // Mengecek apakah form telah dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama1 = isset($_POST['nama1']) ? $_POST['nama1'] : '';
        $nama2 = isset($_POST['nama2']) ? $_POST['nama2'] : '';
        bandingkanNama($nama1, $nama2);
    }
    ?>

</body>
</html>