
<?php
// echo "<div class='isi'>";
      class Shell
      {
        public $jumlahLiter;
        public $jenisBb;
        protected $harga;
        protected $hargaDasar;
        protected $totalHarga;
        protected $totalPpn;
        protected $ppn ;


        public function __construct($jumlahLiter, $jenisBb,$harga)
        {
          $this->jumlahLiter = $jumlahLiter;
          $this->jenisBb = $jenisBb;
          $this->ppn = 10/100;
          $this->harga = $harga ;
        }

      //   public function setHarga() {
         
      // }

      public function hargaDasar()
      {
        $this->hargaDasar = $this->harga * $this->jumlahLiter;
        return $this->hargaDasar;
      }

      public function ppn() {
        $this->totalPpn = $this->hargaDasar * $this->ppn;
        return $this->totalPpn;
      }
      public function totalHarga() {
        $this->totalHarga = $this->hargaDasar() + $this->totalPpn;
        return $this->totalHarga;
        
      }
      }

      class Beli extends Shell
      {
        public function cetakBukti() {
          echo "<ul>";
          echo "<li>Tipe Minyak Bakar :". "<strong>" . $this->jenisBb . "</strong>"."</li>"."<br>";
          echo "<li>Dengan Jumlah : " . "<strong>" . $this->jumlahLiter . " Liter " . "</strong>". "</li>". "<br>";
          echo "<li>Harga Per-liter : ". "<strong>". "Rp. ". number_format($this->harga, 0, ",", ".") . "</strong>". "</li>". "<br>";
          echo "<li>Harga Dasar : " . "<strong>" . "Rp. " . number_format($this->hargaDasar, 0 , ",", ".") . "</strong>" . "</li>". "<br>";
          echo "<li>PPN(10%):"."<strong>". "Rp. ". number_format($this->ppn(), 0, ",", ".") . "</strong>" . "</li>"."<br><br>";
          echo "<li>Total Harga:". "<strong>" ."Rp. ". number_format($this->totalHarga, 0, ",", "."). "</li>". "</strong>". "<br>";
          echo "</ul>";
        }
      }

      if (isset($_POST['submit'])) {
        $jumlahLiter = $_POST['jumlahLiter'];
        $jenisBb = $_POST['jenisBb'];

        switch($jenisBb) {
          case "Super Shell":
            $harga = 15420;
            break;
          case "Shell V-Power":
            $harga = 16130;
            break;
          case "Shell V-Power Diesel":
            $harga = 13000;
            break;
          case "Shell V-Power Nitro":
            $harga = 16510;
        }
        $transaksiBensin = new Beli($jumlahLiter, $jenisBb, $harga);
        $transaksiBensin->hargaDasar();
        $transaksiBensin->ppn();
        $transaksiBensin->totalHarga();
        $transaksiBensin->cetakBukti();
      }

       

      echo "<div class='back-button'>";
      echo "<button type='button' class='btn btn-primary w-100 mb-3'><a class='text-white text-decoration-none' href='index.php'>Kembali</a></button>";
      echo "<br>";
      echo "<div class='print-button'>";
      echo "<button type='button' class='btn btn-success w-100' onclick='window.print()'><a class='text-white text-decoration-none' href='index.php'>Cetak</a></button>";
      echo "</div>";
      echo "</ul>";
      echo "</div>";
      ?>
   
