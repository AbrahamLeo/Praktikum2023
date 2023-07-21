<?php
session_start();

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $factorial = factorial($number);
    
    $data = array(
        'Angka' => $number,
        'Faktorial' => $factorial,
        'NIM' => '312110030',
        'Nama' => 'Abraham Leo C.M.L'
    );
    
    $_SESSION['data'] = $data;
    
    echo "Angka: " . $number . "<br>";
    echo "Faktorial: " . $factorial . "<br>";
    
    echo "<a href='Lat3_3c_312110030.php'>Lihat Session</a>";
}
?>
