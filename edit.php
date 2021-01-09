<?php

    require("config.php");

    $id_barang = $_GET['id_barang'];

    $sql_cari = "SELECT * FROM penjualan WHERE id_barang = '$id_barang'";
    $query = mysqli_query($koneksi, $sql_cari);
    $result = mysqli_fetch_assoc($query);

    if(isset($_POST['submit'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $nama_supplier = $_POST['nama_supplier'];

        $sql_edit = "UPDATE penjualan SET nama_barang = '$nama_barang', stok = '$stok', harga_beli = '$harga_beli', 
                                          harga_jual = '$harga_jual', nama_supplier = '$nama_supplier' 
                                      WHERE id_barang = '$id_barang' ";
        mysqli_query($koneksi, $sql_edit);

        header("Location:index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit Data </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm"> <br>

        <h1 class="display-5">EDIT DATA</h1>

        <form action="edit.php" method="POST">

            <table><br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID Barang</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="id_barang" value="<?= $result['id_barang'];?>" >
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_barang" value="<?= $result['nama_barang'];?>" >
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="stok" value="<?= $result['stok'];?>" >
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga Beli</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga_beli" value="<?= $result['harga_beli'];?>" >
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga Jual</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="harga_jual" value="<?= $result['harga_jual'];?>" >
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_supplier" value="<?= $result['nama_supplier'];?>" >
                    </div>
                </div>

            </table><br>

            <button class="btn btn-primary" name="submit" type="submit">Edit</button>
            <a href="index.php" class="btn btn-warning"> Cancel </a>

        </form>
    </div>
</body>
</html>