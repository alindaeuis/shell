<?php
// require "logic.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="jumlah" placeholder="jumlah liter">
    <select name="jenis" id="jenis">
      <option value="SSuper">Shell Super</option>
      <option value="SSVPower">Shell V Power</option>
      <option value="SVPDiesel">Shell V Power Diesel</option>
      <option value="SVPNitro">Shell V Power Nitro</option>
    </select>
    <button type="submit" name="submit">kirim</button>
  </form>

  <?php
    require "logic.php"; 
    $shell = new Beli();
    $shell->setHarga(16450, 17500, 16400, 15400);
  if(isset($_POST['submit'])) {
    $shell->jumlah = $_POST['jumlah'];
    $shell->jenis = $_POST['jenis'];
    // $beli = new Beli();
     $shell->totalHarga();
     $shell->cetakBukti();
  } 
  ?>
</body>
</html>