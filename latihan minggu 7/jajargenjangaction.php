<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajargenjang</title>
</head>
<body>
    <h1>Jajargenjang</h1>
    <?php
    $pilih = $_POST["pilih"];
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisiMiring = $_POST['sisiMiring'];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas + $sisiMiring);
            if ($pilih == "luas") {
                echo "Luas Jajargenjang: $luas<br>";
            }elseif ($pilih == "keliling") {
                echo "Keliling Jajargenjang: $keliling<br>";
            }else{
                echo "Luas Jajargenjang: $luas<br>";
                echo "Keliling Jajargenjang: $keliling<br>";
            }
    ?>
    <img src="https://i.pinimg.com/736x/3c/c4/fc/3cc4fc177250b8553e272ee0e982d509.jpg" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>