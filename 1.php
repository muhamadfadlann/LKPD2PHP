<?php
class cekString {
    private $teks;

    public function __construct($teks) {
        $this->teks = $teks;
    }

    public function cekAngka() {

        $angkaHasil = preg_replace('/[^0-9]/', '', $this->teks);
        
        if ($angkaHasil) {
            $angkaArray = str_split($angkaHasil, 1);
            return "Teks mengandung angka : " . implode(',', $angkaArray);
        } else {
            return "Teks tidak mengandung angka";
        }
    }
}
?>

<html>
  <head>
    <title>Cek String</title>
    <style>
      body {
        text-align: center;
        font-family: Arial, sans-serif;
      }
      form {
        display: inline-block;
        margin: 20px auto;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <label for="teks">Masukkan teks:</label>
      <input type="text" id="teks" name="teks" />
      <input type="submit" value="Cek" />
    </form>
    <?php
      if (isset($_POST['teks'])) {
        $cekString = new cekString($_POST['teks']);
        echo "<p style='text-align: center;'>" . $cekString->cekAngka() . "</p>";
      }
    ?>
  </body>
</html>