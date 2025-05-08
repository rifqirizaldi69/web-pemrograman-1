<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <h1>Belah Ketupat</h1>
    <?php
    $diagonal1 = $_POST['diagonal1'];
    $diagonal2 = $_POST['diagonal2'];
    $sisi = $_POST['sisi'];
    $luas = 0.5 * $diagonal1 * $diagonal2;
    $keliling = 4 * $sisi;
    echo"Luas Belah Ketupat: $luas <br>";
    echo "Keliling Belah Ketupat: $keliling <br>";
    ?>
    <img src="https://i.pinimg.com/736x/be/93/dd/be93ddd8ec1549db0f592c320c2b303a.jpg" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>

