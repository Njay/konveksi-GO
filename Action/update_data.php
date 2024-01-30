<?php
    include("../Config/config.php");

    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $tipe = $_GET['tipe'];
    $ukuran = $_GET['ukuran'];
    $jumlah = $_GET['jumlah'];
    $id = $_GET['id']; 

    $query = mysqli_query($kon,"UPDATE tb_order SET nama='$nama', alamat='$alamat', tipe='$tipe',
                            ukuran='$ukuran', jumlah='$jumlah' WHERE id='$id'");

    header('location: ../App/index.php?page=data')            
?>