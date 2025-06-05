<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
   <form action="belahketupataction.php" method="post">
    <table>
        <tr>
            <td>Masukan diagonal1</td>
            <td>:</td>
            <td><input type="number" name="diagonal1" id="diagonal1"> <br></td>
        </tr>
        <tr>
            <td>Masukan diagonal2 </td>
            <td>:</td>
            <td><input type="number" name="diagonal2" id="diagonal2"> <br></td>
        </tr>
        <tr>
            <td>Masukan Sisi</td>
            <td>:</td>
            <td><input type="number" name="sisi" id="sisi"> <br></td>
        </tr>
        <tr>
            <td>Pilih</td>
            <td>:</td>
            <td>
                <input type="radio" name="pilih" value="luas">
                <label for="html">Luas</label>
                <input type="radio" name="pilih" value="keliling">
                <label for="html">Keliling</label>
                <input type="radio" name="pilih" value="semua">
                <label for="html">Luas dam keliling</label>
            </td>
        </tr>
</table>
<input type="submit" value="Hitung Luas Dan Keliling">

</form>
    <button><a href="index.php">Home</a></button>
</body>
</html>

