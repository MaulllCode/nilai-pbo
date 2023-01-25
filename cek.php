<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nama = $_POST['nama'];
    $bin = $_POST['bin'];
    $bing = $_POST['bing'];
    $mat = $_POST['mat'];
    $mapel = 3;

    echo "Nama : " . $nama;
    echo "<br>";
    echo "Nilai B Indonesia : " . $bin;
    echo "<br>";
    echo "Nilai B Inggris : " . $bing;
    echo "<br>";
    echo "Nilai Matematika : " . $mat;
    echo "<br>";
    echo "Rata-rata : ", $rata = ($bin + $bing + $mat) / $mapel;
    echo "<br>";

    if ($rata >= 50)
        echo "Status : lulus";
    else {
        echo "Status : gagal";
    }
    echo "<br>";

    ?>
</body>

</html>