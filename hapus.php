<?php

    require_once("config.php");
    $id_barang = $_GET['id_barang'];

    $sql_delete = "DELETE FROM penjualan WHERE id_barang = '$id_barang' ";
    mysqli_query($koneksi, $sql_delete);

    header("Location:index.php");

?>