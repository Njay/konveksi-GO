<?php
    include("../Config/config.php");

    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $tipe = $_GET['tipe'];
    $ukuran = $_GET['ukuran'];
    $jumlah = $_GET['jumlah'];

    $query = mysqli_query($kon,"INSERT INTO tb_order (id,nama,alamat,tipe,ukuran,jumlah)
                VALUES('','$nama','$alamat','$tipe','$ukuran','$jumlah')");

    header('location: ../App/index.php?page=data')            
?>