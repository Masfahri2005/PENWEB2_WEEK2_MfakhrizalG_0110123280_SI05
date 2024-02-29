<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM BELANJA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<form method="POST" action="form_belanja.php">
            <br>
            <h5>Form Belanja Online</h5>
            <hr>
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Customer</label>
                <div class="col-8">
                    <input id="coustumer" name="costumer" placeholder="Masukan Nama Pemesan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Produk Pilihan</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="TV" id="name_0" type="radio" aria-describedby="nameHelpBlock" class="custom-control-input" value="4.200.000">
                        <label for="name_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="name" id="name_1" type="radio" aria-describedby="nameHelpBlock" class="custom-control-input" value="3.100.000">
                        <label for="name_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="name" id="name_2" type="radio" aria-describedby="nameHelpBlock" class="custom-control-input" value="3.800.000">
                        <label for="name_2" class="custom-control-label">Mesin Suci</label>
                    </div>
                    <span id="nameHelpBlock" class="form-text text-muted">Pilih Produk Sesuai Kebutuhan Anda</span>
                </div>
            </div>
            <div class="form-group row">
                <label for="Jumlah" class="col-4 col-form-label">Jumlah Beli</label>
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Masukan Jumlah Produk" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" value="Data Berhasil Di Simpan" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<hr>
<div class="container">
<?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai dari form pemesanan
            $customer = $_POST["costumer"];
            $product = isset($_POST["TV"]) ? "TV" : (isset($_POST["name"]) ? "Kulkas" : (isset($_POST["name"]) ? "Mesin Cuci" : ""));
            $quantity = $_POST["jumlah"];

            // Menghitung total belanja produk

            switch ($product) {
                case "TV":
                    $price = 4200000;
                    break;
                case "Kulkas":
                    $price = 3100000;
                    break;
                case "Mesin Cuci":
                    $price = 3800000;
                    break;
                default:
                    $price = 0;
            }

            $total = $price * $quantity;

            
            echo "<h5>Hasil Belanja</h5>";
            echo "<p>Nama Customer: $customer</p>";
            echo "<p>Produk Pilihan: $product</p>";
            echo "<p>Jumlah Beli: $quantity</p>";
            echo "<p>Total Belanja: Rp " . number_format($total, 0, ',', '.') . "</p>";
        }
        ?>
</div>       
