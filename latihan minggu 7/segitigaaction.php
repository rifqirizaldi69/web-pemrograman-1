<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <h1>Segitiga</h1>
    <?php
    $pilih = $_POST['pilih'];
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $sisi3 = $_POST['sisi3'];
    $luas = 0.5 * $alas * $tinggi;
    $keliling = $sisi1 + $sisi2 + $sisi3;

    if ($pilih == 'luas') {
        echo "Luas Segitiga Adalah: $luas<br>";
    }elseif ($pilih == 'keliling') {
        echo "Keliling Segitiga Adalah: $keliling<br>";
    }else {
        echo "Luas Segitiga: $luas<br>";
        echo "Keliling Segitiga: $keliling<br>";
    }
    ?>
    <img src="	https://i.pinimg.com/474x/cd/37/89/cd3789373bb43eebf3dd06627c523f97.jpg
" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>