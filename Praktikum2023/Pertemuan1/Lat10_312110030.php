<?php
// Membuat array data kendaraan
$kendaraan = array(
    array("Mobil"),
    array("Bus"),
    array("Truk"),
    array("Sepeda Motor"),
    array("Sepeda"),
    array("Becak"),
    array("Andong")
);

// Menampilkan array kendaraan sebelum pengurutan
echo "Array sebelum pengurutan: <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}

// Pengurutan array berdasarkan indeks kunci (sort)
sort($kendaraan);
echo "<br>Setelah pengurutan dengan sort(): <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}

// Pengurutan array asosiatif berdasarkan nilai (asort)
asort($kendaraan);
echo "<br>Setelah pengurutan dengan asort(): <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}

// Pengurutan array asosiatif berdasarkan kunci (ksort)
ksort($kendaraan);
echo "<br>Setelah pengurutan dengan ksort(): <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}

// Pengurutan array secara terbalik (rsort)
rsort($kendaraan);
echo "<br>Setelah pengurutan dengan rsort(): <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}

// Pengurutan array asosiatif secara terbalik berdasarkan nilai (arsort)
arsort($kendaraan);
echo "<br>Setelah pengurutan dengan arsort(): <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}

// Pengurutan array asosiatif secara terbalik berdasarkan kunci (krsort)
krsort($kendaraan);
echo "<br>Setelah pengurutan dengan krsort(): <br>";
foreach ($kendaraan as $data) {
    echo implode($data) . "<br>";
}
?>