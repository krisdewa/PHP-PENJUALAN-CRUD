<?php

    require_once("config.php");

    $sql_get = "SELECT * FROM penjualan";
    $query_penjualan = mysqli_query($koneksi, $sql_get);

    $results = [];

    while($row = mysqli_fetch_assoc($query_penjualan)) {
        $results[] = $row;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Penjualan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container-md"><br>

        <h1 class="display-5"> PENJUALAN </h1><br>
        <table class="table table-light table-striped">

            <thead class="table-dark table-bordered border-default">
                <tr>
                    <th scope="col">ID Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga Beli</th>
                    <th scope="col">Harga Jual</th>
                    <th scope="col">Nama Supplier</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>

            <?php
            $no =1;
            foreach($results as $result) :
            ?>

            <tbody class="table-orange table-bordered border-dark">
                <tr>
                    <td> <?= $result['id_barang'] ?></td>
                    <td> <?= $result['nama_barang'] ?></td>
                    <td> <?= $result['stok'] ?></td>
                    <td>Rp. <?= $result['harga_beli'] ?></td>
                    <td>Rp. <?= $result['harga_jual'] ?></td>
                    <td> <?= $result['nama_supplier'] ?></td>
                    <td>
                        <a class="btn btn-primary " href="edit.php?id_barang=<?=$result['id_barang'];?>"><i class="bi bi-pencil"></i> Edit</a>
                        <a class="btn btn-danger " href="hapus.php?id_barang=<?=$result['id_barang'];?>"><i class="bi bi-trash"></i> Hapus </a>
                    </td>
                </tr>
                
            </tbody>

            <?php
            $no++;
            endforeach;
            ?>

        </table><br>

        <div class="d-grid gap-2 col-3 mx-auto">
            <a class="btn btn-primary" href="tambah.php"><i class="bi bi-plus-square"></i> Tambah Data </a>
        </div>

    </div>
        <br><br><br><br><br>
        <footer class="bg-light text-center text-lg-start">

            <div class="container p-4">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright <a class="text-dark" href="https://krisdewa.github.io/">KrisDewa</a>
            </div>
        
        </footer>
</body>
</html>
