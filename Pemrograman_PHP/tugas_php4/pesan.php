<?php
error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $customerName = $_POST['customerName'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $unitPrice = 0;
    switch ($product) {
        case 'ayam':
            $unitPrice = 50000;
            break;
        case 'lele':
            $unitPrice = 30000;
            break;
        case 'bebek':
            $unitPrice = 60000;
            break;
        case 'bandeng':
            $unitPrice = 30000;
            break;
    }
    $discount = 20 / 100;
    $ppn = 10 / 100;

    $subtotal = $quantity * $unitPrice;

    $totalDiscount = $subtotal * $discount;

    $totalPpn = $ppn * ($subtotal - $discount);

    $finalPrice = ($subtotal - $totalDiscount) + $totalPpn;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas PHP 2</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h2 style="text-align: center;" class="mb-4">Beli Barang</h2>
        <div class="row">
            <div class="col">
                <form id="purchaseForm" method="post" action="index.php?hal=pesan">
                    <!-- <label for="customerName">Nama Pelanggan:</label>
                    <input type="text" id="customerName" name="customerName" required> -->

                    <div class="form-group">
                        <label for="customerName">Nama Pelanggan:</label>
                        <input type="text" class="form-control" name="customerName" id="customerName" aria-describedby="customerName" placeholder="Enter Your Name">
                    </div>

                    <div class="form-group">
                        <label for="customerName">Jenis Produk:</label>
                        <select id="product" name="product" required>
                            <option value="ayam">Ayam</option>
                            <option value="lele">Lele</option>
                            <option value="bebek">Bebek</option>
                            <option value="bandeng">Bandeng</option>
                        </select>

                    </div>

                    <!-- <label for="quantity">Jumlah Beli:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" required> -->

                    <div class="form-group">
                        <label for="quantity">Jumlah Beli:</label>
                        <input type="number" class="form-control" name="quantity" id="quantity" aria-describedby="quantity" placeholder="Enter Number">
                    </div>

                    <input type="submit" value="Hitung" class="btn btn-primary">
                </form>
            </div>
            <div class="col">
                <div class="list-group">
                    <p class="list-group-item list-group-item-action active">
                        Nota
                    </p>
                    <p class="list-group-item list-group-item-action"><strong>Nama Pelanggan:</strong> <?php echo $customerName ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Produk:</strong> <?php echo $product ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Jumlah Beli:</strong> <?php echo $quantity ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Harga Satuan:</strong> <?php echo $unitPrice ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Subtotal:</strong> <?php echo $subtotal ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Total Diskon:</strong> <?php echo $totalDiscount ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Total PPN:</strong> <?php echo $totalPpn ?> </p>
                    <p class="list-group-item list-group-item-action"><strong>Harga Akhir:</strong> <?php echo $finalPrice ?> </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>