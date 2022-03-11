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
        //PERKALIAN
        echo "<b>OPERASI PERKALIAN</b>";
        //menambahkan baris enter
        echo "<BR>";
        //membuat dan menambah nilai variabel. untuk kali ini masih bersifat statis
        $a= 13;
        $b=11;
        $hasil=$a*$b;
        echo "13 x 11 = $hasil";
        echo "<BR>";
        echo "<b>OPERASI PEMBAGIAN</b>";
        echo"<br>";
        $hasil2=$a/$b;
        echo "13 : 11 = $hasil2";
        echo "<BR>";
        echo"<b>OPERASI PENJUMLAHAN</b>";
        echo "<br>";
        $hasil3=$a + $b;
        echo "13 + 11 = $hasil3";
        echo"<br>";
        echo "<b>OPERASI PENGURANGAN</b>";
        echo"<br>";
        $hasil4= $a-$b;
        echo "13 - 11 = $hasil4";
        ?>    
</body>
</html>
