<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>
    <?php
$sisi = $_POST ['sisi']; // Default value if not set
$luas = $sisi * $sisi;
$keliling = 4 * $sisi;

echo "Luas Persegi: $luas<br>";
echo "Keliling Persegi: $keliling";
?> <br>
<img src="https://i.pinimg.com/736x/b4/35/0d/b4350d3732ff5bb0a8906afa7b7583cf.jpg" alt="">
<button><a href="index.php">Home</a></button>
</body>
</html>