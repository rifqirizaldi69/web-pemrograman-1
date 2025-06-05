<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>
   <form action="persegiaction.php" method="post">
        <table >
            <tr>
                <td>Masukan sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id="sisi"></td>
            </tr>
            <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="luas">
                <label for="html">Luas</label><br>
                <input type="radio" name="pilih" value="keliling">
                <label for="html">Keliling</label><br>
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