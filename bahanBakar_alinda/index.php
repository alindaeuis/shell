<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pengisian bensin</title>
  <!-- font awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Jersey+15&family=Unbounded:wght@200..900&display=swap"
    rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="main">
    <h1>Pengisian Bahan Bakar</h1>
    <div class="isi">
      <?php
      class Shell
      {
        public $jumlahLiter;
        public $jenisBb;
        private $totalLiter;

        public function __construct($jumlahLiter, $jenisBb)
        {
          $this->jumlahLiter = $jumlahLiter;
          $this->jenisBb = $jenisBb;
        }
      
      }

      class Beli extends Shell
      {
        public function totalHargaBensin()
        {

          if ($this->jenisBb == "Super Shell") {
            $this->totalLiter = 15420 * (1 + 0.10) * $this->jumlahLiter;
          } else if ($this->jenisBb == "Shell V-Power") {
            $this->totalLiter = 16130 * (1 + 0.10) * $this->jumlahLiter;
            ;
          } else if ($this->jenisBb == "Shell V-Power Diesel") {
            $this->totalLiter = 18310 * (1 + 0.10) * $this->jumlahLiter;
            ;
          } else if ($this->jenisBb == "Shell V-Power Nitro") {
            $this->totalLiter = 16510 * (1 + 0.10) * $this->jumlahLiter;
          } 
          return number_format($this->totalLiter, 0, ',', '.');
        }

        public function cetakBukti() {
          echo "Anda membeli bahan bakar minyak tipe " . "<strong>" . $this->jenisBb . "</strong>" . "<br>";
          echo "Dengan Jumlah: " . "<strong>" . $this->jumlahLiter . " Liter " . "</strong>" . "<br>";
          echo "Total yang harus anda bayar adalah " . "<strong>" . "Rp. " . number_format($this->totalLiter, 0 , ",", ".") . "</strong>";
        }
      }
      
      if (isset($_POST['submit'])) {
        $jumlahLiter = $_POST['jumlahLiter'];
        $jenisBb = $_POST['jenisBb'];
        $transaksiBensin = new Beli($jumlahLiter, $jenisBb);
        $transaksiBensin->totalHargaBensin();
        $transaksiBensin->cetakBukti();

      }
      ?>
    </div>
    <div class="form"
      style="text-align: left; display: flex; flex-direction: column; justify-content: center; align-items: center; margin: 20px auto; font-size: 20px;">
      <form action="" method="post">
        <div class="mb-3">
          <label for="jumlahLiter" class="form-label">Masukkan Jumlah Liter</label>
          <input type="number" class="form-control" id="jumlahLiter" aria-describedby="jumlahLiter" name="jumlahLiter" placeholder="Jumlah Liter"
            required>
        </div><br>
        <div class="mb-3">
          <label for="jenisBb">Pilih Tipe Bahan Bakar</label>
          <select class="jenisBb" aria-label="jenisBb" name="jenisBb" required>
            <option value="">Pilih Bahan Bakar</option>
            <option value="Super Shell">Super Shell</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel" name="jeniBb">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
          </select><br>
        </div>
        <button type="submit" name="submit">Bayar</button>
      </form>

    </div>
  </div>
  </div>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>