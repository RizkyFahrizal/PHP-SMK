<?php 
$tanggal=0;
$hasil = $tanggal < 32;

if($tanggal<32){
    if($tanggal>0){
        echo "benar";
    }
    else{
        echo "salah";
    }
}   
    else{
        echo "salah";
    }

    echo "<br>";

    $nilai=101;
    if ($nilai<=100) {
        if ($nilai>=0) {
            echo "Nilai Benar";
        }
        else {
            echo "Nilai Salah";
        }
    }
    else {
            echo "Nilai Salah";
    }

    echo "<br>";

    if ($nilai >=0 && $nilai<=100) {
        echo "Nilai benar";
    }
    else {
        echo "Nilai Salah";
    }

    echo "<br>";

    if ($nilai >=100 || $nilai <=0) {
        echo "Nilai Bnenar";
    }
    else {
        echo "Nilai salah";
    }
?>