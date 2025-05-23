<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
    <h1>Persegi Panjang</h1>
    <?php
$pjg= $_POST['pjg'];
$lbr= $_POST['lbr'];
$luas=$pjg*$lbr;
$keliling= 2*($pjg+$lbr);
echo "Luas Persegi Panjang = $luas <br>";
echo "Keliling Persegi Panjang = $keliling <br> ";
    ?>
    <img src="https://i.pinimg.com/474x/71/4c/b8/714cb808416eb37552750ba615e3aa6d.jpg" alt="">
    <button><a href="index.php">Home</a></button>
</body>
</html>