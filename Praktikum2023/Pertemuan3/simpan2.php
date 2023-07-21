<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $myFile = "chatting.txt";
    $fh = fopen($myFile, 'a') or die ("can't open this file");
    $satu = $nama. "\n";
    fwrite($fh,$satu);
    $dua = $email. "\n";
    fwrite($fh,$dua);
    $tiga = $pesan. "\n". "\n";
    fwrite($fh, $tiga);
    fclose($fh);
    header("Location: Lat4_12_312110030.php");
}
?>