<?php

    require_once("config.php");

    if(isset($_POST['submit'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $nama_supplier = $_POST['nama_supplier'];

        $sql_insert = "INSERT INTO penjualan VALUES('$id_barang', '$nama_barang', '$stok', '$harga_beli', '$harga_jual', '$nama_supplier')";
        mysqli_query($koneksi, $sql_insert);

        header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
        <br>
        <h1 class="display-5">TAMBAH DATA</h1>

        <form action="tambah.php" method="POST">
            <table>
                <br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID Barang</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="id_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga Beli</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga_beli">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga Jual</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga_jual">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_supplier">
                    </div>
                </div>

            </table><br>
            <button class="btn btn-primary" name="submit" type="submit">Tambah Data</button>
            <a href="index.php" class="btn btn-warning">Cancel</a>
        </form>
    </div>
</body>
</html>