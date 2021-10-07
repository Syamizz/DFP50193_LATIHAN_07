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
    $tajuk = '<h1>If happy ever after</h1>';
    $isi = 'You are great';
    echo $tajuk . $isi;
    
    #strlen()
    $jumlah = strlen($tajuk)+strlen($isi);
    echo "<p>Bilangan huruf = $jumlah </p>";

    #strstr()
    $nama = "Ahmad bin Ali";
    $cari = strstr($nama , 'amb');
    echo "<p>$cari</p>";

    #strpos()
    $nomatrik = "18DDT19F1116";
    $lokasi = strpos($nomatrik, 'F');
    echo "<p>No. Matrik: $nomatrik <br>Lokasi (T) : $lokasi</p>";

    #substr()
    $kod = substr($nomatrik,2,3);
    echo "<p>$kod</p>";

    #strpos() & substr()
    $lokasi = strpos($nomatrik,'F')+1;
    $bilangan = substr($nomatrik,$lokasi);
    echo "<p>Bilangan: $bilangan</p>";

    ?>
    <p><a href="string_array.php">String Array</a></p>
</body>
</html>