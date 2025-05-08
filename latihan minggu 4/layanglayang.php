<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-layang</title>
</head>
<body>
    <h1>Layang-layang</h1>
    <?php
    $diagonal1 = 20;
    $diagonal2 = 2;
    $sisiPendek = 20;
    $sisiPanjang = 2;
    $luas = 0.5 * $diagonal1 * $diagonal2;
    $keliling = 2 * ($sisiPendek + $sisiPanjang);
    echo"Luas Layang-layang: $luas <br>";
    echo "Keliling Layang-layang: $keliling <br>";
    ?>
    <img src="	https://i.pinimg.com/474x/f9/22/c7/f922c7d6fb9d397643e7bb82df7873a8.jpg" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>