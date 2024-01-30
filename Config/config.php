<?php
$kon = mysqli_connect('localhost', 'root', '', 'db_sisfo');
if(!$kon){
    die("koneksi gagal".mysqli_connect_error());
}
?>