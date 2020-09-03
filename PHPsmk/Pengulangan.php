<?php 

    for ($a=1; $a <= 12; $a++) { 
        echo $a.' , ';
    }
    echo "<br>";
    for ($i=12; $i >= 1; $i--) { 
        echo $i.' , ';
    }
    echo "<br>";
    $a=1;
    while ($a <= 12) {
        echo $a.' , ';
        $a++;
    }
    echo "<br>";
    $a=1;
    do {
        echo $a.' , ';
        $a++;
    } while ($a <= 12);
?>