<?php
//ganti mySQLUserName dengan username dari server mySQL Anda
//ganti mySQLPassWord dengan password dari server mySQL Anda

$username = $_POST['username'];
$password = $_POST['password'];

$mysqli = new mysqli(
    'localhost',
    'root',
    '',
    'praktikumWeb') or die ("Gagal melakukan koneksi");

    $query = "CALL SP_Login ('".$username."','".$password."')";
    $rs = $mysqli->query($query) or die ('Query gagal');
        $row = $rs->fetch_object();
        if ($row){
            header("location:Lat5_1_312110030.php");
        } else {
            echo "Data tidak terdaftar";
            header('Location: formLogin.html'); //nama file form login yang //dibuat di Latihan 4
        }
?>