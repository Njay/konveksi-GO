<?php
    include("../Config/config.php");

    $id = $_GET['id'];

    $query = mysqli_query($kon,"DELETE FROM tb_order WHERE id='$id'");
    header('location: ../App/index.php?page=data');            
?>