<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <h1>Lingkaran</h1>
    <?php
    $pilih = $_POST['pilih'];
    $phi = 3.14;
    $r = $_POST['r'];
    $luas = $phi * $r * $r;
    $keliling = 2 * $phi * $r;
    if ($pilih == 'luas') {
        echo "Luas lingkaran: $luas<br>";
    }elseif ($pilih == 'keliling') {
        echo "Kelilinng lingkaran: $keliling<br>";
    }else {
        echo "Luas lingkaran: $luas<br>";
        echo "Keliling lingkaran: $keliling<br>";
    }
    ?>
    <img src="	https://i.pinimg.com/474x/6d/5f/87/6d5f87a726ddb7f8355dffd4ed6a71d8.jpg" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>