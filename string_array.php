<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Array</title>
    <style>
        *{
            font-size: 24px;
            font-family: Arial,Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
    $nama="MUHAMMAD SYAMIL";
    echo $nama[2];
    echo $nama[3];
    echo $nama[0];
    echo $nama[7];
    ?>
    <hr>

    <?php
    $pelajar[0]='MUHAMMAD';
    $pelajar[1]='SYAMIL';
    $pelajar[2]='SHAMSUDDIN';

    for($x = 0; $x < 3; $x++){
        echo $pelajar[$x].' ';
    }
    echo '<hr>';

    foreach ($pelajar as $pel){
        echo $pel . ' ';
    }
    echo '<hr>';

    $pelajars = implode(' ',$pelajar);
    echo $pelajars;
    echo '<hr>';

    $ptss = 'POLITEKNIK TUANKU SYED SIRAJUDDIN';
    $kata = explode(' ',$ptss);
    echo $kata[2];
    echo '<hr>';

    $senarai = 'Ali,Abu,Adi,Man,Akmal';
    echo "<p>Senarai asal: $senarai</p>";
    $ahli = explode(',',$senarai);
    echo '<pre>',print_r($ahli);
    ?>

    <ol>
        <?php 
        foreach($ahli as $nama){
            echo "<li>$nama</li>";
        }
        ?>
    </ol>
    <hr>

    <?php 
    $citacita = 'Doktor';
    $hasil = strcmp($citacita, 'Doktor');
    if($hasil == 0){
        echo 'Sama';
    }
    elseif($hasil<0){
        echo 'Kurang';
    }
    else {
        echo 'Lebih';
    }
    ?>
</body>
</html>