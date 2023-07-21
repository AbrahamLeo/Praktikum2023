<html>
<head>
    <title>Order Form</title>
</head>
<body>
    <?php
    // Cek apakah ada data yang diinput sebelumnya
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mendapatkan nilai terakhir yang diinput
        $lastValue = $_POST['cd_order'];
    } else {
        // Nilai default jika tidak ada input sebelumnya
        $lastValue = '';
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mendapatkan nilai terakhir yang diinput
        $lastValue2 = $_POST['dvd_order'];
    } else {
        // Nilai default jika tidak ada input sebelumnya
        $lastValue2 = '';
    }
    ?>
    <form action="Lat3_4b_312110030.php" method="POST">
    <p> Order CD, amount :
    <input type="text" name="cd_order" value="<?php echo $lastValue; ?>" size="2" maxlength="2" /> 
    </p>
    <p> Order DVD, amount :
    <input type="text" name="dvd_order" value="<?php echo $lastValue2; ?>" size="2" maxlength="2" />
    </p>
    <input type="submit" value="Add To Cart" name="submit" />
</form>
</body>
</html>