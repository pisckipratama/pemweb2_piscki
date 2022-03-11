<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Pemweb 2 Piscki - Form Belajar</title>
</head>

<body>
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-8">
        <h2>Belanja Online</h2>
        <hr>

        <form method="POST" action="form_belanja.php">
          <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label>
            <div class="col-6">
              <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Pilih Produk</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                <label for="produk_0" class="custom-control-label">TV</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                <label for="produk_1" class="custom-control-label">Kulkas</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
            <div class="col-2">
              <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <input type="submit" type="submit" class="btn btn-success" name="proses" value="Simpan">
            </div>
          </div>
        </form>
      </div>
      <div class="col-sm-4">
        <ul class="list-group">
          <li class="list-group-item active">Daftar Harga</li>
          <li class="list-group-item">TV - 4.200.000</li>
          <li class="list-group-item">Kulkas - 3.100.000</li>
          <li class="list-group-item">Mesin Cuci - 3.800.000</li>
          <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>
      </div>

    </div>
    <hr>

    <?php
    $proses = $_POST['proses'];
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    $total;

    if ($produk == "TV") {
      $total = 'Rp ' . number_format((int)$jumlah * 4200000);
    } elseif ($produk == "Mesin Cuci") {
      $total = 'Rp ' . number_format((int)$jumlah * 3800000);
    } elseif ($produk == "Kulkas") {
      $total = 'Rp ' . number_format((int)$jumlah * 3100000);
    }

    echo 'Nama Customer : ' . $customer;
    echo '<br/> Produk Pilihan : ' . $produk;
    echo '<br/> Jumlah Beli : ' . $jumlah;
    echo '<br/> Total Belanja : ' . $total;
    ?>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>