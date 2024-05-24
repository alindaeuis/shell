<?php 
class Shell {
  // attr harga2 dibuat private karena sudah ada getter yg akan menampilkan datanya, dan ada setter yg akan 
  private $hargaShellSuper,
          $hargaShellVpower,
          $hargaShellVpowerDiesel,
          $hargaShellVpowerNitro;
  public $jenis,
         $jumlah;
  protected $totalPembayaran;

  public function setHarga($valSSuper, $valSVPower, $valSVPowerDiesel, $valSVPowerNitro) {
    // mengisi nilai ke attribute, nilai nantinya diisi dari 
    $this->hargaShellSuper = $valSSuper;
    $this->hargaShellVpower = $valSVPower;
    $this->hargaShellVpowerDiesel = $valSVPowerDiesel;
    $this->hargaShellVpowerNitro = $valSVPowerNitro;
  }

  public function getHarga() {
    // setelah nilai dari atribut disimpan, fungsi getter akan mengembaliakan/menampilkannya untuk digunakan di object nya
    // karena data yang akan dikirim/dikeluarkan lebih dari satu, maka data2 tersebut akan disatukan terlebih dahulu
    $semuaDataSolar["SSuper"] = $this->hargaShellSuper;
    $semuaDataSolar["SSVPower"] = $this->hargaShellVpower;
    $semuaDataSolar["SVPDiesel"] = $this->hargaShellVpowerDiesel;
    $semuaDataSolar["SVPNitro"] = $this->hargaShellVpowerNitro; 
    return $semuaDataSolar;
  }
}

class Beli extends Shell {
  public function totalHarga() {
    $this->totalPembayaran = $this->getHarga()[$this->jenis] * $this->jumlah;
  }

  public function cetakBukti() {
    echo "------------------------";
    echo "<br>";
    echo "Jenis Bahan Bakar: ". $this->jenis;
    echo "<br>";
    echo "Total Liter: ". $this->jumlah;
    echo "<br>";
    echo "Harga Bayar: ". "Rp ". $this->totalPembayaran;
    echo "<br>";
    echo "------------------------";
  }
  
}
