<!-- if tunggal -->

<?php
$nilai = 10;
if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 80) {
    echo "Nilai B";
} elseif ($nilai >= 70) {
    echo "Nilai C";
} elseif ($nilai >= 60) {
    echo "Nilai D";
} else {
    echo "Lu Goblok" ;
}



?>
<br>
<?php
if (1+2==3) {
    echo "hehe"."<br>";
}else {
    echo "salah lu awokwokwokwok"."<br>";
}

$a=60;
if ($a >= 80) {
    echo "A"."<br>";
} elseif ($a >= 70) {
    echo "B"."<br>";

} else {
    echo "C"."<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <div id="liveAlertPlaceholder"></div>
    <button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>