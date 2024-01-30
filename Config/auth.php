<?php
session_start();
include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$login_err = "";

$query = mysqli_query($kon, "SELECT * FROM tb_user
WHERE username ='$username' AND password ='$password'");
if (mysqli_num_rows($query)==1){
    header('location:../App');
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = $user['level'];
}else if($username == '' || $password == ''){
    header('location:../index.php?error=2');
}
else{
    header('location:../index.php?error=1');
    //$login_err = "Invalid Username or Password!";
}
?>