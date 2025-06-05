<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Masukan Indentitas Anda</h1>
    <form action="ident.php" method="post">
        <table>
            <tr>
                <td> <label for="">Identitas Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama"><br></td>
            </tr>
            <tr>
                <td>
                    <label for="">Isikan Nomor Telepon</label>
                </td>
                <td>:</td>
                <td> <input type="number" name="nomer" id="nomer"><br></td>
            </tr>
            <tr>
                <td>
                    <label for="">Isikan Alamat</label>
                </td>
                <td>:</td>
                <td> <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea><br></td>
        </table>
        <input type="submit" value="Tampil">
        <input type="reset" value="Batal">
    </form>
</body>
</html>