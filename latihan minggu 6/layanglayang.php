<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-layang</title>
</head>
<body>
   <form action="layanglayangaction.php" method="post">
    <table>
        <tr>
            <td>Masukan Diagonal 1</td>
            <td>:</td>
            <td><input type="number" name="diagonal1" id="diagonal1"> <br></td>
        </tr>
        <tr>
            <td>Masukan Diagonal 2</td>
            <td>:</td>
            <td><input type="number" name="diagonal2" id="diagonal2"> <br></td>
        </tr>
        <tr>
            <td>Masukan Sisi Pendek</td>
            <td>:</td>
            <td><input type="number" name="sisiPendek" id="sisiPendek"> <br></td>
        </tr>
        <tr>
            <td>Masukan Sisi Panjang</td>
            <td>:</td>
            <td><input type="number" name="sisiPanjang" id="sisiPanjang"> <br></td>
        </tr>
    </table>
    <input type="submit" value="Hitung Luas Dan Keliling">
   </form>
    <button><a href="index.php">Home</a></button>
</body>
</html>