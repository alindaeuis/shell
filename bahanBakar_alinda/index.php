
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pengisian bensin</title>
  <!-- css -->
  <link rel="stylesheet" href="style.css">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Jersey+15&family=Unbounded:wght@200..900&display=swap"
    rel="stylesheet">


</head>

<body class="bg-light">
  <div class="container">
    <img src="img/image.png" alt="shell logo" width="100" class="d-flex align-center text-center mx-auto mt-4 mb-1">
    <h1 class="text-center mb-3" style="text-shadow: 0 0 8px rgba(0, 0, 0, 0.7); font-size:30px;">
      Pengisian Bahan Bakar</h1>
    <div class="form d-flex flex-column justify-content-center align-center mx-auto mb-4"
    style="box-shadow: 0 0 7px rgb(0, 0, 0, 0.7);background-color: #ffffff;">
    <form action="tampilan.php" method="post" class="">
        <div class="mb-3 ">
          <label for="jumlahLiter" class="form-label">Masukkan Jumlah Liter</label>
          <input type="number" class="form-control" id="jumlahLiter" aria-desrcribedby="jumlahLiter" name="jumlahLiter"
            placeholder="Jumlah Liter" required>
        </div><br>
        <div class="mb-3 ">
          <label for="jenisBb" class="form-label mb-3">Pilih Tipe Bahan Bakar</label>
          <select class="form-select jenisBb " aria-label="jenisBb" name="jenisBb" required>
            <option value="" disabled selected>Pilih Bahan Bakar</option>
            <option value="Super Shell">Super Shell</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel" name="jeniBb">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
          </select><br>
        </div>
        <button type="submit" style="background-color: #f41818;"  class="btn btn-light w-100" name="submit">Bayar</button>
      </form>

    </div>
  </div>
  </div>
  <p class="copywrite" style="text-align: center;
  color: rgba(255, 255, 255, 0.1); text-shadow: -0 -0 8px solid #fff;"><a
      href="https://www.instagram.com/alindaacy_/?hl=id"
      style="text-decoration:none;color:rgba(255, 255, 255, 0.3); cursor:pointer; font-size: 25px;">&copy;alindaeuissoleha</a>
  </p>
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


</body>

</html>