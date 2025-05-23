<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajargenjang</title>
</head>
<body>
  <form action="jajargenjangaction.php" method="post">
    <table>
      <tr>
        <td>Masukan Alas</td>
        <td>:</td>
        <td><input type="number" name="alas" id="alas"> <br></td>
      </tr>
      <tr>
        <td>Masukan Tinggi</td>
        <td>:</td>
        <td><input type="number" name="tinggi" id="tinggi"> <br></td>
      </tr>
      <tr>
        <td>Masukan Sisi Miring</td>
        <td>:</td>
        <td><input type="number" name="sisiMiring" id="sisiMiring"> <br></td>
      </tr>
    </table>
    <input type="submit" value="Hitung Luas dan Keliling"> <br>

  </form>
    <button><a href="index.php">Home</a></button>
</body>
</html>