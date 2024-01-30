<?php
    
    include('config.php');

    $nama = $_GET['nama'];
    $username = $_GET['username'];
    $level = $_GET['level'];
    $password = $_GET['password'];
    
    $query = mysqli_query($kon,"INSERT INTO tb_user (id,nama,username,password,level)
                VALUES('','$nama','$username','$password','$level')");

    echo'<script>alert("Successfully Registered, Pleas Login!")</script>';
?>