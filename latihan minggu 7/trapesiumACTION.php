<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <h1>Trapesium</h1>
    <?php
    $pilih = $_POST['pilih'];
    $sisiAtas = $_POST['sisiAtas'];
    $sisiBawah = $_POST['sisiBawah'];
    $tinggi = $_POST['tinggi'];
    $sisiA = $_POST['sisiA'];
    $sisiC = $_POST['sisiB'];
    $sisiB = $_POST['sisiC'];
    $sisiD = $_POST['sisiD'];
    $luas = 0.5 * ($sisiAtas + $sisiBawah) * $tinggi;
    $keliling = $sisiA + $sisiB + $sisiC + $sisiD;
        if ($pilih == 'luas'){
            echo "Luas Trapesium: $luas<br>";
        } elseif ($pilih == 'keliling'){
            echo "Keliling Trapesium: $keliling<br>";
        } else {
            echo "Luas Trapesium: $luas<br>";
            echo "Kelilinng Trapesium: $keliling<br>";
        }
    ?>
    <img src="	https://i.pinimg.com/736x/7e/6b/db/7e6bdbf036a6b162c9594dd84e90094d.jpg" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>