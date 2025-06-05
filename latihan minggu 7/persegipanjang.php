<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
<form action="persegipanjangaction.php" method="post">
<table>
    <tr>
        <td>Masukan Lebar</td>
        <td>:</td>
        <td><input type="number" name="lbr" id="lbr"> <br></td>
    </tr>
    <tr>
        <td>Masukan Panjang</td>
        <td>:</td>
        <td><input type="number" name="pjg" id="pjg"> <br></td>
    </tr>
    <tr>
        <td>Pilih</td>
        <td>:</td>
        <td>
            <input type="radio" name="pilih" value="luas">
            <label for="html">Luas</label><br>
            <input type="radio" name="pilih" value="keliling">
            <label for="html">Keliling</label>
            <input type="radio" name="pilih" value="semua">
            <label for="html">Luas dan Keliling</label><br>
        </td>
    </tr>
</table>
<input type="submit" value="Hitung Luas Dan Keliling">
</form>
    <button><a href="index.php">Home</a></button>
</body>
</html>