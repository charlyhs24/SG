<?php
require_once "orang.php";
$nama = "charly";
$umur = 20;


echo "Nama Saya ".$nama;?><br><?php
echo "Umur Saya ".$umur;

define("ALAMAT","buah batu, bandung");
echo "<br>";
echo ALAMAT;

// OPERATOR
$nilai1 = 10;
$nilai2 = 20;
$nilai3 = $nilai1 + $nilai2;
echo "<br>";
echo "<br>";
echo "hasil penjumlahan nilai1+nilai2 : ".$nilai3;
echo "<br>";
echo "<br>";
// PERCABANGAN 
    if ($nilai1<$nilai2) {
        echo "benar nilai1 < nilai2";
    }else{
        echo "salah ";
    }
// for
for ($i=0; $i < $nilai2 ; $i++) { 
    echo $nilai2."<br>";
}
echo "<br>";
// while
$a=0;
while ($a <= $nilai3) {
    echo $a."<br>";
    $a= $a+1;
}

// asdjsadjksadjsa;das
echo "<br>";
for ($i=0; $i <10 ; $i++) { 
    $orang = new orang;
    $orang->nama = "charly";
    $orang->umur = "lalalala";
    $data = array($orang);
}
foreach ($data as $datas => $value) {
    echo $value->nama;
}


?>
