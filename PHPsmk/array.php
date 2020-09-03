<?php 

$buah=['mangga',500,'jeruk',300,'apel',2.5];

var_dump($buah);
echo "<br>";
echo $buah[2];

echo "<br>";
foreach ($buah as $key => $value) {
    echo $key."->".$value;
    echo "<br>";
}

// array asosiatif
$harga=['mangga'=>300,'jeruk'=>200,'apel'=>400];
var_dump($harga);
echo "<br>";
foreach ($harga as $key => $value) {
    
    echo $key." Harganya ".$value;
    echo "<br>";
   
}
 echo $harga["mangga"];
echo "<br>";
 $isi = array_keys($harga);
 var_dump($isi);
 echo "<br>";
 echo $isi[1];
?>