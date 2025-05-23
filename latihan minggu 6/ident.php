<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nama=$_POST['nama'];
    $nomor=$_POST['nomer'];
    $alamat=$_POST['alamat'];
    ?>
    <table border="1" style="border-collapse: collapse;word-wrap: break-word; word-break: break-all; width: 200px;">
        <tr>
            <td>Nama</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><?php echo $nomor ?></td>
        </tr>
        <tr>
            <td rowspan="10">Alamat</td>
            <td rowspan="10"><?php echo $alamat ?></td>
        </tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
 
       
    </table>
</body>
</html>