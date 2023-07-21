<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $myFile = "guestbook.txt";
    $fh = fopen($myFile, 'a') or die ("can't open this file");
    $satu = $nama. ";";
    fwrite($fh,$satu);
    $dua = $komentar. "\n";
    fwrite($fh,$dua);
    fclose($fh);
    header("Location: Lat4_10_312110030.php");
}
?>