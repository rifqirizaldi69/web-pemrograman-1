<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
   <form action="segitigaaction.php" method="post">
    <table>
        <tr>
            <td>Masukan alas</td>
            <td>:</td>
            <td><input type="number" name="alas" id="alas"> <BR></td>
        </tr>
        <tr>
            <td>Masukan tinggi</td>
            <td>:</td>
            <td><input type="number" name="tinggi" id="tinggi"> <BR></td>
        </tr>
        <tr>
            <td>Masukan Sisi 1</td>
            <td>:</td>
            <td><input type="number" name="sisi1" id="sisi1"> <BR></td>
        </tr>
        <tr>
            <td>Masukan Sisi 2</td>
            <td>:</td>
            <td><input type="number" name="sisi2" id="sisi2"> <BR></td>
        </tr>
        <tr>
            <td>Masukan Sisi 3</td>
            <td>:</td>
            <td><input type="number" name="sisi3" id="sisi3"> <BR></td>
        </tr>
</table>
<input type="submit" value="Hitung Luas Dan Keliling">
</form>
    <button><a href="index.php">Home</a></button>
</body>
</html>