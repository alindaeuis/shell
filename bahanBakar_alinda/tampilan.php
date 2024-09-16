<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Jersey+15&family=Unbounded:wght@200..900&display=swap"
    rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #ede9e9;
      font-family: Unbounded;
    }

    .card {
      margin: 5rem auto;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      border-radius: 10px;
      width: 50%;
      font-size: 15px;
      padding: 30px;
      box-shadow: 0 0 7px rgba(0, 0, 0, 0.7);
      text-align: center;
    }

    ul li {
      list-style: none;

    }

    @media print {

      .back-button,
      .print-button {
        display: none;
      }

      .card {
        margin: none;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        border-radius: 0;
        width: 100%;
        height: auto;
        font-size: none;
        padding: 0;
        box-shadow: none;
        text-align: start;
        border: none;
      }


    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <h3 class="mb-4">Bukti Transaksi Pembelian</h3>
      <?php require_once 'logic.php' ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>