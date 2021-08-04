<?php
echo "MAINTENANCE"; die; 
$data = [
  'title' => 'Profit Kalkulasi',
  'baner' => 'Halo! aku disini untuk mengkalkulasi profit mu'
];

if (isset($_POST['mencari_banyak_koin'])) {
  $koin_yang_didapat = ((float)$_POST['op'] / (float)$_POST['harga_koin_saat_beli']);
} else {}

if (isset($_POST['mencari_profit'])) {
   $keuntungan_profit = ((float)$_POST['jumlah_koin_yang_di_dapat'] * (float)$_POST['harga_koin_saat_jual']);
   echo $_POST['jumlah_koin_yang_di_dapat'];
   echo "<br>";
   echo $_POST['harga_koin_saat_jual'];
   echo '<br>';
   echo decimals($keuntungan_profit); die;
 } else {}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $data['title']; ?></title>
  </head>
  <body>
    <div class="container">
      <h1><?= $data['baner']; ?></h1>

      <form action="" method="post">
        <h5> # Koin yang di dapat</h5>
        <div class="form-group">
          <label for="op">Angka open posisi</label>
          <input type="text" class="form-control" id="op" name="op">
        </div>
        <div class="form-group">
          <label for="harga_koin_saat_beli">Harga koin saat beli</label>
          <input type="text" class="form-control" id="harga_koin_saat_beli" name="harga_koin_saat_beli">
        </div>
        <button type="submit" name="mencari_banyak_koin" class="btn btn-primary mb-3">Submit</button>
      </form> 

      <form action="" method="post">
        <h5> # Keuntungan Profit</h5>
        <div class="form-group">
          <label for="jumlah_koin_yang_di_dapat">Jumlah koin yang di dapat</label>
          <input type="text" class="form-control" id="jumlah_koin_yang_di_dapat" name="jumlah_koin_yang_di_dapat">
        </div>
        <div class="form-group">
          <label for="harga_koin_saat_jual">Harga koin saat jual</label>
          <input type="text" class="form-control" id="harga_koin_saat_jual" name="harga_koin_saat_jual">
        </div>
        <button type="submit" name="mencari_profit" class="btn btn-primary mb-3">Submit</button>
      </form> 

    </div>
    <?php if(isset($_POST['mencari_banyak_koin'])) { ?>
      <div class="container mt-4">
        <h5> # Koin yang di dapat</h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Angka Open Posisi</th>
              <th scope="col">Harga Koin Saat Beli</th>
              <th scope="col">Jumlah Koin Yang Di Dapat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">#</th>
              <td><?= $_POST['op']; ?></td>
              <td><?= $_POST['harga_koin_saat_beli']; ?></td>
              <td><?= $koin_yang_didapat; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    <?php } else {} ?>

    <?php if(isset($_POST['mencari_profit'])) { ?>
      <div class="container mt-3">
        <h5> # Profit </h5>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Jumlah koin yang di dapat</th>
              <th scope="col">Harga koin saat jual</th>
              <th scope="col">Profit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">#</th>
              <td><?= $_POST['jumlah_koin_yang_di_dapat']; ?></td>
              <td><?= $_POST['harga_koin_saat_jual']; ?></td>
              <td><?= $keuntungan_profit; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    <?php } else {} ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>